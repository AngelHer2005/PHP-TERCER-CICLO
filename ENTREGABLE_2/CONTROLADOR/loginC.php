<?php
include "../BASE DE DATOS/conexion.php";

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];


$sql_verificar = $connection->prepare("SELECT COUNT(*) AS total FROM cliente WHERE Usuario = :usuario");
$sql_verificar->bindParam(':usuario', $usuario);
$sql_verificar->execute();
$resultado = $sql_verificar->fetch(PDO::FETCH_ASSOC);

if ($resultado['total'] > 0) {
    header("Location: ../vistas/HOME.php");
}

?>