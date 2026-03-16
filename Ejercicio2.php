<?php

$texto = $_POST['texto'];

// quitar espacios extras
$texto_limpio = trim($texto);

// separar palabras
$palabras = str_word_count($texto_limpio, 1);

// contar palabras
$total_palabras = count($palabras);

// contar oraciones (contando puntos)
$total_oraciones = substr_count($texto_limpio, ".");

// encontrar palabra más larga
$palabra_larga = "";
foreach ($palabras as $palabra) {
    if (strlen($palabra) > strlen($palabra_larga)) {
        $palabra_larga = $palabra;
    }
}

// contar caracteres totales de palabras
$total_caracteres = 0;
foreach ($palabras as $palabra) {
    $total_caracteres += strlen($palabra);
}

// promedio de caracteres por palabra
$promedio = 0;
if ($total_palabras > 0) {
    $promedio = round($total_caracteres / $total_palabras, 2);
}

// mostrar resultados
echo "<h2>Resultados</h2>";
echo "Número total de palabras: " . $total_palabras . "<br><br>";
echo "Número de oraciones: " . $total_oraciones . "<br><br>";
echo "Palabra más larga: " . $palabra_larga . "<br><br>";
echo "Promedio de caracteres por palabra: " . $promedio;

?>