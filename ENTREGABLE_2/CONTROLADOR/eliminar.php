<?php
    include "../BASE DE DATOS/conexion.php";
    $producto = $_POST['produc'];

    $sql = $connection->prepare("DELETE FROM carrito WHERE producto = ?");
    
    if($sql->execute([$producto])) {
        header("Location:../vistas/carrito.php");
    } else {
        echo "<div class='alert alert-danger'>Error al eliminar el libro.</div>";   
    }

?>