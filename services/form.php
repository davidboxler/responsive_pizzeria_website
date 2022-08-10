<?php

$nombre = $_POST['name'];
$localidad = $_POST['local'];
$email = $_POST['email'];
$telefono = $_POST['phone'];

// Cuerpo del email para la compañia
$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su email es " . $email . ",\r\n";
$mensaje .= "Su Localidad es " . $localidad . ",\r\n";
$mensaje .= "Mensaje " . $_POST['mensaje'] . ",\r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'correroPruebas@gmail.com';
$asunto = 'Sistema de franquiciado';

mail($para, $asunto, utf8_decode($mensaje), $header)

$header('Location:services/exito.html');

?>