<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class profileController extends Controller
{
    //feed view
    public function feed(Request $request){
        view('frontend.feed');
    }
}