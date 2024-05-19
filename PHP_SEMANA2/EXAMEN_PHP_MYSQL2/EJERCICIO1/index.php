<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipo de Triángulo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <div class="card shadow-sm">
            <div class="card-header text-center bg-primary text-white">
                <h2>Tipo de Triángulo</h2>
            </div>
            <div class="card-body">
                <?php
                    include "../Conexion/conexion.php";
                    include "logica_triangulo.php";
                    $connection = crear_conexion("localhost", "root", "", "EJERCICIO1");

                    if (isset($_POST["ejecute"])) {
                        if (isset($_POST["lado1"]) && isset($_POST["lado2"]) && isset($_POST["lado3"])) {
                            $l1 = $_POST["lado1"];
                            $l2 = $_POST["lado2"];
                            $l3 = $_POST["lado3"];

                            if (is_numeric($l1) && is_numeric($l2) && is_numeric($l3)) {
                                $l1 = intval($l1);
                                $l2 = intval($l2);
                                $l3 = intval($l3);
                                $tipo = tipoTriangulo($l1, $l2, $l3);

                                if ($tipo != "No es un triángulo") {
                                    $sql = $connection->query("INSERT INTO TRIANGULO(LADO1, LADO2, LADO3, TIPOTRIANGULO) VALUES($l1, $l2, $l3, '$tipo')");
                                    echo "<div class='alert alert-success text-center'>Es un triángulo $tipo.</div>";
                                } else {
                                    echo "<div class='alert alert-danger text-center'>$tipo.</div>";
                                }
                            } else {
                                echo "<div class='alert alert-danger text-center'>Los lados deben ser valores numéricos.</div>";
                            }
                        } else {
                            echo "<div class='alert alert-warning text-center'>Utiliza todos los campos.</div>";
                        }
                    }
                ?>
                <form method="post">
                    <div class="mb-3">
                        <label for="lado1" class="form-label">Ingresa lado 1:</label>
                        <input type="number" name="lado1" class="form-control" id="lado1" required>
                    </div>
                    <div class="mb-3">
                        <label for="lado2" class="form-label">Ingresa lado 2:</label>
                        <input type="number" name="lado2" class="form-control" id="lado2" required>
                    </div>
                    <div class="mb-3">
                        <label for="lado3" class="form-label">Ingresa lado 3:</label>
                        <input type="number" name="lado3" class="form-control" id="lado3" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary" name="ejecute">EJECUTAR</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
