<?php
if(!empty($_POST["btnregistro"])){
    if(!empty($_POST["NOMBRE"]) and !empty($_POST["EMAIL"]) and !empty($_POST["TELEFONO"]) and !empty($_POST["DIRECCION"])){
        $id=$_POST["id"];
        $nombre = $_POST["NOMBRE"];
        $email = $_POST["EMAIL"];
        $telefono = $_POST["TELEFONO"];
        $direccion = $_POST["DIRECCION"];
        $sql=$connection->query("UPDATE CLIENTE SET NOMBRE='$nombre', EMAIL='$email', TELEFONO='$telefono', DIRECCION='$direccion' WHERE ID=$id");
        if($sql==1){
            header("location: ../index.php");
        }else{
            echo "<div class='alert alert-danger'>Error al modificar Cliente</div>";
        }
    }else{
        echo "<div class='alert alert-warning'>Modifica todos los campos</div>";
    }
}
?>
