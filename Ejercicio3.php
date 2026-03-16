<?php

$cal1 = $_POST['cal1'];
$cal2 = $_POST['cal2'];
$cal3 = $_POST['cal3'];

$por1 = $_POST['por1'];
$por2 = $_POST['por2'];
$por3 = $_POST['por3'];

// verificar que los porcentajes sumen 100
$suma_porcentajes = $por1 + $por2 + $por3;

if ($suma_porcentajes != 100) {
    echo "Error: Los porcentajes deben sumar 100%";
    exit();
}

// aportaciones ponderadas
$aport1 = ($cal1 * $por1) / 100;
$aport2 = ($cal2 * $por2) / 100;
$aport3 = ($cal3 * $por3) / 100;

// promedio final
$promedio = $aport1 + $aport2 + $aport3;

// mostrar aportaciones
echo "<h2>Resultados</h2>";
echo "Aportación Parcial 1: $aport1 <br>";
echo "Aportación Parcial 2: $aport2 <br>";
echo "Aportación Examen Final: $aport3 <br><br>";

echo "Promedio Final: $promedio <br><br>";

// aprobado o reprobado
if ($promedio >= 60) {
    echo "Resultado: Aprobado <br><br>";
} else {
    echo "Resultado: Reprobado <br><br>";
}

// calificación más alta y más baja
$calificaciones = [$cal1, $cal2, $cal3];

$mayor = max($calificaciones);
$menor = min($calificaciones);

echo "Calificación más alta: $mayor <br>";
echo "Calificación más baja: $menor <br>";

?>