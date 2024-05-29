<?php
    include "../BASE DE DATOS/conexion.php";
    $nombre = $_POST["nombre"];
    $tarjeta = $_POST["tarjeta"];
    $fecha = $_POST["fecha_vencimiento"];

    $sql = $connection->prepare("INSERT INTO cuenta VALUES (?, ?, ?)");
    if($sql->execute([$nombre, $tarjeta, $fecha])){
        header("Location:../vistas/HOME.php");
    }

?>