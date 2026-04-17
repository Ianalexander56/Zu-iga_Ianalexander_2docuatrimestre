<?php

$numero = $_GET["numero"];

if($numero % 2 == 0){
    $paridad = "Par";
}else{
    $paridad = "Impar";
}

if($numero > 0){
    $signo = "Positivo";
}elseif($numero < 0){
    $signo = "Negativo";
}else{
    $signo = "Es cero";
}

echo "El número es: ".$numero."<br>";
echo "Paridad: ".$paridad."<br>";
echo "Signo: ".$signo;

?>