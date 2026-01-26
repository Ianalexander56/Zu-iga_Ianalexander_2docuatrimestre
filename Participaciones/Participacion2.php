<?php
//Ejercicio 1: Haz un programa un programa que reciba una cadena (Ya definida en el codigo), y devuelva la misma cadena pero con las palabras en orden inverso. maneja los posibles errores 
    // Definicion de la Cadena
    $cadena = "El aprendizaje de PHP esta chingon";

    //manejo de errores 
    if (empty($cadena)) {
        echo "<p>Error: la cadena esta vacia </p>";
    } else {
        //Dividir la cadena en un arreglo de palabras
        $palabras = explode(" ", $cadena);

        //invertir el orden de la palabras en el Arreglo
        $palabras_invertidas = array_reverse($palabras);

        //unir las palabras invertidas en una cadena nueva cadena 
        $cadena_invetida = implode(" ", $palabras_invertidas);

        //mostrar la cadena con las palbras en un orden inverso
        echo "<p> Cadena original: $cadena </p>";
        echo "<p> Cadena con las palabras en un orden inverso: $cadena_invetida </p>";

    }
    
//Ejercicio 2: Haz un programa que reciba una cadena de texto que contenga una lista de numeros separados por comas (ya definida en el codigo), y devuelva la suma de esos numeros. Maneja los posibles errores
    //Definicion de la cadena de numeros
    $cadena_numeros = "50, 67, 765, 404, 777";

    //Manejo de errores
    if (empty($cadena_numeros)) {
        echo "<p>Error: la cadena de numeros esta vacia </p>";
    } else {
        //Dividir la cadena en un arreglo de numeros
        $numeros_string = explode(", ", $cadena_numeros);

        //Convertir los elementos del arreglo de cadenas a numeros enteros
        $numeros = array_map('intval', $numeros_string);

        //Calcular la suma de los numeros en el arreglo
        $suma_numeros = array_sum($numeros);

        //Mostrar la suma de los numeros
        echo "<p> Cadena de numeros: $cadena_numeros </p>";
        echo "<p> Suma de los numeros: $suma_numeros </p>";
    }