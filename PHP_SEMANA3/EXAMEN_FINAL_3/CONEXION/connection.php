<?php
    $connection = new PDO("mysql:host=localhost;dbname=bdproducto","root","");
    if(!$connection){
        die("Error de conexión: " . $connection->errorInfo()[2]);
    }

?>