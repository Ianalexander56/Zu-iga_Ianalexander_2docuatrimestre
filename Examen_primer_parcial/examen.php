<?php
//1- Haz un programa que declare una frase y muestre las palabras mas larga
$frase = "<p> Me desperte tarde </p>";
$palabras = explode(" ", $frase);
$palabra_mas_larga = " ";

foreach ($palabras as $palabra) {
    if (strlen($palabra) > strlen($palabra_mas_larga)) {
        $palabra_mas_larga = $palabra;
}
}
echo "<p> La palabra más larga es: </p>" . $palabra_mas_larga;

//2- Haz un programa que declare una frase y cuente las vocales
$frase = "<p> Hola mundo </p> ";
$vocales = "aeiouAEIOU";
$contador = 0;
foreach (str_split($frase) as $caracter) {
    if (strpos($vocales, $caracter) !== false) {
        $contador++;
    } 
}
echo "<p>La cantidad de vocales es: " . $contador . "</p>";

//3- Haz un programa que declare un arreglo y cuente pares e impares 
$arreglo = [12,34,43,5,67,7];
$pares = 0;
$impares = 0;
foreach ($arreglo as $numero) {
    if ($numero % 2 == 0) {
        $pares++;
    } else {
        $impares++;
    }
}
echo "<p>Pares: " . $pares . ", Impares: " . $impares . "</p>";

//4- Haz un programa que declare una funcion que valide si una palabra es palindromo


//5- Haz un programa que declare un arreglo asociativo de productos con precios y caclcule el total
$productos = [
    "sandia" => 12,
    "detergente" => 5,
    "leche" => 23
];
$total = 0;
foreach ($productos as $producto => $precio) {
    $total += $precio;
}
echo "<p>Total: $" . $total . "</p>";

//6- Haz un programa que ordene un arreglo de numeros sin funciones predefinidas 
$numeros = array(8, 3, 1, 7, 0, 10, 2);
$n = count($numeros);

for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n - $i - 1; $j++) {
        if ($numeros[$j] > $numeros[$j + 1]) {
            $temp = $numeros[$j];
            $numeros[$j] = $numeros[$j + 1];
            $numeros[$j + 1] = $temp;
        }
    }
}

echo "Arreglo ordenado:<br>";
for ($i = 0; $i < $n; $i++) {
    echo $numeros[$i] . " ";
}
//7- haz un programa que declare un arreglo de calificaciones y calcule el promedio
$calificaciones = [85,97,100,100,65,98];
$suma = 0;
foreach ($calificaciones as $calificacion) {
    $suma += $calificacion;
}
$promedio = $suma / count($calificaciones);
echo "<p>Promedio: " . $promedio . "</p>";