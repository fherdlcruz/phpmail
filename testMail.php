<?php 

//Obtengo los datos 
$nombre='Fernando'; 
$mail='fherdlcruz@gmail.com'; 

    $cabecera = 'From: '.$nombre ."\r\n". 
                'Reply-to: '.$mail ."\r\n". 
                'Mime-Version:1.0'."\r\n". 
                '"Content-Type: text/plain'."\r\n".                 
                'X-Mailer: PHP/'.phpversion(); 

    $para =	   "fherdlcruz@hotmail.com" ; // Mi casilla de correo 

    $asunto =  "Bienvenida modo prueba"; 
     
    $mensaje = "Mensaje de:".$nombre."\r\n". 
               "Direccion de correo:".$mail."\r\n".
               "Mensaje: Bienvenido a la plataforma"; 
     
     
    //enviar Mail    
    //mail('a','asunto','mensaje') 

    $enviado = mail($para,$asunto,utf8_decode($mensaje),$cabecera); 
    if($enviado){    	
    	echo "Su mensaje ha sido enviado exitosamente"; 
    }else{
    	echo "Su mensaje No ha sido enviado exitosamente"; 
    }
?> 	