<?php
    $connection = new PDO("mysql:host=localhost;dbname=bdlibro","root","1234");
    if (!$connection) {
        die("Error de conexión: " . $connection->errorInfo()[2]);
    }
?>