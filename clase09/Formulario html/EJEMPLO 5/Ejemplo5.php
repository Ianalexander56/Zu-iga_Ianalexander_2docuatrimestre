<?php
// Ejemplo 5 - Gestor de calificacion

//Verificar que los datos fueron enviados mediante POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificamos que los campos enviados existan
    if(isset($_POST["nombre"]) && isset($_POST["materia"]) && isset($_POST["calificacion"])) {

    // Recibimos los datos del fomulario y los asignamos a variables
    $nombre = $_POST["nombre"];
    $materia = $_POST["materia"];
    $calificacion = $_POST["calificacion"];
    $calificacion_letra = " ";

        // Asignamos valor de calificacion en letra segun la calificacion numerica
        if ($calificacion >= 90 && $calificacion <= 100) {
            $calificacion_letra = "A";
            echo "<p> felicidades, $nombre. Has obtenido una calificación de $calificacion_letra en $materia.</p>";
        } elseif ($calificacion >= 80 && $calificacion < 90) {
            $calificacion_letra = "B";
            echo "<p> Bien hecho, $nombre. Has obtenido una calificación de $calificacion_letra en $materia.</p>";
        } elseif ($calificacion >= 70 && $calificacion < 80) {
            echo "<p> Regular, $nombre. Has obtenido una calificación de $calificacion_letra en $materia.</p>";
            $calificacion_letra = "C";
        } elseif ($calificacion >= 60 && $calificacion < 70) {
            echo "<p> Necesitas mejorar, $nombre. Has obtenido una calificación de $calificacion_letra en $materia.</p>";
            $calificacion_letra = "D";
        } else {
            $calificacion_letra = "F";
            echo "<p> ya mamaste, $nombre. Has obtenido una calificación de $calificacion_letra en $materia, mejor salte de la carrera no sirves para nada.</p>";
        }
