<?php

$litros = $_POST['litros'];
$precio = $_POST['precio'];
$km = $_POST['km'];
$presupuesto = $_POST['presupuesto'];

// costo total
$costo_total = $litros * $precio;

// rendimiento km por litro
$rendimiento = $km / $litros;

// costo por km
$costo_km = $costo_total / $km;

// litros adicionales con presupuesto
$litros_extra = $presupuesto / $precio;

// kilómetros adicionales
$km_extra = $litros_extra * $rendimiento;

// resultados
echo "<h2>Resultados</h2>";

echo "Costo total de la carga: $" . number_format($costo_total,2) . "<br><br>";

echo "Rendimiento del vehículo: " . number_format($rendimiento,2) . " km/litro<br>";

echo "Costo por kilómetro recorrido: $" . number_format($costo_km,2) . "<br><br>";

echo "Litros adicionales que puedes comprar: " . number_format($litros_extra,2) . " litros<br>";

echo "Kilómetros adicionales que podrías recorrer: " . number_format($km_extra,2) . " km";

?>