@extends('layouts.web.main')

@section('title', 'Santaosadia')

@section('styles')

<style>
            /* Demo styles */
            .content{
	font: 12px/1.4 "helvetica neue",arial,sans-serif;
	width: 650px;
	margin-top: 10px;
	margin-left: 5px;
	float: left;
}
#concepto h2 {
	font-family: Arial, Helvetica, sans-serif;
	color: #F4587A;
	;
	font-weight: bold;
	margin-bottom: 5px;
}
#concepto h3 {
	font-family: quicksand;
	color: #666;
	font-size: 13px;
	line-height: 17px;
	text-align: left;
	font-style: normal;
	font-weight: 300;
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
            #galleria{
	height: 615px
}

</style>

@endsection
@section('content')
<div id="spacer" class="spacergral"></div>

<div id="cuerpo">

    
    <h2 style="font-family:'Quicksand', sans-serif; font-size:50px; color:#F4587A;">especial fiestas</h2>

    <div class="content">

        <!-- Adding gallery images. We use resized thumbnails here for better performance, but it’s not necessary -->

        <div id="galleria">
           <p>
                <a href="{{ asset('web/img/fiestas/1_IMG_9806-ok.jpg') }}"><img data-title="Campa&ntilde;a" data-description="especial fiestas" src="{{ asset('web/img/fiestas/thumb/1_IMG_9806-ok.jpg') }}"></a>
                <a href="{{ asset('web/img/fiestas/2_IMG_9813-ok.jpg') }}"><img data-title="Campa&ntilde;a" data-description="especial fiestas" src="{{ asset('web/img/fiestas/thumb/2_IMG_9813-ok.jpg') }}"></a>
                <a href="{{ asset('web/img/fiestas/3_IMG_9847-ok.jpg') }}"><img data-title="Campa&ntilde;a" data-description="especial fiestas" src="{{ asset('web/img/fiestas/thumb/3_IMG_9847-ok.jpg') }}"></a>
                <a href="{{ asset('web/img/fiestas/4_IMG_9833-ok.jpg') }}"><img data-title="Campa&ntilde;a" data-description="especial fiestas" src="{{ asset('web/img/fiestas/thumb/4_IMG_9833-ok.jpg') }}"></a>
                <a href="{{ asset('web/img/fiestas/5_IMG_9858-ok.jpg') }}"><img data-title="Campa&ntilde;a" data-description="especial fiestas" src="{{ asset('web/img/fiestas/thumb/5_IMG_9858-ok.jpg') }}"></a>
                <a href="{{ asset('web/img/fiestas/6_IMG_9865-ok.jpg') }}"><img data-title="Campa&ntilde;a" data-description="especial fiestas" src="{{ asset('web/img/fiestas/thumb/6_IMG_9865-ok.jpg') }}"></a>
                <a href="{{ asset('web/img/fiestas/7_f11091904-ok.jpg') }}"><img data-title="Campa&ntilde;a" data-description="especial fiestas" src="{{ asset('web/img/fiestas/thumb/7_f11091904-ok.jpg') }}"></a>
                <a href="{{ asset('web/img/fiestas/8_f11100224-ok.jpg') }}"><img data-title="Campa&ntilde;a" data-description="especial fiestas" src="{{ asset('web/img/fiestas/thumb/8_f11100224-ok.jpg') }}"></a>
                <a href="{{ asset('web/img/fiestas/9_IMG_9958-ok.jpg') }}"><img data-title="Campa&ntilde;a" data-description="especial fiestas" src="{{ asset('web/img/fiestas/thumb/9_IMG_9958-ok.jpg') }}"></a>
                <a href="{{ asset('web/img/fiestas/10_IMG_9949-ok.jpg') }}"><img data-title="Campa&ntilde;a" data-description="especial fiestas" src="{{ asset('web/img/fiestas/thumb/10_IMG_9949-ok.jpg') }}"></a>
                <a href="{{ asset('web/img/fiestas/11_f7125312-ok.jpg') }}"><img data-title="Campa&ntilde;a" data-description="especial fiestas" src="{{ asset('web/img/fiestas/thumb/11_f7125312-ok.jpg') }}"></a>
                <a href="{{ asset('web/img/fiestas/12_f7136128-ok.jpg') }}"><img data-title="Campa&ntilde;a" data-description="especial fiestas" src="{{ asset('web/img/fiestas/thumb/12_f7136128-ok.jpg') }}"></a>
                <a href="{{ asset('web/img/fiestas/13_f7027328-ok.jpg') }}"><img data-title="Campa&ntilde;a" data-description="especial fiestas" src="{{ asset('web/img/fiestas/thumb/13_f7027328-ok.jpg') }}"></a>
                <a href="{{ asset('web/img/fiestas/14_IMG_9970-ok.jpg') }}"><img data-title="Campa&ntilde;a" data-description="especial fiestas" src="{{ asset('web/img/fiestas/thumb/14_IMG_9970-ok.jpg') }}"></a>
                <a href="{{ asset('web/img/fiestas/15_IMG_9875-ok.jpg') }}"><img data-title="Campa&ntilde;a" data-description="especial fiestas" src="{{ asset('web/img/fiestas/thumb/15_IMG_9875-ok.jpg') }}"></a>
                <a href="{{ asset('web/img/fiestas/16_IMG_9879-ok.jpg') }}"><img data-title="Campa&ntilde;a" data-description="especial fiestas" src="{{ asset('web/img/fiestas/thumb/16_IMG_9879-ok.jpg') }}"></a>
                <a href="{{ asset('web/img/fiestas/17_f8385920-ok.jpg') }}"><img data-title="Campa&ntilde;a" data-description="especial fiestas" src="{{ asset('web/img/fiestas/thumb/17_f8385920-ok.jpg') }}"></a>
                <a href="{{ asset('web/img/fiestas/18_f8329344-ok.jpg') }}"><img data-title="Campa&ntilde;a" data-description="especial fiestas" src="{{ asset('web/img/fiestas/thumb/18_f8329344-ok.jpg') }}"></a>
                <a href="{{ asset('web/img/fiestas/19_f11905920-ok.jpg') }}"><img data-title="Campa&ntilde;a" data-description="especial fiestas" src="{{ asset('web/img/fiestas/thumb/19_f11905920-ok.jpg') }}"></a>
                <a href="{{ asset('web/img/fiestas/20_f11560320-ok.jpg') }}"><img data-title="Campa&ntilde;a" data-description="especial fiestas" src="{{ asset('web/img/fiestas/thumb/20_f11560320-ok.jpg') }}"></a>
            </p>
            <p>&nbsp;</p>
        </div>
    </div>
    <div id="concepto" style="color:#F4587A;">
        <h2>Tiempo de brillar.</h2>
        <h3>
        <p>Nos preparamos para recibir el fin de a&ntilde;o con mucha energ&iacute;a. <br />
            <br />
            Hoy m&aacute;s que nunca es tiempo de brillar!<br />
            <br />
            En estos d&iacute;as te proponemos animarte a encender tu luz interior. <br />
            <br />
            <br />
            Direcci&oacute;n de arte/creatividad: <a href="http://www.areaveinte.com" target="_blank" style="color:#666">areaveinte.com</a><br />
            Fotos: Noelia Langle<br />
            Modelo: Camila Verellen      </p>
        </h3>
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