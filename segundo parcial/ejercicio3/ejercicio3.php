<?php

$articulo = $_GET["articulo"];
$precio = $_GET["precio"];
$descuento = $_GET["descuento"];

$monto_descuento = $precio * ($descuento/100);
$precio_final = $precio - $monto_descuento;

if($descuento < 10){
    $tipo = "Bajo";
}elseif($descuento <= 30){
    $tipo = "Moderado";
}else{
    $tipo = "Alto";
}

echo "Artículo: ".$articulo."<br>";
echo "Descuento aplicado: $".$monto_descuento."<br>";
echo "Precio final: $".$precio_final."<br>";
echo "Tipo de descuento: ".$tipo;

?>