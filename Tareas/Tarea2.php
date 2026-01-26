<?php
// 1. Haz un programa que declare una cadena y la muestre en mayúsculas
$cadena = "Que onda Maestro Mario";
$cadenaMayusculas = strtoupper($cadena);
echo"<p>cadena en mayusculas: $cadenaMayusculas</p>";

// 2. Haz un programa que declare un arreglo de edades y muestre la edad mayor.
$edades = [23, 25, 28, 15, 34, 19];
$edadmayor = max($edades);
echo "<p>La edad mayor es: $edadmayor</p>";

// 3. Haz un programa que declare un arreglo de palabras y muestre solo las que tienen más de 5 letras.
$palabras = ["parangaricutirimicuaro", "sol", "fortnite", "ian"];
echo "<p>Palabras con mas de 5 letras</p>";

for ($i = 0; $i < count($palabras); $i++) {
    if (strlen($palabras[$i]) > 5) {
        echo "<p>$palabras[$i]</p>";
    }
}

// 4. Haz un programa que declare una cadena y muestre cuántas veces aparece cada letra.
$cadena = "Que onda anaconda";
$letras = array_count_values(str_split($cadena));
foreach ($letras as $letra => $cantidad) {
    echo "<p>La letra '$letra' aparece $cantidad veces</p>";
}

// 5. Haz un programa que declare un arreglo de números y separe pares e impares en dos arreglos nuevos.
$numeros = [23, 45, 67, 12, 45, 5, 8];
$pares = [];
$impares = [];

for ($i = 0; $i < count($numeros); $i++) {
    if ($numeros[$i] % 2 == 0) {
        $pares[] = $numeros[$i];
    } else {
        $impares[] = $numeros[$i];
    }
    echo "<p>Números pares: " . implode(", ", $pares) . "</p>";
    echo "<p>Números impares: " . implode(", ", $impares) . "</p>";
}

// 6. Haz un programa que declare una cadena y cuente cuántas vocales tiene.
$cadena = "Corre poyoco";
$vocales = preg_match_all('/[aeiouAEIOU]/', $cadena, $matches);
echo "<p>La cadena tiene $vocales vocales </p>";

// 7. Haz un programa que declare un arreglo asociativo con producto y cantidad y muestre los que están bajos (<5).
$productos = [
    "zanahorias" => 23,
    "Sandias" => 16,
    "manzanas" => 76,
    "uvas" => 4,
    "peras" => 3
];

foreach ($productos as $producto => $cantidad) {
    if ($cantidad < 5) {
        echo "<p>Producto: $producto, Cantidad: $cantidad</p>";
    }
}

// 8. Haz un programa que declare una frase y reemplace una palabra por otra.
$frase = "El que madruga es porque tiene chamba";
$FraseModificada = str_replace("chamba", "cosas que hacer", $frase);
echo "<p>$FraseModificada</p>"; 

// 9. Haz un programa que declare un arreglo asociativo de alumnos, donde cada alumno tenga varias calificaciones, y calcule el promedio de cada uno.
$alumnos = [
    "ian" => [85, 90, 78],
    "claudia" => [62, 78, 75],
    "regina" => [90, 95, 89]
];
foreach ($alumnos as $alumno => $calificaciones) {
    $promedio = array_sum($calificaciones) / count($calificaciones);
    echo "<p>Alumno: $alumno, Promedio: $promedio</p>";
}

// 10. Haz un programa que declare un arreglo de nombres y muestre los que empiezan con vocal.
$nombres = ["ian", "alberto", "eugenio", "claudia", "ana"];
echo "<p>Nombres que empiezan con vocal:</p>";
for ($i = 0; $i < count($nombres); $i++) {
    if (preg_match('/^[aeiouAEIOU]/', $nombres[$i])) {
        echo "<p>$nombres[$i]</p>";
    }
}