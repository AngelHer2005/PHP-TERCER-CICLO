<?php
    $servername = "localhost";
    $username = "root";
    $password = "1234";
    $database = "tienda";

    $connection = new mysqli($servername, $username, $password, $database);

    if ($connection->connect_error) {
        die("Conexión fallida: " . $connection->connect_error);
    }
?>