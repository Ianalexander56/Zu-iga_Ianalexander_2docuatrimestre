<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Incluir funciones
require("validaciones.php");

// Verificar que se enviaron datos
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST['nombre'] ?? '';
    $correo = $_POST['correo'] ?? '';
    $password = $_POST['password'] ?? '';

    $errores = [];

    // Validar campos vacíos
    if (validarVacio($nombre)) {
        $errores[] = "El campo nombre es obligatorio";
    }

    if (validarVacio($correo)) {
        $errores[] = "El campo correo es obligatorio";
    }

    if (validarVacio($password)) {
        $errores[] = "El campo contraseña es obligatorio";
    }

    // Validar correo
    if (!validarVacio($correo) && !validarEmail($correo)) {
        $errores[] = "El correo electrónico no tiene un formato válido";
    }

    // Validar contraseña
    if (!validarVacio($password) && !validarPassword($password)) {
        $errores[] = "La contraseña debe tener al menos 8 caracteres";
    }

    // Mostrar resultados
    if (count($errores) > 0) {
        echo "<h3>Errores:</h3>";
        foreach ($errores as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
        echo "<a href='index.html'>Volver</a>";
    } else {
        echo "<h3 style='color:green;'>Registro exitoso</h3>";
    }

} else {
    echo "Acceso no permitido";
}
?>