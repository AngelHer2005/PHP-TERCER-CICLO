<?php
    if(isset($_POST['eliminar_producto'])) {
        if(isset($_POST['id'])) {
            include "../Conexion/connection.php";
            $id = $_POST['id'];

            $stmt = $connection->prepare("DELETE FROM producto WHERE id = ?");
            
            $stmt->execute([$id]);
            if($stmt->rowCount() > 0) {
                header("Location:../Plantillas/index.php");
            } else {
                echo "<div class='alert alert-danger'>Error al eliminar el producto.</div>";   
            }
        } else {
            echo "<div class='alert alert-danger'>ID del producto no recibido.</div>";
        }
    }
?>