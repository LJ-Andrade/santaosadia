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


<div id="cuerpo">
    <h2 style="font-family:'Quicksand', sans-serif; font-size:50px; color:#F4587A;">primavera, verano 2017 </h2>
    <div class="content">
        <div id="galleria">
            <p>
            <a href="{{ asset('web/img/campaing_p_v_2017/ca1.jpg') }}">
            <img data-title="Campa&ntilde;a" data-description="Primavera / Verano 2015" src="{{ asset('web/img/campaing_p_v_2017/ca1.jpg') }}"></a>

            <a href="{{ asset('web/img/campaing_p_v_2017/ca2.jpg') }}">
            <img data-title="Campa&ntilde;a" data-description="Primavera / Verano 2015" src="{{ asset('web/img/campaing_p_v_2017/ca2.jpg') }}"></a>

            <a href="{{ asset('web/img/campaing_p_v_2017/ca3.jpg') }}">
            <img data-title="Campa&ntilde;a" data-description="Primavera / Verano 2015" src="{{ asset('web/img/campaing_p_v_2017/ca3.jpg') }}"></a>

            <a href="{{ asset('web/img/campaing_p_v_2017/ca4.jpg') }}">
            <img data-title="Campa&ntilde;a" data-description="Primavera / Verano 2015" src="{{ asset('web/img/campaing_p_v_2017/ca4.jpg') }}"></a>

            <a href="{{ asset('web/img/campaing_p_v_2017/ca5.jpg') }}">
            <img data-title="Campa&ntilde;a" data-description="Primavera / Verano 2015" src="{{ asset('web/img/campaing_p_v_2017/ca5.jpg') }}"></a>

            <a href="{{ asset('web/img/campaing_p_v_2017/ca6.jpg') }}">
            <img data-title="Campa&ntilde;a" data-description="Primavera / Verano 2015" src="{{ asset('web/img/campaing_p_v_2017/ca6.jpg') }}"></a>

            <a href="{{ asset('web/img/campaing_p_v_2017/ca8.jpg') }}">
            <img data-title="Campa&ntilde;a" data-description="Primavera / Verano 2015" src="{{ asset('web/img/campaing_p_v_2017/ca8.jpg') }}"></a>

            <a href="{{ asset('web/img/campaing_p_v_2017/ca9.jpg') }}">
            <img data-title="Campa&ntilde;a" data-description="Primavera / Verano 2015" src="{{ asset('web/img/campaing_p_v_2017/ca9.jpg') }}"></a>

            <a href="{{ asset('web/img/campaing_p_v_2017/ca10.jpg') }}">
            <img data-title="Campa&ntilde;a" data-description="Primavera / Verano 2015" src="{{ asset('web/img/campaing_p_v_2017/ca10.jpg') }}"></a>

            <a href="{{ asset('web/img/campaing_p_v_2017/ca11.jpg') }}">
            <img data-title="Campa&ntilde;a" data-description="Primavera / Verano 2015" src="{{ asset('web/img/campaing_p_v_2017/ca11.jpg') }}"></a>

            <a href="{{ asset('web/img/campaing_p_v_2017/ca12.jpg') }}">
            <img data-title="Campa&ntilde;a" data-description="Primavera / Verano 2015" src="{{ asset('web/img/campaing_p_v_2017/ca12.jpg') }}"></a>

            </p>
            <p>&nbsp;</p>
        </div>
    </div>


    <div id="concepto" style="color:#F4587A;">
    <h2>Inspiraci&oacute;n <br>
       Primavera Verano 2017: "Brasil"</h2>
    <h3>
      <p>
      El verano nos hace a viajar, nos regala la maravilla de andar libres de esp&iacute;ritu y alma. Nos traslada a para&iacute;sos,
      sabores, sensaciones y colores: callecitas pintorescas, platos deliciosos, suelas gastadas de recorrer y noches de luna llena sobre
      el mar...<br><br>
      Plasmar ese sinf&iacute;n de emociones es el desaf&iacute;o de esta temporada PRIMAVERA VERANO 2017, a la que definimos Brasil.<br><br>
      Nos nutrimos de su cultura, su alegr&iacute;a, sus gentes y sus colores y vali&eacute;ndonos de mucha osad&iacute;a y pasi&oacute;n, combinamos
      comodidad para disfrutar y una pizca de misterio y encanto femenino para recrear looks dignos de tierras tropicales.<br><br>
      El carnaval y sus danzas nos invitan a la imaginaci&oacute;n: as&iacute; las plumas y el blanco t&iacute;pico de los trajes bahianos son elementos
      fundamentales de la colecci&oacute;n, a lo que se suman cortes simples y definidos, espaldas con detalles y volados dispuestos a moverse
      con la danza, definiendo a esta mujer que roba miradas y seduce
      </p>
    </h3>

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