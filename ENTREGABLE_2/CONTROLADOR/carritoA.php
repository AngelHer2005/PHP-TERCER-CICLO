<?php
    include "../BASE DE DATOS/conexion.php";

    $producto = $_POST['producto_nombre'];
    $precio = $_POST['producto_precio'];
    $cantidad = $connection->prepare("SELECT COUNT(*) AS total FROM carrito WHERE producto = '$producto'");
    $cantidad->execute();
    $resultadoC = $cantidad->fetch(PDO::FETCH_ASSOC);
    if($resultadoC["total"] > 0){
        $sql = $connection->prepare("UPDATE carrito SET cantidad = cantidad + 1 WHERE producto = '$producto'");
        if ($sql->execute()) {
            header("Location:../vistas/HOME.php#Productos");
        }
    } else {
        $cantidad = 1;
        $total = $precio * $cantidad;
        $sql = $connection->prepare("INSERT INTO carrito(producto, precio, cantidad, total) VALUES(?,?,?, ?)");
        if ($sql->execute([$producto, $precio, $cantidad, $total])) {
            header("Location: ../vistas/HOME.php#Productos");
        }
    }    
    
?>
