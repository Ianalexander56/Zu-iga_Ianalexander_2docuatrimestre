<?php

$lista = $_GET["numeros"];

$numeros = explode(",", $lista);

$positivos = [];
$negativos = [];
$ceros = [];
$pares = [];
$impares = [];

foreach($numeros as $n){

$n = trim($n);

if($n > 0){
$positivos[] = $n;
}

if($n < 0){
$negativos[] = $n;
}

if($n == 0){
$ceros[] = $n;
}

if($n % 2 == 0){
$pares[] = $n;
}else{
$impares[] = $n;
}

}

echo "<h3>Positivos</h3>";

if(count($positivos) > 0){
echo implode(", ", $positivos);
}else{
echo "No hay números positivos";
}

echo "<br>Total: ".count($positivos);

echo "<hr>";

echo "<h3>Negativos</h3>";

if(count($negativos) > 0){
echo implode(", ", $negativos);
}else{
echo "No hay números negativos";
}

echo "<br>Total: ".count($negativos);

echo "<hr>";

echo "<h3>Ceros</h3>";

if(count($ceros) > 0){
echo implode(", ", $ceros);
}else{
echo "No hay ceros";
}

echo "<br>Total: ".count($ceros);

echo "<hr>";

echo "<h3>Pares</h3>";

if(count($pares) > 0){
echo implode(", ", $pares);
}else{
echo "No hay números pares";
}

echo "<br>Total: ".count($pares);

echo "<hr>";

echo "<h3>Impares</h3>";

if(count($impares) > 0){
echo implode(", ", $impares);
}else{
echo "No hay números impares";
}

echo "<br>Total: ".count($impares);

?>