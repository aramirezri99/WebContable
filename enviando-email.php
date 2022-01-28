<?php

require_once 'Correo.php';

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];
$asunto = 'Hola me comunico desde Mguillen&Asociados';
$receptor = "miguelangelguillenrivas@gmail.com";

$body = "Nombre: ". $nombre . "\r\nCorreo: ".$correo . "\r\nTelefono: " .$telefono . "\r\nMensaje: " . $mensaje;

$var_correo = new Correo();
$var_correo->enviarCorreo($receptor,$asunto,$body);

