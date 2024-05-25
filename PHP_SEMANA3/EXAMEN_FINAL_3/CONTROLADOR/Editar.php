<?php
include "../Conexion/connection.php";

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];

$sql = $connection->prepare("UPDATE producto SET nombre = ?, precio = ?, cantidad = ? WHERE id = ?");

if ($sql->execute([$nombre, $precio, $cantidad, $id])) {
    header("Location: ../Plantillas/index.php"); 
    exit();
} else {
    echo "<div class='alert alert-danger' role='alert'>Error al actualizar.</div>";
}
?>
