<?php

//llamando a los campos
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$asunto = $_POST['asunto']
$mensaje = $_POST['mensaje']

//datos del corre0o
$destinatario = "natanaelrchavez@gmail.com";
$motivo = "contacto desde nuestra web";

$carta = "De: $nombre \n";
$carta .= "Correo: $correo  \n";
$carta .= "Asunto: $asunto \n";
$carta . = "Mensaje: $mensaje";

//enviando mensaje

mail($destinatario, $asunto, $carta);
header('Location:gracias.html')








?>