<?php
if (isset($_GET['producto']) && isset($_GET['precio'])) {
    $producto = $_GET['producto'];
    $precioSinIVA = floatval($_GET['precio']);
    
    $iva = $precioSinIVA * 0.16;
    
    $precioConIVA = $precioSinIVA + $iva;
    
    echo "Producto: " . htmlspecialchars($producto) . "<br>";
    echo "Precio sin IVA: $" . number_format($precioSinIVA, 2) . "<br>";
    echo "Monto del IVA (16%): $" . number_format($iva, 2) . "<br>";
    echo "Precio total con IVA incluido: $" . number_format($precioConIVA, 2) . "<br>";
} 