<?php
function crear_conexion($servername, $username, $password, $database)
{
    $connection = new mysqli(
        $servername,
        $username,
        $password,
        $database
    );
    if ($connection->connect_error) {
        return "Conexión fallida: " . $connection->connect_error;
    } else {
        return $connection;
    }
}
