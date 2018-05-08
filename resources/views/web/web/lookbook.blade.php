@extends('layouts.web.main')

@section('title', 'Lookbook')

@section('styles')
	 <style>
         /* Demo styles */
        .content{
        	font: 12px/1.4 "helvetica neue",arial,sans-serif;
        	width: 850px;
        	margin: 0px auto;
        }
        h1{
        	font-size: 12px;
        	font-weight: normal;
        	color: #000;
        	margin: 0;
        }
        p { margin:0 0 20px }
        a { color:#22BCB9;text-decoration:none; }
        .cred { margin-top:20px;font-size:11px; }
        /* This rule is read by Galleria to define the gallery height: */
        #galleria { height:550px }
    </style>
@endsection

@section('content')
	<div id="spacer" class="spacergral"></div>
	<div id="cuerpo">
		<h2 class="lookbooktit">Lookbook: Primavera - Verano 2017 </h2>
		<div class="content">
		<!-- Adding gallery images. We use resized thumbnails here for better performance, but it’s not necessary -->
			<div id="galleria">
				<a href="{{ asset('web/img/lookbook/1.jpg') }}"><img data-title="" data-description="" src="{{ asset('web/img/lookbook/1.jpg') }}"></a>
				<a href="{{ asset('web/img/lookbook/2.jpg') }}"><img data-title="" data-description="" src="{{ asset('web/img/lookbook/2.jpg') }}"></a>
				<a href="{{ asset('web/img/lookbook/4.jpg') }}"><img data-title="" data-description="" src="{{ asset('web/img/lookbook/4.jpg') }}"></a>
				<a href="{{ asset('web/img/lookbook/5.jpg') }}"><img data-title="" data-description="" src="{{ asset('web/img/lookbook/5.jpg') }}"></a>
				<a href="{{ asset('web/img/lookbook/6.jpg') }}"><img data-title="" data-description="" src="{{ asset('web/img/lookbook/6.jpg') }}"></a>
				<a href="{{ asset('web/img/lookbook/7.jpg') }}"><img data-title="" data-description="" src="{{ asset('web/img/lookbook/7.jpg') }}"></a>
				<a href="{{ asset('web/img/lookbook/8.jpg') }}"><img data-title="" data-description="" src="{{ asset('web/img/lookbook/8.jpg') }}"></a>
				<a href="{{ asset('web/img/lookbook/9.jpg') }}"><img data-title="" data-description="" src="{{ asset('web/img/lookbook/9.jpg') }}"></a>
				<a href="{{ asset('web/img/lookbook/10.jpg') }}"><img data-title="" data-description="" src="{{ asset('web/img/lookbook/10.jpg') }}"></a>
				<a href="{{ asset('web/img/lookbook/11.jpg') }}"><img data-title="" data-description="" src="{{ asset('web/img/lookbook/11.jpg') }}"></a>
				<a href="{{ asset('web/img/lookbook/12.jpg') }}"><img data-title="" data-description="" src="{{ asset('web/img/lookbook/12.jpg') }}"></a>
				<a href="{{ asset('web/img/lookbook/13.jpg') }}"><img data-title="" data-description="" src="{{ asset('web/img/lookbook/13.jpg') }}"></a>
				<a href="{{ asset('web/img/lookbook/14.jpg') }}"><img data-title="" data-description="" src="{{ asset('web/img/lookbook/14.jpg') }}"></a>
				<a href="{{ asset('web/img/lookbook/15.jpg') }}"><img data-title="" data-description="" src="{{ asset('web/img/lookbook/15.jpg') }}"></a>
				<a href="{{ asset('web/img/lookbook/16.jpg') }}"><img data-title="" data-description="" src="{{ asset('web/img/lookbook/16.jpg') }}"></a>
				<a href="{{ asset('web/img/lookbook/17.jpg') }}"><img data-title="" data-description="" src="{{ asset('web/img/lookbook/17.jpg') }}"></a>
				<a href="{{ asset('web/img/lookbook/18.jpg') }}"><img data-title="" data-description="" src="{{ asset('web/img/lookbook/18.jpg') }}"></a>
				<a href="{{ asset('web/img/lookbook/19.jpg') }}"><img data-title="" data-description="" src="{{ asset('web/img/lookbook/19.jpg') }}"></a>
				<a href="{{ asset('web/img/lookbook/20.jpg') }}"><img data-title="" data-description="" src="{{ asset('web/img/lookbook/20.jpg') }}"></a>
				<a href="{{ asset('web/img/lookbook/21.jpg') }}"><img data-title="" data-description="" src="{{ asset('web/img/lookbook/21.jpg') }}"></a>
				<a href="{{ asset('web/img/lookbook/22.jpg') }}"><img data-title="" data-description="" src="{{ asset('web/img/lookbook/22.jpg') }}"></a>
				<a href="{{ asset('web/img/lookbook/23.jpg') }}"><img data-title="" data-description="" src="{{ asset('web/img/lookbook/23.jpg') }}"></a>
				<a href="{{ asset('web/img/lookbook/24.jpg') }}"><img data-title="" data-description="" src="{{ asset('web/img/lookbook/24.jpg') }}"></a>
				<a href="{{ asset('web/img/lookbook/25.jpg') }}"><img data-title="" data-description="" src="{{ asset('web/img/lookbook/25.jpg') }}"></a>
			</div>
  		</div>
	</div>
@endsection

@section('scripts')
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
	<script src="{{ asset('web/js/galleria-1.2.7.min.js') }}"></script>
@endsection

@section('custom_js')
	<script>
	// Load the classic theme
	var theme = "{{ asset('web/js/galleria.classic.min.js') }}";
	Galleria.loadTheme(theme);

	// Initialize Galleria
	Galleria.run('#galleria');
	</script>
@endsection