<?php
    // Clase 02 - 12/01/2026

    // operadores en PHP

    // operadores aritmeticos

    $num1 = 25;
    $num2 = 10;
    $num3 = 30;

    $suma = $num1 + $num2; // suma
    $resta = $num1 - $num2; // resta
    $multiplicacion = $num1 * $num2; // multiplicacion
    $division = $num1 / $num2; // division
    $modulo = $num1 % $num2; // $modulo: residuo de la division
    $exponente = $num1 ** 2; // exponente: Potenciado

    echo "<p>Suma: $suma <br> Resta: $resta <br> multiplicacion: $multiplicacion <br> division: $division <br> modulo: $modulo <br> exponente: $exponente <br></p>";
    // operadores de asignacion

    $a = 5; // Asignación simple
    echo "<p> Valor inicial de a: $a </p> <br>";
    $a += 3; // Suma y asigna 
    echo "<p> Valor de a después de +=3: $a </p> <br>";
    $a -= 2; // Resta y asigna
    echo "<p> Valor de a después de -=2: $a </p> <br>";
    $a *= 4; // Multiplica y asigna
    echo "<p> Valor de a después de *=4: $a </p> <br>";
    $a /= 2; // Divide y asigna
    echo "<p> Valor de a después de /=2: $a </p> <br>";
    $a %= 5; // Módulo y asigna
    echo "<p> Valor de a después de %=5: $a </p> <br>";
    $a **= 3; // Exponente y asigna
    echo "<p> Valor de a después de **=3: $a </p> <br>";

    // operadores de comparacion
    $num4 = 15;
    $mayor = $num1 > $num4; // mayor que
    $menor = $num1 < $num4; // menor que
    $igual = $num1 == $num4; // igual a: comparacion simple: que solo compara los valores -> 2 === "2" (true)
    $igualdad_estricta = $num1 === $num4; // Igualdad estricicta: compara valor y tipo de dato -> " === "2" (False)
    $diferente = $num1 != $num4; // diferente de
    $mayor_igual = $num1 >= $num4; // mayor o igual que
    $menor_igual = $num1 <= $num4; // menor o igual que 
    echo "<p> comparaciones: <br> mayor que: $mayor <br> menor que: $menor <br> igual a: $igual <br> igualdad estricta: $igualdad_estricta <br> diferente de: $diferente <br> mayor o igual que: $mayor_igual <br> menor o igual que: $menor_igual <br></p>";

    // operadores logicos
    $x = true;
    $y = false; 

    $and = $x && $y; // AND logico: Ambas condiciones deber ser verdaderas 
    $or = $x || $y; // OR logico; al menos una condicion debe ser verdadera
    $not = !$x; // NOT logico: invierte el valor booleano
    echo "<p> operadores logicos: <br> AND logico: $and <br> OR logico $or <br> NOT logico $not <br></p>";

    

