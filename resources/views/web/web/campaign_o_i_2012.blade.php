@extends('layouts.web.main')

@section('title', 'Santaosadia')

@section('styles')
<style>

            /* Demo styles */
            .content{
	font: 12px/1.4 "helvetica neue",arial,sans-serif;
	width: 650px;
	margin-top: 0px;
	margin-left: auto;
	float: none;
	margin-right: auto;
	margin-bottom: 0px;
}
#concepto h2 {
	font-family: Arial, Helvetica, sans-serif;
	color: #CA2861;
	font-weight: bold;
	margin-bottom: 5px;
}
#concepto h3 {
	font-family: Arial, Helvetica, sans-serif;
	color: #666;
	font-size: 14px;
	line-height: 20px;
	text-align: justify;
}
#concepto {
	width: 280px;
	float: left;
	margin-top: 10px;
	padding: 10px;
	margin-left: 20px;
}
            h1{
	font-size: 12px;
	font-weight: normal;
	color: #000;
	margin: 0;
}
            p{margin:0 0 20px}
            a {color:#22BCB9;text-decoration:none;}
            .cred{margin-top:20px;font-size:11px;}

            /* This rule is read by Galleria to define the gallery height: */
            #galleria{height:550px}

        </style>

@endsection

@section('content')

    <div id="spacer" class="spacergral"></div>
    <div id="cuerpo">
        <h2 style="font-family:'Quicksand', sans-serif; font-size:50px; color:#F4587A;">otoño, invierno 2012</h2>

        <div class="content">
            <div id="galleria">
                <a href="{{ asset('web/img/campaign_o_i_2012/oi2012_1.jpg') }}">
                <img data-title="Campaña" data-description="Otoño / Invierno 2012" src="{{ asset('web/img/campaign_o_i_2012/thumb/oi2012_1.jpg') }}"></a>

                <a href="{{ asset('web/img/campaign_o_i_2012/oi2012_2.jpg') }}">
                <img data-title="Campaña" data-description="Otoño / Invierno 2012" src="{{ asset('web/img/campaign_o_i_2012/thumb/oi2012_2.jpg') }}"></a>

                <a href="{{ asset('web/img/campaign_o_i_2012/oi2012_3.jpg') }}">
                <img data-title="Campaña" data-description="Otoño / Invierno 2012" src="{{ asset('web/img/campaign_o_i_2012/thumb/oi2012_3.jpg') }}"></a>

                <a href="{{ asset('web/img/campaign_o_i_2012/oi2012_4.jpg') }}">
                <img data-title="Campaña" data-description="Otoño / Invierno 2012" src="{{ asset('web/img/campaign_o_i_2012/thumb/oi2012_4.jpg') }}"></a>

                <a href="{{ asset('web/img/campaign_o_i_2012/oi2012_5.jpg') }}">
                <img data-title="Campaña" data-description="Otoño / Invierno 2012" src="{{ asset('web/img/campaign_o_i_2012/thumb/oi2012_5.jpg') }}"></a>    

                <a href="{{ asset('web/img/campaign_o_i_2012/oi2012_6.jpg') }}">
                <img data-title="Campaña" data-description="Otoño / Invierno 2012" src="{{ asset('web/img/campaign_o_i_2012/thumb/oi2012_6.jpg') }}"></a> 
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