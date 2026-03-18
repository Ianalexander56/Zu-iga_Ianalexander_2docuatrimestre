<?php

// Recibir datos del formulario
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$password = $_POST['password'];

// Aquí se agregará la validación del nombre
// Aquí se agregará la validación del correo electrónico
// Aquí se agregará la validación de la contraseña

echo "<h2>Registro exitoso</h2>";
echo "Nombre: " . $nombre . "<br>";
echo "Correo: " . $correo . "<br>";

?>