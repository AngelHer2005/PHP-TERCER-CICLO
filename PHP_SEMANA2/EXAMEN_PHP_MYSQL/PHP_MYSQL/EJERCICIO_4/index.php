<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saga Falabella</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2>Descuentos - Saga Falabella</h2>

    <?php
    include "../Conexion/conexion.php";
    $conn = crear_conexion("localhost", "root", "1234", "EJERCICIO4"); 

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $monto_compra = $_POST["monto_compra"];

        $monto_final = montoFinal($monto_compra);

        echo "<p>El monto final a pagar es: $" . $monto_final . "</p>";

        $sql = "INSERT INTO compras (monto_compra, monto_final) VALUES ($monto_compra, $monto_final)";
        if ($conn->query($sql) === TRUE) {
            echo "<div class='alert alert-success'>Compra registrada.</div>";
        } else {
            echo "<div class='alert alert-danger'>Error al registrar la compra en la base de datos: " . $conn->error . "</div>";
        }
    }

    function montoFinal($monto_compra) {
        if ($monto_compra >= 500) {
            return $monto_compra * 0.7; 
        } elseif ($monto_compra >= 200) {
            return $monto_compra * 0.8; 
        } elseif ($monto_compra >= 100) {
            return $monto_compra * 0.9; 
        } else {
            return $monto_compra; 
        }
    }

    $conn->close();

    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="form-group">
            <label for="monto_compra">Monto de Compra:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">$</span>
                </div>
                <input type="number" class="form-control" id="monto_compra" name="monto_compra" step="0.01" required>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Calcular</button>
    </form>
</div>

</body>
</html>
