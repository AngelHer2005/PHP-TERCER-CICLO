<?php
    include "../BASE DE DATOS/conexion.php";
    $producto = $_POST['produc'];
    
    $sql = $connection->query("SELECT cantidad AS total FROM carrito WHERE producto = '$producto'");
    $resultado = $sql->fetch(PDO::FETCH_ASSOC)['total'];
    if($resultado>1){
        $sql = $connection->prepare("UPDATE carrito SET cantidad = cantidad - 1 WHERE producto = '$producto'");
        if ($sql->execute()) {
            header("Location:../vistas/carrito.php");
        }
    }else{
        $sql = $connection->prepare("DELETE FROM carrito WHERE producto = ?");
        if($sql->execute([$producto])) {
            header("Location:../vistas/carrito.php");
        } else {
            echo "<div class='alert alert-danger'>Error al eliminar el libro.</div>";   
        }
    }

    

?>