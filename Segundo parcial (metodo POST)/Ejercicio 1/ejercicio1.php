<?php

$frase = $_POST['frase'];

// mostrar frase original
echo "Frase original: " . $frase . "<br><br>";

// frase invertida
$invertida = strrev($frase);
echo "Frase invertida: " . $invertida . "<br><br>";

// ignorar espacios y mayúsculas
$normal = strtolower(str_replace(" ", "", $frase));
$invertidaNormal = strrev($normal);

// verificar si es palíndromo
if ($normal == $invertidaNormal) {
    echo "Resultado: Es un palíndromo";
} else {
    echo "Resultado: No es un palíndromo";
}

?>