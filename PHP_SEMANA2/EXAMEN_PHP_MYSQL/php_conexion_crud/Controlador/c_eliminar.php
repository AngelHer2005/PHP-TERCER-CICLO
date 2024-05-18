<?php
    if(!empty($_GET["id"])){
        $id=$_GET["id"];
        $sql=$connection->query("DELETE FROM CLIENTE WHERE ID=$id");
        if($sql==1){
            echo "<div class='alert alert-success'>Cliente eliminado correctamente</div>";
        }else{
            echo "<div class='alert alert-danger'>Error al eliminar</div>";
        }
    }
?>