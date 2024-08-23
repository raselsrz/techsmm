<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
   @include('includes.head')
</head>
<body>
   <header>
       @include('includes.header')
   </header>
           @yield('content')

       @include('includes.footer')

@stack('js')
</body>
</html>