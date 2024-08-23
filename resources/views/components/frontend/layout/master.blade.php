<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content>
    <meta name="keywords" content>

    <title>Travel India</title>

    <link rel="icon" type="image/x-icon" href="{{asset('frontend-assets/img/logo/favicon.png')}}">

    <link rel="stylesheet" href="{{asset('frontend-assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend-assets/css/all-fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend-assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend-assets/css/magnific-popup.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend-assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend-assets/css/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend-assets/css/jquery.timepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend-assets/css/nice-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend-assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend-assets/css/custom-style.css')}}">
    <link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    {{ $style ?? '' }}
</head>
<body>
<div class="site-layout">
    <x-frontend.layout.header/>
    {{ $slot }}
    <x-frontend.layout.footer/>
</div>

<a href="#" id="scroll-top"><i class="far fa-arrow-up"></i></a>
    <script src="{{asset('frontend-assets/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('frontend-assets/js/modernizr.min.js')}}"></script>
    <script src="{{asset('frontend-assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('frontend-assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('frontend-assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('frontend-assets/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('frontend-assets/js/jquery.appear.min.js')}}"></script>
    <script src="{{asset('frontend-assets/js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('frontend-assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontend-assets/js/counter-up.js')}}"></script>
    <script src="{{asset('frontend-assets/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('frontend-assets/js/jquery.timepicker.min.js')}}"></script>
    <script src="{{asset('frontend-assets/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('frontend-assets/js/wow.min.js')}}"></script>
    <script src="{{asset('frontend-assets/js/main.js')}}"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js" defer></script>

{{ $js ?? '' }}

</body>

</html>
