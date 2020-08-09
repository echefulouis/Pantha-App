<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title') </title>

    <meta name="description" content="@yield('description')">
    
    <meta name="keywords" content="@yield('keywords')">

    <link
      rel="stylesheet"
      href="{{ asset('frontend/fonts/fontawesome/css/font-awesome.min.css')}}"
    />
    <link rel="stylesheet" href="{{ asset('frontend/styles/bootstrap-css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend/styles/bootstrap-css/animation.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend/styles/nav.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/style.css')}}" />

    @yield('extrastyle')
    
  </head>
  <body>
    <div class="loader-bg">
      <div class="loader"></div>
    </div>
    <!-- header section -->
    @include('site.panels.header')

    <div id="app">
      @yield('content')
    </div>

    <!-- footer section -->
     @include('site.panels.footer')
   
    <script src="{{ asset('frontend/js/bootstrap-js/jquery.js')}}"></script>
    <script src="{{ asset('frontend/js/bootstrap-js/bootstrap.js')}}"></script>
    <script src="{{ asset('frontend/js/bootstrap-js/popper.js')}}"></script>
    <script src="{{ asset('frontend/js/validation.js')}}"></script>
    <script src="{{ asset('frontend/js/custom.js')}}"></script>
    <script src="{{ asset('frontend/js/navBar.js')}}"></script>

    <!-- <script src="{{ asset(mix('js/frontend.js')) }}"></script> -->
    @yield('extrascript')
  </body>
</html>
