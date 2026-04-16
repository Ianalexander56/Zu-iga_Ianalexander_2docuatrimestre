<?php
session_start();

if (!isset($_SESSION['libros'])) $_SESSION['libros'] = [];
if (!isset($_SESSION['prestamos'])) $_SESSION['prestamos'] = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $accion = $_POST['accion'];

    // AGREGAR LIBRO
    if ($accion == "agregarLibro") {

        // Validar ID duplicado
        foreach ($_SESSION['libros'] as $l) {
            if ($l['id'] == $_POST['id']) {
                die("Ese ID ya existe. <br><a href='index.php'>Volver</a>");
            }
        }

        $_SESSION['libros'][] = [
            'id' => $_POST['id'],
            'titulo' => $_POST['titulo'],
            'autor' => $_POST['autor'],
            'nacionalidad' => $_POST['nacionalidad'],
            'estado' => 'Disponible'
        ];
    }

    // ELIMINAR LIBRO
    if ($accion == "eliminarLibro") {
        $id = $_POST['id'];
        $_SESSION['libros'] = array_filter($_SESSION['libros'], fn($l) => $l['id'] != $id);
    }

    // PRESTAR LIBRO
    if ($accion == "prestarLibro") {
        $id = $_POST['idPrestamo'];
        $usuario = $_POST['usuario'];
        $encontrado = false;

        foreach ($_SESSION['libros'] as &$libro) {
            if ($libro['id'] == $id) {
                $encontrado = true;

                if ($libro['estado'] == 'Disponible') {
                    $libro['estado'] = 'Prestado';
                    $_SESSION['prestamos'][] = ['id' => $id, 'usuario' => $usuario];
                } else {
                    die("El libro ya está prestado. <br><a href='index.php'>Volver</a>");
                }
            }
        }

        if (!$encontrado) {
            die("El libro no existe. <br><a href='index.php'>Volver</a>");
        }
    }

    // ELIMINAR PRÉSTAMO
    if ($accion == "eliminarPrestamo") {
        $id = $_POST['idPrestamo'];

        $_SESSION['prestamos'] = array_filter($_SESSION['prestamos'], fn($p) => $p['id'] != $id);

        foreach ($_SESSION['libros'] as &$libro) {
            if ($libro['id'] == $id) {
                $libro['estado'] = 'Disponible';
            }
        }
    }

    header("Location: index.php");
    exit();
}

// MOSTRAR DATOS
if (isset($_GET['mostrar'])) {

    echo "<h2>Resultados</h2>";

    if ($_GET['mostrar'] == "libros") {
        echo "<table border='1'>
        <tr>
        <th>ID</th>
        <th>Título</th>
        <th>Autor</th>
        <th>Nacionalidad</th>
        <th>Estado</th>
        </tr>";

        foreach ($_SESSION['libros'] as $l) {
            echo "<tr>
                    <td>{$l['id']}</td>
                    <td>{$l['titulo']}</td>
                    <td>{$l['autor']}</td>
                    <td>{$l['nacionalidad']}</td>
                    <td>{$l['estado']}</td>
                  </tr>";
        }
        echo "</table>";
    }

    if ($_GET['mostrar'] == "prestamos") {
        echo "<table border='1'>
        <tr>
        <th>ID Libro</th>
        <th>Usuario</th>
        </tr>";

        foreach ($_SESSION['prestamos'] as $p) {
            echo "<tr>
                    <td>{$p['id']}</td>
                    <td>{$p['usuario']}</td>
                  </tr>";
        }
        echo "</table>";
    }

    echo "<br><a href='index.php'>Volver</a>";
}
?>