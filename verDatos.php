<?php

require_once('cancion.php');

$opcion = $_GET['genero'];
$single = $_GET['single'];

$cancion = new Cancion();
$respuesta = $cancion->getCancion($opcion,$single);

echo "<h1>Su canción es $respuesta</h1>";
