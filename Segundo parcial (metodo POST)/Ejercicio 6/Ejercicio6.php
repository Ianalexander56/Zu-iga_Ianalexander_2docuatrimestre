<?php

$mxn = $_POST['mxn'];
$usd = $_POST['usd'];
$eur = $_POST['eur'];

// conversiones
$dolares = $mxn / $usd;
$euros = $mxn / $eur;

// con 100 pesos
$dolares100 = 100 / $usd;
$euros100 = 100 / $eur;

// mostrar resultados
echo "<h2>Resultados</h2>";

echo "Monto original: $mxn MXN <br><br>";

echo "Equivalente en dólares: " . number_format($dolares, 2) . " USD <br>";
echo "Equivalente en euros: " . number_format($euros, 2) . " EUR <br><br>";

echo "Con 100 pesos puedes obtener:<br>";
echo number_format($dolares100, 2) . " USD <br>";
echo number_format($euros100, 2) . " EUR";

?>