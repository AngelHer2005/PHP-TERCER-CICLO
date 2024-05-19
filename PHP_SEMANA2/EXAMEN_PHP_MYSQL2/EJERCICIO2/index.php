<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sueldo de Vendedores</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <div class="card shadow-sm">
            <div class="card-header text-center bg-primary text-white">
                <h2>Sueldo de Vendedores</h2>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Registrar Nuevo Vendedor</h3>
                        <form method="post">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre:</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                            </div>
                            <div class="mb-3">
                                <label for="sueldo_mensual" class="form-label">Sueldo Mensual:</label>
                                <input type="number" class="form-control" id="sueldo_mensual" name="sueldo_mensual" step="0.01" required>
                            </div>
                            <div class="mb-3">
                                <label for="ventas" class="form-label">Monto de Venta:</label>
                                <input type="number" class="form-control" id="ventas" name="ventas" step="0.01" required>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Registrar Vendedor</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <?php
                            include "../Conexion/conexion.php";
                            $conn = crear_conexion("localhost", "root", "", "EJERCICIO2");

                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                $nombre = $_POST["nombre"];
                                $sueldo_mensual = $_POST["sueldo_mensual"];
                                $ventas = $_POST["ventas"];

                                if ($ventas >= 1000) {
                                    $comision = $ventas * 0.15;
                                } elseif ($ventas >= 500 && $ventas < 1000) {
                                    $comision = $ventas * 0.05;
                                } else {
                                    $comision = 0;
                                }

                                $monto_final = $sueldo_mensual + $comision;
                                $sql_insert = "INSERT INTO vendedores (nombre, sueldo_mensual, ventas, comision, monto_final) VALUES ('$nombre', '$sueldo_mensual', '$ventas', '$comision', '$monto_final')";

                                if ($conn->query($sql_insert) === TRUE) {
                                    echo "<div class='alert alert-success text-center'>Vendedor registrado correctamente.</div>";
                                } else {
                                    echo "<div class='alert alert-danger text-center'>Error al registrar vendedor: " . $conn->error . "</div>";
                                }
                            }

                            $sql_select = "SELECT * FROM vendedores";
                            $result = $conn->query($sql_select);

                            if ($result->num_rows > 0) {
                                echo "<h3>Vendedores Registrados</h3>";
                                echo "<table class='table table-striped table-hover'>";
                                echo "<thead class='table-primary'><tr><th>Nombre</th><th>Sueldo Mensual</th><th>Ventas</th><th>Comisión</th><th>Monto Final</th></tr></thead><tbody>";
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr><td>" . $row["nombre"] . "</td><td>" . $row["sueldo_mensual"] . "</td><td>" . $row["ventas"] . "</td><td>" . $row["comision"] . "</td><td>" . $row["monto_final"] . "</td></tr>";
                                }
                                echo "</tbody></table>";
                            } else {
                                echo "<div class='alert alert-info text-center'>No hay vendedores registrados</div>";
                            }

                            $conn->close();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
