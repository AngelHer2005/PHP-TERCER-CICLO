<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triángulos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <h2>Tipo de Triángulo</h2>
        <br>
        <?php
        include "../Conexion/conexion.php";
        include "logica_triangulo.php";
        $connection = crear_conexion("localhost", "root", "1234", "EJERCICIO1");
        if(isset($_POST["ejecute"])) {
            if(isset($_POST["lado1"]) && isset($_POST["lado2"]) && isset($_POST["lado3"])) {
                $l1 = $_POST["lado1"];
                $l2 = $_POST["lado2"];
                $l3 = $_POST["lado3"];
                
                // Verificar si los lados son numéricos
                if(is_numeric($l1) && is_numeric($l2) && is_numeric($l3)) {
                    $l1 = intval($l1);
                    $l2 = intval($l2);
                    $l3 = intval($l3);
                    
                    $tipo = tipoTriangulo($l1, $l2, $l3);
                    
                    if($tipo != "No es un triángulo") {
                        $sql=$connection->query("INSERT INTO TRIANGULO(LADO1, LADO2, LADO3, TIPOTRIANGULO) VALUES($l1, $l2, $l3, '$tipo')");
                        echo "<div class='alert alert-success'>Es un triángulo $tipo.</div>";   
                    } else {
                        echo "<div class='alert alert-danger'>$tipo.</div>";   
                    }
                } else {
                    echo "<div class='alert alert-danger'>Los lados deben ser valores numéricos.</div>";
                }
            } else {
                echo "<div class='alert alert-warning'>Utiliza todos los campos.</div>";
            }
        }
        ?>
        <form method="post">
            <label for="lado1">Ingresa lado 1:</label>
            <input type="number" name="lado1" required><br><br>
            
            <label for="lado2">Ingresa lado 2:</label>
            <input type="number" name="lado2" required><br><br>
            
            <label for="lado3">Ingresa lado 3:</label>
            <input type="number" name="lado3" required><br><br>
            
            <input type="submit" class='btn btn-primary' name='ejecute' value="EJECUTAR">
        </form>
    </div>
</body>
</html>
