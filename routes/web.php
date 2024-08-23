<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Models\Category;
use App\Models\Category_Relation;
use App\Models\CustomFields;
use App\Models\CustomOptions;
use App\Models\Role;
use App\Models\Srz_Cpt;
use App\Models\User;
use Illuminate\Support\Facades\View;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    /***
     * 
     * 
    //add new movie
    $movie = new Srz_Cpt();
    $movie->post_title = 'New Movie 2';
    $movie->post_content = 'New Movie Content';
    $movie->post_type = 'movies';
    $movie->save();
 
    //add new category
    $category = new Category();
    $category->name = 'Comedyx';
    $category->slug = 'comedyx';
    $category->type = 'movies'; 
    $category->save();
    // assing category to movie
    Category_Relation::create([
        'post_id' => $movie->id,
        'category_id' => $category->id
    ]);

    ***/

    // get recent movies 
    $posts = Srz_Cpt::where('post_type', 'movies')->orderBy('id', 'desc')->limit(5)->get();
    return View::make('pages.home', compact('posts'));

});











//search results
Route::get('search', function(Request $request){
    $search = $request->input('q');
    $posts =  Srz_Cpt::where('post_title', 'like', '%'.$search.'%')->get();
    return view('pages.search', compact('posts'));
});

 
//catergory view

Route::get('category/{category}', function(Category $category){ 
    
    $posts =  $category->posts()->get(); 
    
    return view('pages.category', compact('category','posts'));

})->name('category');








//login routes
Route::get('login', [AuthController::class,'login'])->middleware('guest')->name('login');

Route::post('login', [AuthController::class,'postlogin'] )->middleware('guest')->name('loginProccess');

Route::get('register', [AuthController::class,'register'] )->middleware('guest')->name('register');
Route::post('register', [AuthController::class,'postRegister'] )->middleware('guest')->name('registerProccess');




Route::get('logout', [AuthController::class,'logout'])->middleware('auth')->name('logout');
Route::get('check', function(){
    //if exists get the id or insert 
    $is_admin =  User::find(1)->hasRole('admin');
    var_dump($is_admin);
    User::find(1)->assignRole('admin');
    var_dump(User::find(1)->getRole());

    return Auth::check();
})->middleware('role:admin');

// route group for admin, names also
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'role:admin'], function () {
   
    Route::get('/', function () {
        return view('admin.pages.dashboard');
    })->name('dashboardHome');


    Route::get('dashboard', function () {
        return view('admin.pages.dashboard');
    })->name('dashboard');

    //movies manage group route , view like admin.pages.movies
    Route::group(['prefix' => 'movies', 'as' => 'movies.'], function () {

        Route::get('/',[App\Http\Controllers\MoviesController::class, 'index'])->name('moviesHome');
        Route::get('add',  [ App\Http\Controllers\MoviesController::class, 'add'])->name('add');
        //post add with img upload
        Route::post('add', [ App\Http\Controllers\MoviesController::class, 'store']  )->name('addProccess');

        Route::get('edit/{id}', [App\Http\Controllers\MoviesController::class, 'edit'] ) ->name('edit');
        //post update
        Route::post('edit/{id}', [App\Http\Controllers\MoviesController::class, 'update'] )->name('update');
        
        //delete movie
        Route::get('delete/{id}',  [App\Http\Controllers\MoviesController::class, 'delete'] )->name('delete');

    });
    //news manage group route , view like admin.pages.news
    Route::group(['prefix' => 'news', 'as' => 'news.'], function () {

        Route::get('/',[App\Http\Controllers\NewsController::class, 'index'])->name('index');
        Route::get('add',  [ App\Http\Controllers\NewsController::class, 'add'])->name('add');
        //post add with img upload
        Route::post('add', [ App\Http\Controllers\NewsController::class, 'store']  )->name('addProccess');

        Route::get('edit/{id}', [App\Http\Controllers\NewsController::class, 'edit'] ) ->name('edit');
        //post update
        Route::post('edit/{id}', [App\Http\Controllers\NewsController::class, 'update'] )->name('update');
        
        //delete news
        Route::get('delete/{id}',  [App\Http\Controllers\NewsController::class, 'delete'] )->name('delete');

    });


    //categories manage group route , view like admin.pages.categories
    Route::group(['prefix' => 'categories', 'as' => 'categories.'], function () {

        Route::get('/',[App\Http\Controllers\CategoryController::class, 'index'])->name('categoriesHome');
        Route::get('add',  [ App\Http\Controllers\CategoryController::class, 'add'])->name('add');
        //post add with img upload
        Route::post('add', [ App\Http\Controllers\CategoryController::class, 'store']  )->name('addProccess');

        Route::get('edit/{id}', [App\Http\Controllers\CategoryController::class, 'edit'] ) ->name('edit');
        //post update
        Route::post('update/{id}', [App\Http\Controllers\CategoryController::class, 'update'] )->name('update');
        
        //delete category
        Route::get('delete/{id}',  [App\Http\Controllers\CategoryController::class, 'delete'] )->name('delete');
    });

    //users manage group route , view like admin.pages.users
    Route::group(['prefix' => 'users', 'as' => 'users.'], function () {

        Route::get('/',[App\Http\Controllers\UserController::class, 'index'])->name('index');
        Route::get('add',  [ App\Http\Controllers\UserController::class, 'add'])->name('add');
        //post add with img upload
        Route::post('add', [ App\Http\Controllers\UserController::class, 'store']  )->name('store');

        Route::get('edit/{id}', [App\Http\Controllers\UserController::class, 'edit'] ) ->name('edit');
        //post update
        Route::post('update/{id}', [App\Http\Controllers\UserController::class, 'update'] )->name('update');
        
        //delete user
        Route::get('delete/{id}',  [App\Http\Controllers\UserController::class, 'delete'] )->name('delete');
    } );


 

    Route::get('settings', [App\Http\Controllers\AdminController::class, 'settings']  )->name('settings');
    //store settings 
    Route::post('settings',)->name('settingsProccess');
    //profile 
    Route::get('profile', [App\Http\Controllers\AdminController::class, 'profile']   )->name('profile');
    //store profile
    Route::post('profile', [App\Http\Controllers\AdminController::class, 'profileStore'] )->name('profileProccess');

    
});
//account controller 
Route::get(
    '/feed',
    [
        App\Http\Controllers\frontend\profileController::class,
        'feed'
    ]
)->name("frontend.feed")->middleware('auth')
;

