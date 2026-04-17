<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
</head>
<body>

<h2>Formulario de Registro</h2>

<form action="procesar_registro.php" method="POST">
    
    <label>Nombre:</label><br>
    <input type="text" name="nombre"><br><br>

    <label>Correo:</label><br>
    <input type="text" name="correo"><br><br>

    <label>Contraseña:</label><br>
    <input type="password" name="password"><br><br>

    <input type="submit" value="Registrarse">
</form>

</body>
</html>