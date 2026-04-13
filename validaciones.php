<?php
// Mostrar errores (solo para desarrollo)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Verifica si un campo está vacío
function validarVacio($campo) {
    return empty(trim($campo));
}

// Valida formato de correo
function validarEmail($correo) {
    return filter_var($correo, FILTER_VALIDATE_EMAIL);
}

// Valida contraseña (mínimo 8 caracteres)
function validarPassword($password) {
    return strlen($password) >= 8;
}
?>