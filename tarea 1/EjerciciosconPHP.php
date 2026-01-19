<?php
//1.- Haz un programa que almacene el total de ventas de un día en una variable y muestre un mensaje indicando si fue un buen día de ventas cuando el monto sea mayor o igual a $5,000, o ventas bajas en caso contrario.

$ventasDia = 10000; // Total de ventas del día
if ($ventasDia >= 5000) {
    echo "<p>¡Fue un buen día de ventas! Total de ventas: $$ventasDia</p>";
} else 
    echo "<p>Ventas bajas. Total de ventas: $$ventasDia</p>";

//2.- Haz un programa que guarde los gastos diarios de una semana en un arreglo indexado, calcule el total de gastos utilizando un ciclo y muestre también el promedio semanal.

$gastos = [321, 250, 126, 300, 120, 100, 205]; // Gastos diarios de la semana
$totalGastos = 0;

for ($i = 0; $i < count($gastos); $i++) {
    $totalGastos += $gastos[$i];
}

$promedioGastos = $totalGastos / count($gastos);
echo "<p>Total de gastos semanales: $$totalGastos <br> Promedio diario de gastos: $$promedioGastos</p>";

//3. - Haz un programa que guarde una lista de al menos cinco clientes en un arreglo indexado y muestre el nombre de cada cliente utilizando un ciclo

$clientes = ["romina", "karen", "jorge", "enrique", "regina"];
for ($i = 0; $i < count($clientes); $i++) {
    echo "<p>Cliente: $clientes[$i]</p>";
}

//4.- Haz un programa que almacene las ventas de diferentes productos en un arreglo asociativo, muestre cada producto con la cantidad vendida y calcule el total de productos vendidos.
$ventasProductos = [
    "manzanas" => 100,
    "naranjas" => 70,
    "platanos" => 10,
    "uvas" => 45,
    "peras" => 6,
];

$totalProductosVendidos = 0;
foreach ($ventasProductos as $producto => $cantidad) {
    echo "<p>Producto: $producto, Cantidad vendida: $cantidad</p>";
    $totalProductosVendidos += $cantidad;
}
echo "<p>Total de productos vendidos: $totalProductosVendidos</p>";

//5.- Haz un programa que guarde los precios de varios productos en un arreglo y calcule el precio total sumando todos los valores.
$precios = [300, 250, 275, 30, 67]; // Precios de varios productos
$totalprecios = 0;
for ($i = 0; $i < count($precios); $i++) {
    $totalprecios += $precios[$i]; 
}
echo "<p>Precio total de los productos: $$totalprecios</p>";

//6.- Haz un programa que almacene los nombres de varios empleados en un arreglo y muestre cuántos empleados hay registrados.
$empleados = ["romina", "karen", "jorge", "enrique", "regina"];
echo "<p>Número de empleados registrados: " . count($empleados) . "</p>";

//7.- Haz un programa que almacene varios números en un arreglo y muestre únicamente los números mayores a 50 utilizando un ciclo y una condición.
$numeros = [40, 80, 67, 81,39, 90];
echo "<p>Números mayores a 50:</p>";
for ($i = 0; $i < count($numeros); $i++) {
    if ($numeros[$i] > 50) {
        echo "<p>$numeros[$i]</p>";
    }
}

//8.- Haz un programa que almacene las ventas de una semana y muestre cuántos días las ventas fueron mayores a $3,000
$ventasemana = [3500, 2450, 5000, 1450, 6666, 7777, 2900];
$diasVentasAltas = 0;
for ($i = 0; $i < count($ventasemana); $i++) {
    if ($ventasemana[$i] > 3000) {
        $diasVentasAltas++;
    }
}
echo "<p>Número de días con ventas mayores a $3,000: $diasVentasAltas</p>";

//9.- Haz un programa que almacene el total de ventas de varios vendedores y determine cuál obtuvo la mayor venta.
$ventasVendedores = [1000, 2500, 10000, 1800, 4500];
$mayorVenta = $ventasVendedores[0];
$vendedorMayorVenta = 1;

for ($i = 1; $i < count($ventasVendedores); $i++) {
    if ($ventasVendedores[$i] > $mayorVenta) {
        $mayorVenta = $ventasVendedores[$i];
        $vendedorMayorVenta = $i + 1;
    }
}
echo "<p>Vendedor con mayor venta: Vendedor $vendedorMayorVenta, Monto: $$mayorVenta</p>";

?>
