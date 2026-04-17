<?php
 //Ejemplo 4 - inicia de sesion

 //Predefinimos el usuario y contraseña que seran los usuario "correctos" para el inicio de sesion 
 $usuario_correcto = "admin";
 $contraseña_correcta = "123456";

 //Verificamos si los datos han sido enviados mediante el metodo POST 
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Validamos que los campos de usuario y contraseña son existan
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $usuario_ingresado = $_POST["username"];
        $contraseña_ingresada = $_POST["password"];

        //Validamos que el usuario y contraseña ingresados coincidan con los predefinidos
        if (($usuario_correcto === $usuario_ingresado) && ($contraseña_correcta === $contraseña_ingresada)) {
            // En caso de que ambos sean correctos, mostramos un mensaje de bienvenido
            echo "<p style='color: green;'>¡Bienvenido, " . $usuario_ingresado . "!</p>";
        } else {
            // Si alguno de los dos, es incorrecto. Mostrar un mensaje de error, y mostrar cual fue el dato erroneo, sin mostrar el valor real
            if (($usuario_correcto !== $usuario_ingresado) && ($contraseña_correcta !== $contraseña_ingresada)) {
                echo "<p style='color: red;'>Usuario y contraseña incorrectos.</p>";
            } elseif ($usuario_correcto !== $usuario_ingresado) {
                echo "<p style='color: red;'>Usuario incorrecto.</p>";
            } else {
                echo "<p style='color: red;'>Contraseña incorrecta.</p>";
            }
        }
    }
}
