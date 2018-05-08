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

    <div id="spacer" class="spacergral"></div>
	<div id="cuerpo">
		<h2 style="font-family:'Quicksand', sans-serif; font-size:50px; color:#F4587A;">oto&ntilde;o, invierno 2013</h2>
		<div class="content">
			<!-- Adding gallery images. We use resized thumbnails here for better performance, but it’s not necessary -->

			<div id="galleria">
				<p><a href="{{ asset('web/img/campaign_o_i_2013/1_ch.jpg') }}">
				<img data-title="Campa&ntilde;a" data-description="Oto&ntilde;o / Invierno 2013" src="{{ asset('web/img/campaign_o_i_2013/thumb/1_thumb.jpg') }}"></a>

				<a href="{{ asset('web/img/campaign_o_i_2013/2_ch.jpg') }}">
				<img data-title="Campa&ntilde;a" data-description="Oto&ntilde;o / Invierno 2013" src="{{ asset('web/img/campaign_o_i_2013/thumb/2_thumb.jpg') }}"></a>

				<a href="{{ asset('web/img/campaign_o_i_2013/3_ch.jpg') }}">
				<img data-title="Campa&ntilde;a" data-description="Oto&ntilde;o / Invierno 2013" src="{{ asset('web/img/campaign_o_i_2013/thumb/3_thumb.jpg') }}"></a>

				<a href="{{ asset('web/img/campaign_o_i_2013/4_ch.jpg') }}">
				<img data-title="Campa&ntilde;a" data-description="Oto&ntilde;o / Invierno 2013" src="{{ asset('web/img/campaign_o_i_2013/thumb/4_thumb.jpg') }}"></a>

				<a href="{{ asset('web/img/campaign_o_i_2013/5_ch.jpg') }}">
				<img data-title="Campa&ntilde;a" data-description="Oto&ntilde;o / Invierno 2013" src="{{ asset('web/img/campaign_o_i_2013/thumb/5_thumb.jpg') }}"></a>

				<a href="{{ asset('web/img/campaign_o_i_2013/6_ch.jpg') }}">
				<img data-title="Campa&ntilde;a" data-description="Oto&ntilde;o / Invierno 2013" src="{{ asset('web/img/campaign_o_i_2013/thumb/6_thumb.jpg') }}"></a>

				<a href="{{ asset('web/img/campaign_o_i_2013/7_ch.jpg') }}">
				<img data-title="Campa&ntilde;a" data-description="Oto&ntilde;o / Invierno 2013" src="{{ asset('web/img/campaign_o_i_2013/thumb/7_thumb.jpg') }}"></a>

				<a href="{{ asset('web/img/campaign_o_i_2013/8_ch.jpg') }}">
				<img data-title="Campa&ntilde;a" data-description="Oto&ntilde;o / Invierno 2013" src="{{ asset('web/img/campaign_o_i_2013/thumb/8_thumb.jpg') }}"></a>

				
				</p>
				<p>&nbsp;</p>
			</div>
		</div>




    <div id="concepto">
    
		<h3><p>SantaOsadia propone para este oto&ntilde;o invierno un look fresco y descontracturado donde se destacan las texturas y los estampados hippie folk, sin perder la naturalidad y el esp&iacute;ritu de la mujer para la cual dise&ntilde;amos colecci&oacute;n tras colecci&oacute;n.
		La clave del estilo son las calzas con l&uacute;rex, remerones con aplicaciones de tachas, vestidos s&uacute;per c&oacute;modos y sweaters oversize; todo con la mirada puesta en las tendencias actuales, necesidades y practicidad a la hora de vestirse.
		Destacamos como siempre una silueta ultrafemenina,  fusionando  g&eacute;neros livianos como fibranas, gasas o sedas con gamuzas, lanas y jacquares; logrando los looks m&aacute;s originales. 
		La paleta de color viaja desde los desaturados: azules, beiges y rosados (aparecen en tonos d&eacute;biles) hasta los rojos y bordos m&aacute;s osados, sin olvidar el cl&aacute;sico negro y camel. El color toma fuerza en estampados alegres y sutiles, con reminiscencias a la naturaleza como flores y hojas, pasando por las guardas m&aacute;s variadas; que se lucen muy bien en vestidos, faldas y camisas.
		Los av&iacute;os terminan de dar el detalle a las prendas: botones con forma de coraz&oacute;n, tachas en distintos tama&ntilde;os, cintas y pompones.
		</p></h3>


		<h2>FICHA T&Eacute;CNICA:</h2>

		<h3><p>PH: Valeria Blanc <br/>
		Modelo: Daiana Primo<br/>
		Estilismo: Yamila Coller<br/>
		Pelo y maquillaje:Claudia Ver&oacute;nica Etchevarne<br/>
		Locaci&oacute;n: Hoster&iacute;a del Puerto - Col&oacute;n Entr&eacute; R&iacute;os
		</p></h3>
    
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