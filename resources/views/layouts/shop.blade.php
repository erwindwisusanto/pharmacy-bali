<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="pharmacybali" name="cepat sehat" />
    <title>pharmacy bali</title>

    <link href="{{ asset('assets/shop/libs/tiny-slider/dist/tiny-slider.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/shop/libs/slick-carousel/slick/slick.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/shop/libs/slick-carousel/slick/slick-theme.css') }}" rel="stylesheet" />

    <link rel="icon" type="image/x-icon" href="{{ asset("assets/img/favicon.svg") }}">

    <link href="{{ asset('assets/shop/libs/bootstrap-icons/font/bootstrap-icons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/shop/libs/feather-webfont/dist/feather-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/shop/libs/simplebar/dist/simplebar.min.css') }}" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('assets/shop/css/theme.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/shop/css/custom.css') }}" />
  </head>
  <body>
    <x-shop-header/>

    <main>
      {{ $slot }}
    </main>

    <script src="{{ asset('assets/shop/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/shop/libs/simplebar/dist/simplebar.min.js') }}"></script>

    <script src="{{ asset('assets/shop/js/theme.min.js') }}"></script>
    <script src="{{ asset('assets/shop/js/function.js') }}"></script>

    <script src="{{ asset('assets/shop/js/vendors/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/shop/libs/slick-carousel/slick/slick.min.js') }}"></script>
    <script src="{{ asset('assets/shop/js/vendors/slick-slider.js') }}"></script>
    <script src="{{ asset('assets/shop/libs/tiny-slider/dist/min/tiny-slider.js') }}"></script>
    <script src="{{ asset('assets/shop/js/vendors/tns-slider.js') }}"></script>
    <script src="{{ asset('assets/shop/js/vendors/zoom.js') }}"></script>
  </body>
</html>
