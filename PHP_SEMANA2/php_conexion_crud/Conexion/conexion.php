<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "tienda";

    $connection = new mysqli($servername, $username, $password, $database);

    if ($connection->connect_error) {
        die("Conexión fallida: " . $connection->connect_error);
    }
?>