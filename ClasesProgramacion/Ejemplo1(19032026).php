<?php
// Ejercicio 1
if($_SERVER['REQUEST_METHOD'] === 'GET') {
    if(isset($_GET["Nombre"]) && !empty($_GET["Nombre"]) && (isset($_GET["Edad"]) && is_numeric($_GET["Edad"]))) {
        //Almaceno los datos enviados por el formulario en variables
        $nombre = $_GET["Nombre"];
        $edad = $_GET["Edad"];

        // Validamos que la edad este entre 18 y 99 años
        if($edad >= 18 && $edad <= 99) {
            //Sanitizamos el nombre para evitar inyecciones de codigo
            $Nombre_sanitizado = htmlspecialchars($nombre, ENT_QUOTES, 'UTF-8'); // Esto convierte los caracteres especiales como el espacio, esteriscos, etc en entidades HTML, ENT_QUOTES convierte las comillas dobles

            echo "<p>Nombre: ¡Hola!!, $Nombre_sanitizado Tienes $edad años</p>";
            echo "<p>Edad: " . $edad . "</p>";
        } else {
            echo "<p>La edad debe estar entre 18 y 99 años.</p>";
        }
    } else {
        echo "<p>Por favor, complete todos los campos correctamente.</p>";
    }
} else {
    echo "<p>Método de solicitud no válido.</p>";
}
