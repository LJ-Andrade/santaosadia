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

<h2 style="font-family:'Quicksand', sans-serif; font-size:50px; color:#F4587A;">primavera, verano 2015-2016 </h2>

<div class="content">

        <!-- Adding gallery images. We use resized thumbnails here for better performance, but it’s not necessary -->

        <div id="galleria">
            <p><a href="{{ asset('web/img/campaign_p_v_2015/_MG_4326.jpg') }}">
              <img data-title="Campa&ntilde;a" data-description="Primavera / Verano 2015" src="{{ asset('web/img/campaign_p_v_2015/thumb/_MG_4326.jpg') }}"></a>
              
              <a href="{{ asset('web/img/campaign_p_v_2015/_MG_4369.jpg') }}">
              <img data-title="Campa&ntilde;a" data-description="Primavera / Verano 2015" src="{{ asset('web/img/campaign_p_v_2015/thumb/_MG_4369.jpg') }}"></a>
              
              <a href="{{ asset('web/img/campaign_p_v_2015/_MG_4385.jpg') }}">
              <img data-title="Campa&ntilde;a" data-description="Primavera / Verano 2015" src="{{ asset('web/img/campaign_p_v_2015/thumb/_MG_4385.jpg') }}"></a>
              
              <a href="{{ asset('web/img/campaign_p_v_2015/_MG_4583.jpg') }}">
              <img data-title="Campa&ntilde;a" data-description="Primavera / Verano 2015" src="{{ asset('web/img/campaign_p_v_2015/thumb/_MG_4583.jpg') }}"></a>
              
              <a href="{{ asset('web/img/campaign_p_v_2015/_MG_4687.jpg') }}">
              <img data-title="Campa&ntilde;a" data-description="Primavera / Verano 2015" src="{{ asset('web/img/campaign_p_v_2015/_MG_4687.jpg') }}"></a>
              
               <a href="{{ asset('web/img/campaign_p_v_2015/_MG_4763.jpg') }}">
              <img data-title="Campa&ntilde;a" data-description="Primavera / Verano 2015" src="{{ asset('web/img/campaign_p_v_2015/thumb/_MG_4763.jpg') }}"></a>
              
              <a href="{{ asset('web/img/campaign_p_v_2015/_MG_4881.jpg') }}">
              <img data-title="Campa&ntilde;a" data-description="Primavera / Verano 2015" src="{{ asset('web/img/campaign_p_v_2015/thumb/_MG_4881.jpg') }}"></a>
              
              <a href="{{ asset('web/img/campaign_p_v_2015/_MG_4982.jpg') }}">
              <img data-title="Campa&ntilde;a" data-description="Primavera / Verano 2015" src="{{ asset('web/img/campaign_p_v_2015/thumb/_MG_4982.jpg') }}"></a>
              
              <a href="{{ asset('web/img/campaign_p_v_2015/_MG_5043.jpg') }}">
              <img data-title="Campa&ntilde;a" data-description="Primavera / Verano 2015" src="{{ asset('web/img/campaign_p_v_2015/thumb/_MG_5043.jpg') }}"></a>
           
            </p>
            <p>&nbsp;</p>
        </div>
    </div>


    <div id="concepto" style="color:#F4587A;">
    <h2>Inspiraci&oacute;n Primavera / Verano</h2>
    <h3>
      <p>M&eacute;xico, nos sit&uacute;a en un escenario de alegr&iacute;a, goce y calidez; nos entusiasma e invita a la diversi&oacute;n. <br />
        <br />
Nuestra colecci&oacute;n, retoma elementos propios de esta cultura y propone a trav&eacute;s de sus dise&ntilde;os la reinterpretaci&oacute;n del color, la armon&iacute;a de las formas y el juego de texturas.<br />
<br />
La b&uacute;squeda nos transporta a paisajes donde reina la naturaleza con todos sus matices para dar origen a prendas femeninas, arm&oacute;nicas, sugerentes y simples.<br />
<br />
El horizonte primaveral aporta su matiz, irradiando sensaciones que evoca esta estaci&oacute;n. Sutileza, romanticismo, juventud, frescura y aventura se instalan como motores de esta colecci&oacute;n. <br />
<br />
Trabajamos en una silueta que acent&uacute;e lo m&aacute;s bello de cada mujer. Destacamos cintura, piernas y hombros haciendo hincapi&eacute; en el escote, realz&aacute;ndolo con puntillas, apliques y cintas de colores; respetando la necesidad de comodidad, movimiento y versatilidad.<br />
<br />
La paleta de color nos entrega tonos en&eacute;rgicos y vibrantes: coral, verde, azul, fucsia y los siempre cl&aacute;sicos blanco y negro.<br />
<br />
Los g&eacute;neros son la clave; el d&iacute;a y la noche se hacen presentes. Gasas plisadas y sedas arrugadas para prendas de fiesta que conquistan con cintas, volados y mo&ntilde;os. Bambulas lisas y estampadas, encajes y tramados para vestidos, faldas y blusas multiuso y por supuesto algod&oacute;n para prendas diurnas y simples, rescatando los b&aacute;sicos de todo guardarropas, con detalles que transforman cada pieza en una propuesta atemporal.<br />
<br />
Esta temporada cada prenda es como un lienzo sobre el cual dejamos volar nuestra imaginaci&oacute;n y le aplicamos los detalles que nos encantan para conmover desde el color y alegrar a&uacute;n m&aacute;s a la mujer que nos elija.</p>
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