<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

   @include('pages.dashboard.includes.head')
</head>
<body class="dashboard" id="body">
    
           @yield('content')

       @include('pages.dashboard.includes.footer')

@stack('js')
</body>
</html>