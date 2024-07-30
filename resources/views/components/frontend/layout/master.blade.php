<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<title>{{ $title ?? 'Travel India' }}</title>
	<link rel="icon" type="image/png" href="{{asset('frontend-assets/images/fav.png')}}">

	<link rel="stylesheet" href="{{asset('frontend-assets/css/apps.css')}}">
	<link rel="stylesheet" href="{{asset('frontend-assets/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('frontend-assets/css/color.css')}}">
	<link rel="stylesheet" href="{{asset('frontend-assets/css/responsive.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('frontend-assets/css/revolution/settings.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{asset('frontend-assets/css/revolution/navigation.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{asset('frontend-assets/css/revolution/pe-icon-7-stroke/pe-icon-7-stroke.css')}}">

</head>

<body>
	<div class="site-layout">
	<x-frontend.layout.header/>
	{{ $slot }}
	<x-frontend.layout.footer/>
	</div>
	<script src="{{asset('frontend-assets/js/apps.min.js')}}"></script>
	<script src="{{asset('frontend-assets/js/script.js')}}"></script>

	<!-- REVOLUTION JS FILES -->
	<script type="text/javascript" src="{{asset('frontend-assets/js/revolution/jquery.themepunch.tools.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('frontend-assets/js/revolution/jquery.themepunch.revolution.min.js')}}"></script>

	<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  -->
	<script src="{{asset('frontend-assets/js/revolution/revolution.extension.actions.min.js')}}"></script>
	<script src="{{asset('frontend-assets/js/revolution/revolution.extension.carousel.min.js')}}"></script>
	<script src="{{asset('frontend-assets/js/revolution/revolution.extension.kenburn.min.js')}}"></script>
	<script src="{{asset('frontend-assets/js/revolution/revolution.extension.layeranimation.min.js')}}"></script>
	<script src="{{asset('frontend-assets/js/revolution/revolution.extension.migration.min.js')}}"></script>
	<script src="{{asset('frontend-assets/js/revolution/revolution.extension.navigation.min.js')}}"></script>
	<script src="{{asset('frontend-assets/js/revolution/revolution.extension.parallax.min.js')}}"></script>
	<script src="{{asset('frontend-assets/js/revolution/revolution.extension.slideanims.min.js')}}"></script>
	<script src="{{asset('frontend-assets/js/revolution/revolution.extension.video.min.js')}}"></script>
	<script src="{{asset('frontend-assets/js/revolution/revolution.initialize.js')}}"></script>

</body>

</html>
