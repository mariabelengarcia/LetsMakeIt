<?php
//Variables del formulario de contacto

@$nombre = addslashes($_POST['nombre']);
@$email = addslashes($_POST['email']);
@$telefono = addslashes($_POST['telefono']);
@$mensaje = addslashes($_POST['mensaje']);

//Mensaje de contacto 
// En la l�nea 15 debes escribir  tu direcci�n de correo electr�nico (es donde llegan los mensajes). 
// En la l�nea 16 reemplazas www.alconadadiseno.com.ar por tu p�gina web.
$cabeceras = "From: Consulta\n"
 . "Reply-To: $email\n";
$asunto = "Mensaje desde la pagina Web";
$email_to = "cafune.dcv@gmail.com";
$contenido = "$nombre ha enviado un mensaje desde la web http://cafunedcv.com"
. "\n"
. "Nombre: $nombre\n"
. "Email: $email\n"
. "Telefono: $telefono\n"
. "Mensaje: $mensaje\n"
. "\n";
//Enviamos y resultados del mensaje
if (@mail($email_to, $asunto ,$contenido ,$cabeceras )) {
	//Si el mail fue enviado correctamente, se redirecciona a un html y si hay un error a otro html

	header('Location: index.html');
}else{
	header('Location: contacto-error.html');
}
?>