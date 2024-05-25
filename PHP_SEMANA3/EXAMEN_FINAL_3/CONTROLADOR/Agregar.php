<?php
include "../Conexion/connection.php";

    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];

    $sql = $connection->prepare("INSERT INTO producto (nombre, precio, cantidad) VALUES (:nombre, :precio, :cantidad)");
    $sql->bindParam(':nombre', $nombre);
    $sql->bindParam(':precio', $precio);
    $sql->bindParam(':cantidad', $cantidad);

    if ($sql->execute()) {
        echo "<div class='alert alert-success' role='alert'>Libro agregado exitosamente. <a href='index.php' class='alert-link'>Ver listado</a></div>";
        header("Location: ../Plantillas/index.php");

    } else {
        echo "<div class='alert alert-danger' role='alert'>Error al agregar el libro.</div>";
    }

?>