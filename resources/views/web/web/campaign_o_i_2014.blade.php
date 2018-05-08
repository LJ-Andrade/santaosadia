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


<h2 style="font-family:'Quicksand', sans-serif; font-size:50px; color:#F4587A;">oto&ntilde;o, invierno 2014</h2>

<div class="content">

        <!-- Adding gallery images. We use resized thumbnails here for better performance, but it’s not necessary -->

        <div id="galleria">
            <p><a href="{{ asset('web/img/campaign_o_i_2014/1_ch.jpg') }}">
              <img data-title="Campa&ntilde;a" data-description="Oto&ntilde;o / Invierno 2014" src="{{ asset('web/img/campaign_o_i_2014/thumb/1_thumb.jpg') }}"></a>
              
              <a href="{{ asset('web/img/campaign_o_i_2014/2_ch.jpg') }}">
              <img data-title="Campa&ntilde;a" data-description="Oto&ntilde;o / Invierno 2014" src="{{ asset('web/img/campaign_o_i_2014/thumb/2_thumb.jpg') }}"></a>
              
              <a href="{{ asset('web/img/campaign_o_i_2014/3_ch.jpg') }}">
              <img data-title="Campa&ntilde;a" data-description="Oto&ntilde;o / Invierno 2014" src="{{ asset('web/img/campaign_o_i_2014/thumb/3_thumb.jpg') }}"></a>
              
              <a href="{{ asset('web/img/campaign_o_i_2014/4_ch.jpg') }}">
              <img data-title="Campa&ntilde;a" data-description="Oto&ntilde;o / Invierno 2014" src="{{ asset('web/img/campaign_o_i_2014/thumb/4_thumb.jpg') }}"></a>
              
              <a href="{{ asset('web/img/campaign_o_i_2014/5_ch.jpg') }}">
              <img data-title="Campa&ntilde;a" data-description="Oto&ntilde;o / Invierno 2014" src="{{ asset('web/img/campaign_o_i_2014/thumb/5_thumb.jpg') }}"></a>
           
            </p>
            <p>&nbsp;</p>
        </div>
    </div>


    <script>

    // Load the classic theme
    Galleria.loadTheme('js/galleria.classic.min.js');

    // Initialize Galleria
    Galleria.run('#galleria');

    </script>

    <div id="concepto">
    <h2>Inspiraci&oacute;n invierno</h2>
    <h3><p>

El esp&iacute;ritu libre, la inocencia, la picard&iacute;a y el juego son las claves de nuestra inspiraci&oacute;n para esta colecci&oacute;n. Le decimos no a la l&iacute;neas r&iacute;gidas apostando por una silueta l&aacute;nguida que no por eso deje de insinuar o destacar los detalles. Una colecci&oacute;n que rememora a la infancia y que se expresa en la morfolog&iacute;a de las prendas y en la paleta de colores. Apostamos a prendas divertidas, descontracturadas y c&oacute;modas. La mujer que nos inspira es como una princesa del siglo XXI, busca lo femenino, cuida los detalles, pero tiene que vivir, trabajar, hacer sus actividades. Aparecen as&iacute; detalles como volados y puntillas, que se suman a los tonos y estampados alegres de la colecci&oacute;n, revelando una idea de inocencia; apuntando a lo naif pero sin dejar de lado los detalles m&aacute;s osados que nos caracterizan y que se traducen en sutiles transparencias, lentejuelas, gasas y encajes. Apostamos a un invierno con color donde la consigna es mantener la frescura. Reinventamos la paleta de verano llev&aacute;ndola a tonos m&aacute;s invernales para mantener ese esp&iacute;ritu alegre y fresco que queremos transmitir. Aparecen tonos fr&iacute;os y frutales, una paleta en la que se destacan el beige, rosas, lilas, azules, crudo, blanco y negro. Los textiles son suaves, con ca&iacute;da y movimiento; en primer plano aparecen las gasas, voiles de algod&oacute;n, viscosas, lanas y sedas. Los infaltables de la temporada para la mujer SantaOsadia son: calzas con detalles, vestidos multiuso donde se destacan volados y puntillas, sacos corte princesa en tonos pasteles, blusas y faldas y remeras s&uacute;per c&oacute;modas y con estilo.

</p></h3>
    
    
    <!--<h2>FICHA T&eacute;CNICA:</h2>
    
          <h3><p>PH: Valeria Blanc <br/>
Modelo: Daiana Primo<br/>
Estilismo: Yamila Coller<br/>
Pelo y maquillaje:Claudia Ver&oacute;nica Etchevarne<br/>
Locaci&oacute;n: Hoster&iacute;a del Puerto - Col&oacute;n Entr&eacute; R&iacute;os
</p></h3>-->
    
    
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