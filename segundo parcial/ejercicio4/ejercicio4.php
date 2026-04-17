<?php

$lista = $_GET["nombres"];

$nombres = explode(",", $lista);

echo "<h3>Nombres:</h3>";

foreach($nombres as $n){
    echo trim($n)."<br>";
}

echo "<hr>";

echo "Total de nombres: ".count($nombres)."<br>";

sort($nombres);

echo "<h3>Ordenados:</h3>";

foreach($nombres as $n){
    echo trim($n)."<br>";
}

$sinDuplicados = array_unique($nombres);

if(count($sinDuplicados) < count($nombres)){
    echo "<br>Hay nombres duplicados";
}else{
    echo "<br>No hay nombres duplicados";
}

?>