//signup route
Route::get('signup', function(){

    return view('auth.signup');
})->name('signups');

//signin route
Route::get('signin', function(){

    return view('auth.signin');
})->name('signins');


//dashboard
Route::get('home', function(){

    return view('pages.dashboard.index');
})->name('homes');

//account
Route::get('account', function(){

    return view('pages.dashboard.account');
})->name('accountHome');

//addfunds
Route::get('addfunds', function(){

    return view('pages.dashboard.addfunds');
})->name('addfundsHome');


//api
Route::get('api', function(){

    return view('pages.dashboard.api');
})->name('apiHome');


//affiliates
Route::get('affiliates', function(){

    return view('pages.dashboard.affiliates');
})->name('affiliatesHome');


//faq
Route::get('faq', function(){

    return view('pages.dashboard.faq');
})->name('faqHome');

//dashboard
Route::get('dashboard', function(){

    return view('pages.dashboard.dashboard');
})->name('dashboardHome');


//massorder
Route::get('massorder', function(){

    return view('pages.dashboard.massorder');
})->name('massorderHome');

//services
Route::get('services', function(){

    return view('pages.dashboard.services');
})->name('servicesHome');

//terms
Route::get('terms', function(){

    return view('pages.dashboard.terms');
})->name('termsHome');

//tickets
Route::get('tickets', function(){

    return view('pages.dashboard.tickets');
})->name('ticketsHome');

//updates
Route::get('update', function(){

    return view('pages.dashboard.update');
})->name('updatesHome');


//decreased
Route::get('decreased', function(){

    return view('pages.dashboard.decreased');
})->name('decreasedHome');


//disabled
Route::get('disabled', function(){

    return view('pages.dashboard.disabled');
})->name('disabledHome');

//enabled
Route::get('enabled', function(){

    return view('pages.dashboard.enabled');
})->name('enabledHome');


//increased
Route::get('increased', function(){

    return view('pages.dashboard.increased');
})->name('increasedHome');


//new
Route::get('new', function(){

    return view('pages.dashboard.new');
})->name('newHome');














// child-panel
Route::get('child-panel', function(){

    return view('pages.dashboard.child-panel');
})->name('childPanelHome');





//order
Route::get('order', function(){

    return view('pages.dashboard.orders');
})->name('orderHome');



//canceled
Route::get('order/canceled', function(){

    return view('pages.dashboard.canceled');
})->name('canceledHome');

//completed
Route::get('order/completed', function(){

    return view('pages.dashboard.completed');
})->name('completedHome');

//inprogress
Route::get('order/inprogress', function(){

    return view('pages.dashboard.inprogress');
})->name('inprogressHome');


//partial
Route::get('order/partial', function(){

    return view('pages.dashboard.partial');
})->name('partialHome');

//pending
Route::get('order/pending', function(){

    return view('pages.dashboard.pending');
})->name('pendingHome');


//processing
Route::get('order/processing', function(){

    return view('pages.dashboard.processing');
})->name('processingHome');









//single view post_type=movies and /{slug}
Route::get('/{post}', [App\Http\Controllers\MoviesController::class, 'single'])->name('single' );


// fallaback route
Route::fallback(function(){
    return view('404');
});
Auth::routes();