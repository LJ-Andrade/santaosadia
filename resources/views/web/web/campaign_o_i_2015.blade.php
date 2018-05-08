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


<h2 style="font-family:'Quicksand', sans-serif; font-size:50px; color:#F4587A;">oto&ntilde;o, invierno 2015</h2>
<div class="content">

        <!-- Adding gallery images. We use resized thumbnails here for better performance, but it’s not necessary -->

        <div id="galleria">
            <p><a href="{{ asset('web/img/campaign_o_i_2015/1_ch.jpg') }}">
              <img data-title="Campa&ntilde;a" data-description="Oto&ntilde;o / Invierno 2015" src="{{ asset('web/img/campaign_o_i_2015/thumb/1_thumb.jpg') }}"></a>
              
              <a href="{{ asset('web/img/campaign_o_i_2015/2_ch.jpg') }}">
              <img data-title="Campa&ntilde;a" data-description="Oto&ntilde;o / Invierno 2015" src="{{ asset('web/img/campaign_o_i_2015/thumb/2_thumb.jpg') }}"></a>
              
              <a href="{{ asset('web/img/campaign_o_i_2015/3_ch.jpg') }}">
              <img data-title="Campa&ntilde;a" data-description="Oto&ntilde;o / Invierno 2015" src="{{ asset('web/img/campaign_o_i_2015/thumb/3_thumb.jpg') }}"></a>
              
              <a href="{{ asset('web/img/campaign_o_i_2015/4_ch.jpg') }}">
              <img data-title="Campa&ntilde;a" data-description="Oto&ntilde;o / Invierno 2015" src="{{ asset('web/img/campaign_o_i_2015/thumb/4_thumb.jpg') }}"></a>
              
              <a href="{{ asset('web/img/campaign_o_i_2015/5_ch.jpg') }}">
              <img data-title="Campa&ntilde;a" data-description="Oto&ntilde;o / Invierno 2015" src="{{ asset('web/img/campaign_o_i_2015/thumb/5_thumb.jpg') }}"></a>
           
            </p>
            <p>&nbsp;</p>
        </div>
    </div>

    <div id="concepto">
    <h2>Inspiraci&oacute;n Oto&ntilde;o / Invierno 2015</h2>
    <h3><p>

Una nueva temporada para la marca buscando como desaf&iacute;o creativo lograr un producto vers&aacute;til y con toques audaces.
El esp&iacute;ritu de la mujer fuente de inspiraci&oacute;n aflora de sus sensaciones, sus necesidades y sus ganas de ser &uacute;nica sin olvidar que requiere estar c&oacute;moda para sus m&uacute;ltiples actividades. Marcando tendencia como siempre, el mix de transparencias con texturas florales, sedas y puntillas, satenes y cuero, equilibran un universo oto&ntilde;al, que deja de ser gris y aburrido y que ya es un sello de la firma.
Prendas con una apuesta fuerte sacuden a los sentidos, especialmente a la vista y al tacto, aguayos combinados con cuero en camperas, pieles con g&eacute;neros m&aacute;s vaporosos, en tapados y vestidos lenceros y encajes que descubren lo m&aacute;s sensual de la mujer; disparan las infinitas posibilidades de reinventarnos y marcar la diferencia. El brillo, el glamour y el lujo terminan de coronar una colecci&oacute;n decididamente jugada.
La paleta de color va desde losneutros a tonos de temporada como petr&oacute;leo, borravino y violeta; aparecen tambi&eacute;n metalizados en detalles de recortes en lentejuelasy breteles. En cuanto a las tipolog&iacute;as, se destacan vestidos con el talle a la cintura y l&iacute;nea evas&eacute; en faldas; fieles a nuestros b&aacute;sicos, musculosas, soleros, remerones y chaquetas aparecen en primer plano para inundar el placard femenino de gracia y espontaneidad.
Como cada nueva temporada los b&aacute;sicos elegidos por la firma son: chalecos de piel, musculosas de sant&eacute;n, vestidos largos, camperas y calzas de cuero, crear&aacute;n infinitos looks mezcl&aacute;ndolos con prendas que ya se tengan de temporadas anteriores.
Una propuesta atractiva y muy ponible marcando el 5to a&ntilde;o en el mercado para la marca.


</p></h3>
    
    
    <!--<h2>FICHA T&eacute;CNICA:</h2>
    
        	<h3><p>PH: Valeria Blanc <br/>
Modelo: Daiana Primo<br/>
Estilismo: Yamila Coller<br/>
Pelo y maquillaje:Claudia Ver&oacute;nica Etchevarne<br/>
Locaci&oacute;n: Hoster&iacute;a del Puerto - Col&oacute;n Entr&eacute; R&iacute;os
</p></h3>-->
    
    
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