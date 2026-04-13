<?php
// Mostrar errores en pantalla
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Incluir archivo de funciones
require("validaciones.php");

// Verifica que el formulario fue enviado por método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Obtener los datos del formulario
    // Si no existen, asigna cadena vacía
    $nombre = $_POST['nombre'] ?? '';
    $correo = $_POST['correo'] ?? '';
    $password = $_POST['password'] ?? '';

    // Arreglo para guardar errores
    $errores = [];

    // Validar si los campos están vacíos
    if (validarVacio($nombre)) {
        $errores[] = "El campo nombre es obligatorio";
    }

    if (validarVacio($correo)) {
        $errores[] = "El campo correo es obligatorio";
    }

    if (validarVacio($password)) {
        $errores[] = "El campo contraseña es obligatorio";
    }

    // Validar formato de correo
    if (!validarVacio($correo) && !validarEmail($correo)) {
        $errores[] = "El correo electrónico no tiene un formato válido";
    }

    // Validar longitud de contraseña
    if (!validarVacio($password) && !validarPassword($password)) {
        $errores[] = "La contraseña debe tener al menos 8 caracteres";
    }

    // Mostrar resultados
    if (count($errores) > 0) {
        echo "<h3>Errores:</h3>";

        // Recorrer y mostrar cada error
        foreach ($errores as $error) {
            echo "<p style='color:red;'>$error</p>";
        }

        // Botón para regresar
        echo "<a href='index.html'>Volver</a>";

    } else {
        // Si no hay errores, mostrar éxito
        echo "<h3 style='color:green;'>Registro exitoso</h3>";
    }

} else {
    // Si alguien intenta entrar directo al archivo
    echo "Acceso no permitido";
}
?>