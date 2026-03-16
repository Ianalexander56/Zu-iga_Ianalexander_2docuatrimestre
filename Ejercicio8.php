<?php

$base = $_POST['base'];
$max = $_POST['max'];

$suma = 0;

echo "<h2>Tabla de Potencias</h2>";

for ($i = 1; $i <= $max; $i++) {

    $resultado = pow($base, $i);

    // sumar resultados
    $suma += $resultado;

    // verificar par o impar
    if ($resultado % 2 == 0) {
        $tipo = "Par";
    } else {
        $tipo = "Impar";
    }

    echo $base . "^" . $i . " = " . $resultado . " (" . $tipo . ")<br>";
}

echo "<br>Suma de todas las potencias: " . $suma;

?>