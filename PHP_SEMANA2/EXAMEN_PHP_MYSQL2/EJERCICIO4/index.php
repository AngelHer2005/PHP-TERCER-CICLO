<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saga Falabella</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header text-center bg-primary text-white">
                <h2>Descuentos - Saga Falabella</h2>
            </div>
            <div class="card-body">
                <?php
                    include "../Conexion/conexion.php";
                    $conn = crear_conexion("localhost", "root", "", "EJERCICIO4");

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $monto_compra = $_POST["monto_compra"];
                        $monto_final = montoFinal($monto_compra);
                        echo "<div class='alert alert-success'>El monto final a pagar es: S/. " . $monto_final . "</div>";
                        $sql = "INSERT INTO compras (monto_compra, monto_final) VALUES ($monto_compra, $monto_final)";
                        if ($conn->query($sql) === TRUE) {
                            echo "<div class='alert alert-success'>Compra registrada.</div>";
                        } else {
                            echo "<div class='alert alert-danger'>Error al registrar la compra: " . $conn->error . "</div>";
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
                <form method="post" action="">
                    <div class="mb-3">
                        <label for="monto_compra" class="form-label">Monto de Compra:</label>
                        <div class="input-group">
                            <span class="input-group-text">S/. </span>
                            <input type="number" class="form-control" id="monto_compra" name="monto_compra" step="0.01" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Calcular</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
