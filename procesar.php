<?php
$nombre_apellido = $_POST['nombre'];
$email = $_POST['email'];
$atraccion = $_POST['atraccion'];
/*$archivo = $_POST['archivo']; Nota: German comentaba en el video que este seria el unico input sin funcionalidad en php*/
$condiciones = $_POST['acepto'];

$mensaje = "<h1>".$nombre_apellido."</h1>";
$mensaje = "<h2>".$atraccion."</h2>";
$mensaje .= "<hr />";
$mensaje .= $_POST['mensaje'];

$para = 'visitacopenhague@gmail.com';
$asunto = 'Consulta Visita Copenhague';

$headers = "Mime-version: 1.0;\r\n";
$headers .= "Content-type: text/html; charset=utf-8;\r\n";
$headers .= "From: $email\r\n";
$headers .= "To: $para\r\n";

mail($para, $asunto, $mensaje, $headers);

header("Location: gracias.html");
?>