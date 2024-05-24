<?php
include "../Conexion/connection.php";

    $nombrelibro = $_POST['nombrelibro'];
    $autor = $_POST['autor'];
    $descripcion = $_POST['descripcion'];

    $sql = $connection->prepare("INSERT INTO libro (Nombrelibro, Autor, Descripcion) VALUES (:nombrelibro, :autor, :descripcion)");
    $sql->bindParam(':nombrelibro', $nombrelibro);
    $sql->bindParam(':autor', $autor);
    $sql->bindParam(':descripcion', $descripcion);

    if ($sql->execute()) {
        echo "<div class='alert alert-success' role='alert'>Libro agregado exitosamente. <a href='index.php' class='alert-link'>Ver listado</a></div>";
        header("Location: ../Plantillas/index.php");

    } else {
        echo "<div class='alert alert-danger' role='alert'>Error al agregar el libro.</div>";
    }

?>