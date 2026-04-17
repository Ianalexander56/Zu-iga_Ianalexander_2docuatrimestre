<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Biblioteca</title>
</head>
<body>

<h2> Libros</h2>

<form action="acciones.php" method="POST">
    <input type="text" name="id" placeholder="ID" required>
    <input type="text" name="titulo" placeholder="Título" required>
    <input type="text" name="autor" placeholder="Autor" required>
    <input type="text" name="nacionalidad" placeholder="Nacionalidad" required>
    <br><br>

    <button name="accion" value="agregarLibro">Agregar</button>
    <button name="accion" value="eliminarLibro">Eliminar</button>
</form>

<br>
<a href="acciones.php?mostrar=libros">Mostrar Libros</a>

<hr>

<h2> Prestamos</h2>

<form action="acciones.php" method="POST">
    <input type="text" name="idPrestamo" placeholder="ID Libro" required>
    <input type="text" name="usuario" placeholder="Usuario" required>
    <br><br>

    <button name="accion" value="prestarLibro">Prestar</button>
    <button name="accion" value="eliminarPrestamo">Eliminar</button>
</form>

<br>
<a href="acciones.php?mostrar=prestamos">Mostrar Prestamos</a>

</body>
</html>