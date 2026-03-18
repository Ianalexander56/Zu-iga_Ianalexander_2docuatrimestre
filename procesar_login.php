<?php

// Recibir datos
$usuario = $_POST['usuario'];
$password = $_POST['password'];

// Aquí se agregará la validación del usuario
// Aquí se agregará la validación de la contraseña

echo "<h2>Intento de inicio de sesión recibido</h2>";
echo "Usuario: " . $usuario . "<br>";

// Ejemplo de respuesta dinámica simple
if($usuario != "" && $password != ""){
    echo "Bienvenido al sistema.";
} else {
    echo "Faltan datos.";
}

?>