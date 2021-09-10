<?php

require_once('cancion.php');

$opcion = $_GET['genero'];

$cancion = new Cancion();
$respuesta = $cancion->getCancion($opcion);

echo "<h1>Su canción es $respuesta</h1>";
