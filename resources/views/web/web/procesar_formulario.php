<?php
	/*----------- INICIO DE CONFIGURACION-----------------*/
	//mail del destinatario (escribirlo entre las comillas)
	$destino='info@santaosadia.com.ar';
	//nombre del que envía el correo (escribirlo entre las comillas)
	$origen_nombre='Santaosadía';
	//mail del que envía el correo (escribirlo entre las comillas)
	$origen_mail='info@santaosadia.com.ar';
	//título del corrreo (escribirlo entre las comillas)
	$subject='Consulta desde Santaosadía.com.ar';
	//página a la que se va luego de enviar el mail (escribirlo entre las comillas)
	$adondevoy='gracias.html';
	/*----------- FIN DE LA CONFIGURACION-----------------*/
	$headers = "From: $origen_nombre <$origen_mail>\r\n";
	$headers .= "Reply-To: $origen_mail\r\n"; 
	$headers .= "Return-Path: $origen_nombre <$origen_mail>\r\n";  
	$mensaje='';
		foreach($_POST as $k => $v){
			if($k!='Submit' && $k!='Enviar'){
				$mensaje.=ucfirst($k).": $v\n";
			}
		}
	ini_set(sendmail_from,$origen_mail);
	mail($destino,$subject,$mensaje,$headers);
	header("Location:$adondevoy");
?>