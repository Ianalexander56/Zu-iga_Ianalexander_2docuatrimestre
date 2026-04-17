<?php

$nombre = $_POST['nombre'];
$sexo = $_POST['sexo'];
$peso = $_POST['peso'];
$altura = $_POST['altura'];
$edad = $_POST['edad'];
$actividad = $_POST['actividad'];

// calcular TMB
if ($sexo == "hombre") {
    $tmb = 88.36 + (13.4 * $peso) + (4.8 * $altura) - (5.7 * $edad);
} else {
    $tmb = 447.6 + (9.2 * $peso) + (3.1 * $altura) - (4.3 * $edad);
}

// calorías según actividad
$calorias = $tmb * $actividad;

// mostrar resultados
echo "<h2>Resultados</h2>";

echo "Nombre: $nombre <br>";
echo "Peso: $peso kg <br>";
echo "Altura: $altura cm <br>";
echo "Edad: $edad años <br><br>";

echo "TMB (calorías en reposo): " . round($tmb,2) . " calorías/día <br>";

echo "Calorías diarias recomendadas según actividad: " . round($calorias,2) . " calorías/día";

?>