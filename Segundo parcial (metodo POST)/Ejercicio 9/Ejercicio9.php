<?php

$nombre = strtolower(str_replace(" ", "", $_POST['nombre']));
$paterno = strtolower(str_replace(" ", "", $_POST['paterno']));
$materno = strtolower(str_replace(" ", "", $_POST['materno']));
$anio = $_POST['anio'];

// últimos 2 dígitos del año
$anio2 = substr($anio, -2);

// sugerencia a
$a = substr($nombre,0,1) . $paterno;

// sugerencia b
$b = $nombre . $anio2;

// sugerencia c
$c = $paterno . $materno . substr($nombre,0,1);

// sugerencia d
$d = substr($nombre,0,1) . substr($paterno,0,1) . substr($materno,0,1) . $anio;

// sugerencia e
$nombre_completo = $nombre . $paterno . $materno;
$caracteres = strlen($nombre_completo);
$e = strrev($paterno) . $caracteres;

// mostrar resultados
echo "<h2>Sugerencias de usuario</h2>";

echo "1. $a <br>";
echo "2. $b <br>";
echo "3. $c <br>";
echo "4. $d <br>";
echo "5. $e <br>";

?>