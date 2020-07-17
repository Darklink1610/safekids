<?php

$ubicacion = json_decode(file_get_contents("php://input"));
$timestamp = $ubicacion->timestamp;
$Latitud = $ubicacion->coordenadas->latitud;
$Longitud = $ubicacion->coordenadas->longitud;


?>
