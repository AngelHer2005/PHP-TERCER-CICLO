<?php
include "../Conexion/connection.php";

$id = $_POST['id'];
$nombrelibro = $_POST['nombrelibro'];
$autor = $_POST['autor'];
$descripcion = $_POST['descripcion'];

$sql = $connection->prepare("UPDATE libro SET NombreLibro = ?, Autor = ?, Descripcion = ? WHERE id = ?");

if ($sql->execute([$nombrelibro, $autor, $descripcion, $id])) {
    header("Location: ../Plantillas/index.php"); 
    exit();
} else {
    echo "<div class='alert alert-danger' role='alert'>Error al actualizar.</div>";
}
?>
