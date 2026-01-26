<?php
#Ejercicio 1: Crear un programa en PHP que calcule el área de un rectángulo (base * altura) y el perimetoro (2 * (base + altura)) utilizando operadores aritméticos y de asignación. Mostrar los resultados en pantalla.

    // Definición de base y altura
    $base = 10;
    $altura = 5;

    // Cálculo del área usando operadores aritméticos
    $area = $base * $altura; // Área = base * altura

    // Cálculo del perímetro utilizando operadores aritméticos y de asignación
    $perimetro = 2 * ($base + $altura); // Perímetro = 2 * (base + altura)

    // Mostrar los resultados en pantalla
    echo "<p> El Área y Perímetro del rectángulo con base $base y altura $altura es: </p>";
    echo "<p> Área: $area </p>";
    echo "<p> Perímetro: $perimetro </p>";
   ?>

<?php
// Ejercicio 2: Crea un programa en PHP que realice las soguientes conversiones de monedas: De peso a dolar, de peso a euro, de euro a libra esterlina, y de peso a euro. Muestra los resultados en pantalla.

    // Definición de tasas de conversión
    $tasa_peso_dolar = 0.05; // 1 peso = 0.05 dólares
    $tasa_peso_euro = 0.045; // 1 peso = 0.045 euros
    $tasa_euro_libra = 0.85; // 1 euro = 0.85 libras esterlinas

    // Cantidad en pesos a convertir
    $cantidad_pesos = 1000;

    // Conversión de peso a dólar
    $cantidad_dolares = $cantidad_pesos * $tasa_peso_dolar;

    // Conversión de peso a euro
    $cantidad_euros = $cantidad_pesos * $tasa_peso_euro;

    // Conversión de euro a libra esterlina
    $cantidad_libras = $cantidad_euros * $tasa_euro_libra;

    // Mostrar los resultados en pantalla
    echo "<p> $cantidad_pesos pesos equivalen a: </p>";
    echo "<p> Dólares: $cantidad_dolares </p>";
    echo "<p> Euros: $cantidad_euros </p>";
    echo "<p> Libras esterlinas: $cantidad_libras </p>";
   ?>

<?php
// Ejercicio 3: Crea un prigrama en PHP que calcule el IMC (Índice de Masa Corporal) de una persona utilizando la fórmula: IMC = peso (kg) / (altura (m) * altura (m))^2.

    // Definición de peso en kilogramos y altura en metros
    $peso = 70; // Peso en kg
    $altura = 1.75; // Altura en m

    // Cálculo del IMC utilizando la fórmula
    $imc = $peso / ($altura ** 2); // IMC = peso / (altura * altura)

    // Mostrar el resultado en pantalla
    echo "<p> El Índice de Masa Corporal (IMC) de una persona con peso $peso kg y altura $altura m es: $imc </p>";
   ?>


<?php
// Ejercicio 4: Crea un programa que convierta una temperatura dada en grados Celsius a Fahrenheit y Kelvin. Muestra los resultados en la pantalla. Las formulas son: Farenheit = (Celsius * 9/5) + 32 y Kelvin = Celsius + 273.15.

    // Definición de la temperatura en grados Celsius
    $celsius = 25; // Temperatura en °C

    // Conversión a Fahrenheit
    $fahrenheit = ($celsius * 9/5) + 32; // F = (C * 9/5) + 32

    // Conversión a Kelvin
    $kelvin = $celsius + 273.15; // K = C + 273.15

    // Mostrar los resultados en pantalla
    echo "<p> Temperatura en Celsius: $celsius °C </p>";
    echo "<p> Temperatura en Fahrenheit: $fahrenheit °F </p>";
    echo "<p> Temperatura en Kelvin: $kelvin K </p>";
   ?>





