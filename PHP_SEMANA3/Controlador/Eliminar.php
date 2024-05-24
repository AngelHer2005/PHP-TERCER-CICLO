<?php
    if(isset($_POST['eliminar_libro'])) {
        if(isset($_POST['id'])) {
            include "../Conexion/connection.php";
            $id = $_POST['id'];

            $stmt = $connection->prepare("DELETE FROM libro WHERE id = ?");
            
            $stmt->execute([$id]);
            if($stmt->rowCount() > 0) {
                header("Location:../Plantillas/index.php");
            } else {
                echo "<div class='alert alert-danger'>Error al eliminar el libro.</div>";   
            }
        } else {
            echo "<div class='alert alert-danger'>ID del libro no recibido.</div>";
        }
    }
?>