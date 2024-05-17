<?php
include "Conexion/conexion.php";

if(!empty($_POST["btnañadir"])){
    if(!empty($_POST["NOMBRE"]) and !empty($_POST["EMAIL"]) and !empty($_POST["TELEFONO"]) and !empty($_POST["DIRECCION"])){
        $nombre = $_POST["NOMBRE"];
        $email = $_POST["EMAIL"];
        $telefono = $_POST["TELEFONO"];
        $direccion = $_POST["DIRECCION"];
        $fecha = date("Y-m-d");
        $sql=$connection->query("INSERT INTO CLIENTE(NOMBRE, EMAIL, TELEFONO, DIRECCION, FECHACREACION) VALUES('$nombre', '$email', '$telefono', '$direccion', '$fecha')");
        if($sql==1){
            header("location: ../index.php");
        }else{
            echo "<div class='alert alert-danger'>Error al crear Cliente</div>";   
        }
    }else{
        echo "<div class='alert alert-warning'>Utiliza todos los campos</div>";
    }
    
}
