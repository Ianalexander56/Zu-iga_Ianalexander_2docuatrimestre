<?php
// Función para validar campo vacío
function validarVacio($campo) {
    return empty(trim($campo));
}

// Función para validar correo
function validarEmail($correo) {
    return filter_var($correo, FILTER_VALIDATE_EMAIL);
}

// Función para validar contraseña (mínimo 8 caracteres)
function validarPassword($password) {
    return strlen($password) >= 8;
}
?>