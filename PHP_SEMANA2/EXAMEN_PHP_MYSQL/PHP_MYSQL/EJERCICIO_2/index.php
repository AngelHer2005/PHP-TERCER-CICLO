<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Sueldo de Vendedores</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">Calcular Sueldo de Vendedores</h2>

    <div class="row">
        <div class="col-md-6">
            <h3>Registrar Nuevo Vendedor</h3>
            <form method="post">
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>
                <div class="form-group">
                    <label for="sueldo_mensual">Sueldo Mensual:</label>
                    <input type="number" class="form-control" id="sueldo_mensual" name="sueldo_mensual" step="0.01" required>
                </div>
                <div class="form-group">
                    <label for="ventas">Ventas:</label>
                    <input type="number" class="form-control" id="ventas" name="ventas" step="0.01" required>
                </div>
                <button type="submit" class="btn btn-primary">Registrar Vendedor</button>
            </form>
        </div>
        <div class="col-md-6">
            <?php
            include "../Conexion/conexion.php";
            $conn = crear_conexion("localhost", "root", "1234", "EJERCICIO2"); 

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

                $sql_insert = "INSERT INTO vendedores (nombre, sueldo_mensual, ventas, comision, monto_final) 
                               VALUES ('$nombre', '$sueldo_mensual', '$ventas', '$comision', '$monto_final')";

                if ($conn->query($sql_insert) === TRUE) {
                    echo "<h3>Registro Exitoso</h3>";
                    echo "<p>Vendedor registrado correctamente.</p>";
                } else {
                    echo "<h3>Error</h3>";
                    echo "<p>Error al registrar vendedor: " . $conn->error . "</p>";
                }
            }

            $sql_select = "SELECT * FROM vendedores";
            $result = $conn->query($sql_select);

            if ($result->num_rows > 0) {
                echo "<h3>Vendedores Registrados</h3>";
                echo "<table class='table'><tr><th>Nombre</th><th>Sueldo Mensual</th><th>Ventas</th><th>Comisión</th><th>Monto Final</th></tr>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>".$row["nombre"]."</td><td>".$row["sueldo_mensual"]."</td><td>".$row["ventas"]."</td><td>".$row["comision"]."</td><td>".$row["monto_final"]."</td></tr>";
                }
                echo "</table>";
            } else {
                echo "<h3>No hay vendedores registrados</h3>";
            }

            $conn->close();
            ?>
        </div>
    </div>
</div>
</body>
</html>
