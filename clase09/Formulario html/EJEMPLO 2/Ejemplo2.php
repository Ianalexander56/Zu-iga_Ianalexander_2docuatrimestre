<?php
//Ejemplo 2: Encuesta de satisfaccion

//Validamos que el formulario haya sido enviado por metodo POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Verificamos que los datos enviados exista
    if (isset($_POST["nombre"]) && isset($_POST["satisfaccion"]) && isset($_POST["comentarios"])) {
        //Recibimos los datos del formulario y los almacenamos en variables
        $nombre = $_POST["nombre"];
        $satisfaccion = $_POST["satisfaccion"];
        $comentarios = $_POST["comentarios"];

        // Mostramos un resumen de la respuesta recibida
        echo "<h2>Resumen de la Encuesta</h2>";
        echo "<p><strong>Nombre:</strong> " . $nombre . "</p>";
        echo "<p><strong>Nivel de Satisfacción:</strong> " . $satisfaccion . "</p>";
        echo "<p><strong>Comentarios:</strong> " . $comentarios . "</p>";

        echo "<h2>Gracias por participar en la encuesta</h2> <br>";
        echo "<a href='Ejemplo2.html'>volver a la encuesta</a>";

    }else{
        //Si no se recibieron los datos, mostramos mensaje de error 
        echo "<p>Error: No se recibieron los datos de la encuesta.</p>";
        echo "<a href='Ejemplo2.html'>volver a la encuesta</a>";
    }
} else{
    //Si el formulario no fue enviado por POST, mostramos mensaje de error
    echo "<p>Error: El formulario debe ser enviado con metodo POST.</p>";
    echo "<a href='Ejemplo2.html'>volver a la encuesta</a>";
}
