<?php

$nombre = $_POST['name'];
$localidad = $_POST['local'];
$email = $_POST['email'];
$telefono = $_POST['phone'];
$mesage = $_POST['mesage'];
$file = $_POST['file'];

// Cuerpo del email para la compañia
$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su email es " . $email . ",\r\n";
$mensaje .= "Su Localidad es " . $localidad . ",\r\n";
$mensaje .= "Mensaje " . $mesage . ",\r\n";
$mensaje .= "Archivo " . $file . ",\r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'companiapizzas@gmail.com';
$asunto = 'Trabaja con nosotros';

mail($para, $asunto, utf8_decode($mensaje), $header)

$header('Location:services/exito.html');

?>