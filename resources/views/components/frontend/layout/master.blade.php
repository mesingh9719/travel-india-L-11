<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ $title ?? 'Travel India' }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" href="images/favicon.html">
    <link rel="shortcut icon" href="images/favicon.ico">
    <link
        href="https://fonts.googleapis.com/css2?family=Epilogue:wght@600;700&amp;family=Sora:wght@400;500;700&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{asset('frontend-assets/font-awesome/css/all.min.css')}}">

    <link rel="stylesheet" href="{{asset('frontend-assets/css/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend-assets/css/nice-select2.css')}}">
    <link rel="stylesheet" href="{{asset('frontend-assets/css/venobox.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend-assets/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend-assets/datetime-picker/jquery.datetimepicker.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('frontend-assets/css/custom-style.css') }}"/>
    {{ $styles ?? '' }}
</head>
<body>
<div class="site-layout">
    <x-frontend.layout.header/>
    {{ $slot }}
    <x-frontend.layout.footer/>
</div>

<div class="back-top"><i class="fa-solid fa-chevron-up"></i></div>
<script src="{{asset('frontend-assets/js/jquery-3.7.1.min.js')}}"></script>
<script src="{{asset('frontend-assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('frontend-assets/js/swiper-bundle.min.js')}}"></script>
<script src="{{asset('frontend-assets/js/purecounter_vanilla.js')}}"></script>
<script src="{{asset('frontend-assets/js/venobox.min.js')}}"></script>
<script src="{{asset('frontend-assets/js/nice-select2.js')}}"></script>
<script src="{{asset('frontend-assets/js/custom.js')}}"></script>
<script src="{{ asset('frontend-assets/datetime-picker/jquery.datetimepicker.full.min.js') }}"></script>
<script>
    jQuery('#datetimepicker').datetimepicker();
    jQuery.datetimepicker.setLocale('en');
    // set default date
    jQuery('#datetimepicker').datetimepicker({
        format: 'Y-m-d H:i',
        value: new Date(),
        minDate: new Date(),
        step: 15
    });
</script>
{{ $scripts ?? '' }}
</body>

</html>
