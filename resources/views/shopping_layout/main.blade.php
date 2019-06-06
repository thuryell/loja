<!DOCTYPE html>
<html lang="pt">
  <head>
    <title>Shoppers &mdash; Colorlib e-Commerce Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="{{asset('/fonts/icomoon/style.css')}}">
    
    <link rel="stylesheet" href="{{asset('css/shopping_css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/shopping_css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/shopping_css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('css/shopping_css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/shopping_css/owl.theme.default.min.css')}}">


    <link rel="stylesheet" href="{{asset('css/shopping_css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('css/shopping_css/style.css')}}">

    @yield('style')
  </head>
  <body>
    <div class="site-wrap">
        @include('shopping_layout.navbar')
            @yield("content")
        @include('shopping_layout.footer')
    </div>
    <script src="{{asset('/js/shopping_js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('/js/shopping_js/jquery-ui.js')}}"></script>
    <script src="{{asset('/js/shopping_js/popper.min.js')}}"></script>
    <script src="{{asset('/js/shopping_js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/js/shopping_js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('/js/shopping_js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('/js/shopping_js/aos.js')}}"></script>

    <script src="{{asset('/js/shopping_js/main.js')}}"></script>
  </body>
</html>