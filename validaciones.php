<?php
// Activa la visualización de errores (solo en desarrollo)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Función que verifica si un campo está vacío
// Recibe un valor y regresa true si está vacío
function validarVacio($campo) {
    return empty(trim($campo));
}

// Función que valida si el correo tiene formato correcto
// Usa filter_var de PHP para validar emails
function validarEmail($correo) {
    return filter_var($correo, FILTER_VALIDATE_EMAIL);
}

// Función que valida que la contraseña tenga mínimo 8 caracteres
// Regresa true si cumple la condición
function validarPassword($password) {
    return strlen($password) >= 8;
}
?>