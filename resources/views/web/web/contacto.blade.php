@extends('layouts.web.main')

@section('title', 'Santaosadia')

@section('styles')
    <style>

                /* Demo styles */
                .content{
        font: 12px/1.4 "helvetica neue",arial,sans-serif;
        width: 380px;
        margin-top: 40px;
        margin-left: 10px;
        float: left;
    }
    #concepto {
        width: 210px;
        float: left;
        margin-top: 40px;
        padding: 10px;
        margin-left: 20px;
    }
    #mapa {
        width: 280px;
        float: left;
        margin-top: 40px;
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

    input, textarea {   
        padding: 9px;  
        border: solid 1px #E5E5E5;  
        outline: 0;  
        font: normal 13px/100% Verdana, Tahoma, sans-serif;  
        width: 200px;  
        background: #FFFFFF url('bg_form.png') left top repeat-x;  
        background: -webkit-gradient(linear, left top, left 25, from(#FFFFFF), color-stop(4%, #EEEEEE), to(#FFFFFF));  
        background: -moz-linear-gradient(top, #FFFFFF, #EEEEEE 1px, #FFFFFF 25px);  
        box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px;  
        -moz-box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px;  
        -webkit-box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px;  
        }  
      
    textarea {   
        width: 350px;  
        max-width: 400px;  
        height: 150px;  
        line-height: 150%;  
        }  
      
    input:hover, textarea:hover,  
    input:focus, textarea:focus {   
        border-color: #C9C9C9;   
        -webkit-box-shadow: rgba(0, 0, 0, 0.15) 0px 0px 8px;  
        }  
      
    .form label {   
        margin-left: 10px;   
        color: #999999;   
        }  
      
    .submit input {  
        width: auto;  
        padding: 9px 15px;  
        background: #617798;  
        border: 0;  
        font-size: 14px;  
        color: #FFFFFF;  
        -moz-border-radius: 5px;  
        -webkit-border-radius: 5px;  
        }  
        </style>

@endsection

@section('content')
	  <div id="spacer" class="spacergral"> </div>
<div id="cuerpo">
<h2 id="mensaje-titulo">Campa&iacute;a Primavera - Verano 2013</h2>
<div class="content">

        <!-- Adding gallery images. We use resized thumbnails here for better performance, but it’s not necessary -->

        <div id="contact_form">
               <form action="procesar_formulario.php" method="post" class="form" id="formulario-contacto">  
        <p class="name">  
            <input type="text" name="Nombre" id="nombre" />  
            <label for="nombre">Nombre</label>  
        </p>
        <p class="email">  
            <input type="text" name="email" id="email" />  
            <label for="email">E-mail</label>  
        </p>  
        <p class="text">  
            <textarea name="Comentario"></textarea>  
        </p>  
        <p class="submit">  
            <input type="submit" value="Enviar" />  
        </p>  
    </form>  
        </div>
    </div>
    <div id="mapa">
<iframe width="280" height="280" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.ar/maps?f=q&amp;source=s_q&amp;hl=es&amp;geocode=&amp;q=Tucum%C3%A1n+3021,+Buenos+Aires&amp;aq=0&amp;oq=tucu&amp;sll=-38.442157,-63.622274&amp;sspn=49.726866,92.021484&amp;ie=UTF8&amp;hq=&amp;hnear=Tucum%C3%A1n+3021,+Balvanera,+Buenos+Aires&amp;t=m&amp;ll=-34.600786,-58.408513&amp;spn=0.009891,0.011973&amp;z=15&amp;output=embed"></iframe><br /><small>
    </div>
    <div id="concepto">
    	<h3>Showroom</h3>
<h4>Tucum&aacute;n 3021 4&#186; &#39;5&#39; (Cita previa)</h4>

<h3>Tel&eacute;fonos</h3>
<h4>4962-5134 <br />
15 6761-8867<br />
15 3321-2292</h4>

<h3>E-mail</h3>
<h4>info@santaosadia.com.ar</h4>
 <h4>Ventas por Mayor y Menor</h4>
   <h4>Env&iacute;os al Interior</h4>
 </div>   
</div>
</div>
@endsection