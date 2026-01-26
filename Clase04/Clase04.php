<?php
 // Clase 4 - 22/01/2026

 // Manejo de cadenas
    $cadena1 = "Esto es una cadena de texto.";
    $cadena2 = 'Otra cadena de texto.';

    // Concatenación de cadenas
    $cadena_concatenada = $cadena1 . " " . $cadena2;
    echo ("<p> Cadena concatenada: $cadena_concatenada </p> <br>");

    // Longitud de una cadena
    $Longitud_cadena1 = strlen($cadena1); // strlen() devuelve la longitud de una cadena, es decir, el número de caracteres que contiene, incluye los espacios y los caracteres especiales
    $Longitud_cadena2 = strlen($cadena2);
    echo ("<p> Longitud de cadena1: $Longitud_cadena1 </p> Longitud de la cadena 2: $Longitud_cadena2. </p> <br>");

    // convertir una cadena a mayusculas
    $cadena1_mayusculas = strtoupper($cadena1); // strtoupper() convierte todos los caracteres de una cadena a mayúsculas
    echo ("<p> cadena 1 en mayusculas: $cadena1_mayusculas </p> <br>");
    // convertir una cadena en minusculas
    $cadena2_minusculas = strtolower($cadena2); // strtolower() convierte todos los caracteres de una cadena a minúsculas
    echo ("<p> cadena 2 en minusculas: $cadena2_minusculas </p> <br>");

    // convertir una cadena en arreglo de palabras
    $nombres = "ian, claudia, regina, sergio, jesus, enrique";
    $arreglo_nombres = explode(", ", $nombres); // explode () la funcion explode divide una cadena en un array utilizando un delimitador especificado, en este ejemplo se utiliza ", " como delimitador para separar los nombres. nota que el espacio de la coma es importante
    echo ("<p> Arreglo de nombres: </p> <br>");
    foreach ($arreglo_nombres as $nombres){
        echo ("<li> $nombres </li>");
    }

    $frutas = "manzana, pera, Uva, Naranja, Sandia, Melon";
    echo ("<p> Cadena de frutas: $frutas </p>");
    $arreglo_frutas = explode (", ", $frutas); // En este caso, se utiliza un espacio como delimitador para separar las frutas.
    echo ("<p> Arreglo de frutas: </p>");
    print_r($arreglo_frutas); // print_r es una funcion que imprime informacion legible para humanos sobre una variable, en este caso, imprime el contenido del arreglo de $frutas
    foreach ($arreglo_frutas as $fruta){
        echo ("<li> $fruta </li>");
    }
    // convertir un arreglo en una Cadena
    $arreglo_colores = array("azul", "rojo", "negro", "cafe", "verde", "amarillo", "rosado");
    echo ("<p> Arreglo de colores: </p>");
    print_r($arreglo_colores);
    $cadena_colores = implode(", ", $arreglo_colores); // implode() une los elementos de un array en una cadena utilizando un delimitador especificado, en este caso se utiliza ", " como delimitador para separar los colores en la cadena resultante
    echo ("<p> Cadena de colores: $cadena_colores </p>");

    //otras funciones para manejo de cadenas en PHP
    //Encontrar la posicion de una sebcadena dentro de una Cadena
    $frase = "El aprendizaje de PHP es divertido y poderoso.";
    $subcadena = "PHP"´
    $posicion_subcadena = strpos($frase, $subcadena); // strpos() devuelve la posición de la primera aparición de una subcadena dentro de una cadena. Si la subcadena no se encuentra, devuelve false
    echo ("<p> la subcadena '$subcadena' se encuentra en la posición: $posicion_subcadena </p>");

    // Reemplazar una subcadena dentro de otra cadena
    $frase_modificada = str_replace("PHP", "Python", $frase); // str_replace() reemplaza todas las apariciones de una subcadena por otra dentro de una cadena
    echo ("<p> frase original  '$frase' </p>");
    echo ("<p> frase modificada  '$frase_modificada' </p>");

    //Manejo de errores en PHP
    //Tipos de errores

    

    