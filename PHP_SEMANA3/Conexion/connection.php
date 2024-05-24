<?php
    $connection = new PDO("mysql:host=localhost;dbname=bdlibro","root","");
    if (!$connection) {
        die("Error de conexión: " . $connection->errorInfo()[2]);
    }
?>