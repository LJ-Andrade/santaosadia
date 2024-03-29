<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>@yield('title')</title>

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Adaptamos tendencias internacionales a nuestro estilo y también nos mantenemos fieles a prendas que son infaltables para el guardarropa de cualquier mujer."  />
    	<meta name="keywords" content="SantaOsadia, Santa Osadia, ropa, mujer, ropa mujer, vestidos, pollera, vestido, indumentaria, color, rojo, tendencia, color, tejido, romantico, moda, zapatos, santa, osadia, femenino, concepto, estampado, prenda, versatilidad, temporada"/>
		<meta name="author" content="Vimana Studio"/>
    	<meta name="owner" content="Santaosadia" />
    	<meta name="copyright" content="Copyright (c) 2018 - Vimana Studio" />
		<meta name="theme-color" content="#0d1d41"><!-- Chrome, Firefox OS and Opera -->
		<meta name="msapplication-navbutton-color" content="#0d1d41"><!-- Windows Phone -->
		<meta name="apple-mobile-web-app-status-bar-style" content="#0d1d41"><!-- iOS Safari -->
		<link rel="shortcut icon" href="{{ asset('web/img/so-logo_new.jpg') }}"><!-- Favicon -->

		{{-- <meta property="og:url"         content="http://vimana.studio" />
		<meta property="og:type"        content="article" />
		<meta property="og:title"       content="Diseño Web y Diseño Gráfico" />
		<meta property="og:description" content="Somos un equipo de trabajo dedicado a desarrollar contenido visual e interactivo" />
		<meta property="og:image"       content="{{ asset('webimages/logos/main-logo.png') }}" />
		<meta name="twitter:title"      content="Studio Vimana" />
		<meta name="twitter:image"      content="{{ asset('webimages/logos/main-logo.png') }}" />
		<meta name="twitter:url"        content="http://vimana.studio" /> --}}
		{{-- <meta name="twitter:card"       content="" /> --}}
		{{--<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">--}}
		<link rel="stylesheet" type="text/css" href="{{ asset('web/css/bootstrap.css') }}">
		{{-- Original Styles --}}
		<link rel="stylesheet" type="text/css" href="{{ asset('web/css/styles.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('web/css/main.css') }}">
		{{-- New Styles --}}
		<link rel="stylesheet" type="text/css" href="{{ asset('css/web.css') }}">

		<!-- Beginning of compulsory code below -->

		<link rel="stylesheet" type="text/css" href="{{ asset('web/css/dropdown/dropdown.css') }}" media="screen">
		<link rel="stylesheet" type="text/css" href="{{ asset('web/css/dropdown/themes/nvidia.com/default.advanced.css') }}" media="screen">
		<link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Quicksand'>
		@yield('styles')
	</head>
	<body>
		<div id="header">
			@include('layouts.web.partials.nav')
		</div>
		@yield('content')
		@yield('scripts')
		@yield('custom_js')
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-15280066-21', 'auto');
			ga('send', 'pageview');
		</script>
	</body>
</html>