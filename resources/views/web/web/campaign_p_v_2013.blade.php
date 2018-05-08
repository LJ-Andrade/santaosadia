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


  <div id="spacer" class="spacergral"> </div>
  
  
<div id="cuerpo">

<h2 style="font-family:'Quicksand', sans-serif; font-size:50px; color:#F4587A;">primavera, verano 2013</h2>

<div class="content">

        <!-- Adding gallery images. We use resized thumbnails here for better performance, but it’s not necessary -->

        <div id="galleria">
            <a href="{{ asset('web/img/campaign/1_ch.jpg') }}">
            <img data-title="Campa&ntilde;a" data-description="Primavera / Verano 2013" src="{{ asset('web/img/campaign/thumb/1_thumb.jpg') }}"></a>
            
                <a href="{{ asset('web/img/campaign/2_ch.jpg') }}">
            <img data-title="Campa&ntilde;a" data-description="Primavera / Verano 2013" src="{{ asset('web/img/campaign/thumb/2_thumb.jpg') }}"></a>
            
                <a href="{{ asset('web/img/campaign/3_ch.jpg') }}">
            <img data-title="Campa&ntilde;a" data-description="Primavera / Verano 2013" src="{{ asset('web/img/campaign/thumb/3_thumb.jpg') }}"></a>
            
                <a href="{{ asset('web/img/campaign/4_ch.jpg') }}">
            <img data-title="Campa&ntilde;a" data-description="Primavera / Verano 2013" src="{{ asset('web/img/campaign/thumb/4_thumb.jpg') }}"></a>
            
                <a href="{{ asset('web/img/campaign/5_ch.jpg') }}">
            <img data-title="Campa&ntilde;a" data-description="Primavera / Verano 2013" src="{{ asset('web/img/campaign/thumb/5_thumb.jpg') }}"></a>
            
                <a href="{{ asset('web/img/campaign/6_ch.jpg') }}">
            <img data-title="Campa&ntilde;a" data-description="Primavera / Verano 2013" src="{{ asset('web/img/campaign/thumb/6_thumb.jpg') }}"></a>
            
                <a href="{{ asset('web/img/campaign/7_ch.jpg') }}">
            <img data-title="Campa&ntilde;a" data-description="Primavera / Verano 2013" src="{{ asset('web/img/campaign/thumb/7_thumb.jpg') }}"></a>
            
                <a href="{{ asset('web/img/campaign/8_ch.jpg') }}">
            <img data-title="Campa&ntilde;a" data-description="Primavera / Verano 2013" src="{{ asset('web/img/campaign/thumb/8_thumb.jpg') }}"></a>
            
                <a href="{{ asset('web/img/campaign/9_ch.jpg') }}">
            <img data-title="Campa&ntilde;a" data-description="Primavera / Verano 2013" src="{{ asset('web/img/campaign/thumb/9_thumb.jpg') }}"></a>
        
           
        </div>
    </div>



    <div id="concepto">
    
    	<h3><p>Inspiraci&oacute;n Primavera/verano 2013: <br/>La colecci&oacute;n remite a sensaciones frescas, dulces, j&oacute;venes y florales.
El movimiento y las transparencias se adue&ntilde;an de las siluetas que combinan colores pasteles, toques fl&uacute;o y los g&eacute;neros delicados que caracterizan a la marca como las sedas, las fibranas y los broderies.

La estrella de la colecci&oacute;n? Las gasas; en todas sus formas muestran lo et&eacute;reo y lo sensible de cada prenda siendo un g&eacute;nero por dem&aacute;s delicado y que nos invita a realzar nuestra feminidad.

Acompa&ntilde;an los vestidos largos en un hippie chic renovado y los soleros super urbanos en motivos florales y en un color cl&aacute;sico que jam&aacute;s pasa de moda, el blanco. Toques de denim terminan de construir la paleta por dem&aacute;s vers&aacute;til y ultra combinable.</p></h3>
    
    
    <h2>FICHA T&Eacute;CNICA:</h2>
    
        	<h3><p>PH: Flor Videgain <br/>
Modelo: Carol Poncelas<br/>
Estilismo: Eliana Turner-Flor Quin<br/>
Pelo y maquillaje: Leticia Figun</p></h3>
    
    
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