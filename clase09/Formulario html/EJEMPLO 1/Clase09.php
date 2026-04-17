<?php
// Ejemplo 1: Resgistro con validacion basica

// Verificamos si el formulario ha sido enviado por metodo POST 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar que los campos existan
    if (isset($_POST["nombre"]) && isset($_POST["mail"]) && isset($_POST["contraseña"]) && isset($_POST["edad"])) {
        
    // Obtener los valores de los campos
        $nombre = $_POST["nombre"];
        $mail = $_POST["mail"];
        $contraseña = $_POST["contraseña"];
        $edad = $_POST["edad"];
        
        // Reemplazamos la contraseña con asteriscos
        $contraseña_oculta = str_repeat("*", strlen($contraseña));

        // Validar los datos
        if (strlen($contraseña) < 8) {
            echo "<p style='color: red;'> La contraseña debe tener al menos 8 caracteres.</p>";
        } elseif ( $edad <= 0) {
            echo "<p style='color: red;'>La edad debe ser un número positivo.</p>";
        } else{
            //si no se cumple las condiciones anteriores, se puede proceder con el registro 
            echo "<h2 style='color: green;'> Tu registro ha sido exitoso </h2>";
            echo "<p><strong>Nombre completo:</strong> " .($nombre) . "</p>";
            echo "<p><strong>correo electronico:</strong> " .($mail) . "</p>";
            echo "<p><strong>Edad:</strong> " .($edad) . "</p>";
            echo "<p><strong>Contraseña:</strong> " .($contraseña_oculta) . "</p>";
        }
    } else{
        echo "<p style='color: red;'> Por favor, complete todos los campos del formulario.</p>";
    }
} else{
    echo "<p style='color: red;'> El formulario no se ha enviado correctamente.</p>";
}