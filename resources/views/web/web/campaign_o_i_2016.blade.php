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
	color: #CA2861;
	font-weight: bold;
	margin-bottom: 5px;
}
#concepto h3 {
	font-family: Arial, Helvetica, sans-serif;
	color: #666;
	font-size: 13px;
	line-height: 17px;
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

 
<div id="cuerpo">
<h2 style="font-family:'Quicksand', sans-serif; font-size:50px; color:#F4587A;">Oto&ntilde;o - Invierno - 2016</h2>
<div class="content">
        <!-- Adding gallery images. We use resized thumbnails here for better performance, but it’s not necessary -->
        <div id="galleria">
              <a href="{{ asset('web/img/campaign_o_i_2016/01.jpg') }}"><img data-title="Campa&ntilde;a" data-description="Oto&ntilde;o Invierno - 2016" src="{{ asset('web/img/campaign_o_i_2016/01.jpg') }}"></a>
              <a href="{{ asset('web/img/campaign_o_i_2016/02.jpg') }}"><img data-title="Campa&ntilde;a" data-description="Oto&ntilde;o Invierno - 2016" src="{{ asset('web/img/campaign_o_i_2016/02.jpg') }}"></a>
              <a href="{{ asset('web/img/campaign_o_i_2016/03.jpg') }}"><img data-title="Campa&ntilde;a" data-description="Oto&ntilde;o Invierno - 2016" src="{{ asset('web/img/campaign_o_i_2016/03.jpg') }}"></a>
              <a href="{{ asset('web/img/campaign_o_i_2016/04.jpg') }}"><img data-title="Campa&ntilde;a" data-description="Oto&ntilde;o Invierno - 2016" src="{{ asset('web/img/campaign_o_i_2016/04.jpg') }}"></a>
              <a href="{{ asset('web/img/campaign_o_i_2016/05.jpg') }}"><img data-title="Campa&ntilde;a" data-description="Oto&ntilde;o Invierno - 2016" src="{{ asset('web/img/campaign_o_i_2016/05.jpg') }}"></a>
              <a href="{{ asset('web/img/campaign_o_i_2016/06.jpg') }}"><img data-title="Campa&ntilde;a" data-description="Oto&ntilde;o Invierno - 2016" src="{{ asset('web/img/campaign_o_i_2016/06.jpg') }}"></a>
              <a href="{{ asset('web/img/campaign_o_i_2016/07.jpg') }}"><img data-title="Campa&ntilde;a" data-description="Oto&ntilde;o Invierno - 2016" src="{{ asset('web/img/campaign_o_i_2016/07.jpg') }}"></a>
              <a href="{{ asset('web/img/campaign_o_i_2016/08.jpg') }}"><img data-title="Campa&ntilde;a" data-description="Oto&ntilde;o Invierno - 2016" src="{{ asset('web/img/campaign_o_i_2016/08.jpg') }}"></a>
              <a href="{{ asset('web/img/campaign_o_i_2016/09.jpg') }}"><img data-title="Campa&ntilde;a" data-description="Oto&ntilde;o Invierno - 2016" src="{{ asset('web/img/campaign_o_i_2016/09.jpg') }}"></a>
            <p>&nbsp;</p>
        </div>
    </div>

    <div id="concepto" style="color:#F4587A;">
    <h2>Inspiraci&oacute;n:</h2>
    <h3><p>
    Nuestra colecci&oacute;n se inspira en un pa&iacute;s de maravillas, una peque&ntilde;a adolescente llamada Alicia que conjuga car&aacute;cter, belleza, inocencia y una picard&iacute;a con toques de sensualidad que nos desaf&iacute;an a potenciar su feminidad. </br>
    Mezcla de ni&ntilde;a y mujer  nos propone el desaf&iacute;o de vestirla. Esta Alicia siglo XXI es decidida, se atreve a jugar a la hora de vestir y nos proporciona infinidad de matices para lograr un estilo fiel a la marca, Santo y Osado al mismo tiempo.</br>
    Sin olvidarnos de las tendencias que pisan fuerte en esta temporada, el mundo de Alicia se fusiona con recursos que nos aportan los a&ntilde;os &#39;70. Aparecen as&iacute; las mangas oxford, gamuzas y faldas abotonadas que acercan a nuestra musa al mundo actual.</br>
    Colores vivos como el Coral, Verde, Azul animan la paleta invernal y los cl&aacute;sicos Blanco, Negro, Crudo y Beige intensifican las sensaciones oto&ntilde;ales para generar infinidad de looks y estilos.</br>
    Los textiles que elegimos son Crepes de algod&oacute;n y seda, Viscosas, Ecocuero, Gabardinas de agod&oacute;n y Morley.
    Esta temporada la premisa es atreverse, jugar, divertirse, sentirse libre y encantadora.
    </p></h3>
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