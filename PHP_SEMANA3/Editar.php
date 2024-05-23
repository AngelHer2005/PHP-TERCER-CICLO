<?php
include "connection.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nombrelibro = $_POST['nombrelibro'];
    $autor = $_POST['autor'];
    $descripcion = $_POST['descripcion'];

    $sql = $conexion->prepare("UPDATE LIBRO SET Nombrelibro = :nombrelibro, Autor = :autor, Descripcion = :descripcion WHERE id = :id");
    $sql->bindParam(':id', $id);
    $sql->bindParam(':nombrelibro', $nombrelibro);
    $sql->bindParam(':autor', $autor);
    $sql->bindParam(':descripcion', $descripcion);

    if ($sql->execute()) {
        header("Location: index.php");
        exit();
    } else {
        echo "<div class='alert alert-danger' role='alert'>Error al actualizar el libro.</div>";
    }
} else {
    echo "<div class='alert alert-danger' role='alert'>Acceso no autorizado.</div>";
}
?>