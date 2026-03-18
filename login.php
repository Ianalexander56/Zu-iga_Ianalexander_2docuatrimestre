<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>

<h2>Iniciar Sesión</h2>

<form action="procesar_login.php" method="POST">

    <label>Correo o Usuario:</label><br>
    <input type="text" name="usuario"><br><br>

    <label>Contraseña:</label><br>
    <input type="password" name="password"><br><br>

    <input type="submit" value="Iniciar sesión">
</form>

</body>
</html>