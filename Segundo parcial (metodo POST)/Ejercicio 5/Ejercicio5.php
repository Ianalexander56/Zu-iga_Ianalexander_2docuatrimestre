<?php

$n = $_POST['n'];

echo "<h2>Pirámide</h2>";

for ($i = 1; $i <= $n; $i++) {

    // espacios para centrar
    $espacios = $n - $i;

    // número de asteriscos
    $asteriscos = (2 * $i) - 1;

    echo str_repeat("&nbsp;", $espacios);
    echo str_repeat("*", $asteriscos);
    echo "<br>";
}

// total de asteriscos
$total = $n * $n;

echo "<br>Total de asteriscos en la pirámide: " . $total;

?>