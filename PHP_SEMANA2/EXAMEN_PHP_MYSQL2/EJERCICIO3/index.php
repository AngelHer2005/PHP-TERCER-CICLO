<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso Fiesta</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header text-center bg-primary text-white">
                <h2>Ingreso Fiesta</h2>
            </div>
            <div class="card-body">
                <?php
                    include "../Conexion/conexion.php";
                    $conn = crear_conexion("localhost", "root", "", "EJERCICIO3");
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $clave1 = $_POST["clave1"];
                        $clave2 = $_POST["clave2"];
                        $clave3 = $_POST["clave3"];
                        $clave4 = $_POST["clave4"];
                        $clave5 = $_POST["clave5"];
                        $sql = "SELECT * FROM claves";
                        $result = $conn->query($sql);
                        $claves_correctas = true;
                        while ($row = $result->fetch_assoc()) {
                            $clave_guardada = $row["clave"];
                            if ($clave1 !== $clave_guardada && $clave2 !== $clave_guardada && $clave3 !== $clave_guardada && $clave4 !== $clave_guardada && $clave5 !== $clave_guardada) {
                                $claves_correctas = false;
                                break;
                            }
                        }
                        if ($claves_correctas) {
                            echo "<div class='alert alert-success'>BIENVENIDO A LA FIESTA</div>";
                            if (isset($_POST['nombre']) && !empty($_POST['nombre'])) {
                                $nombre = $_POST['nombre'];
                                $sql_insert = "INSERT INTO asistentes (nombre) VALUES ('$nombre')";
                                if ($conn->query($sql_insert) === TRUE) {
                                    echo "<div class='alert alert-info'>Ingreso registrado: $nombre</div>";
                                } else {
                                    echo "<div class='alert alert-danger'>Error al registrar ingreso: " . $conn->error . "</div>";
                                }
                            }
                        } else {
                            echo "<div class='alert alert-danger'>TE EQUIVOCASTE DE FIESTA</div>";
                        }
                    }
                    $conn->close();
                ?>
                <form method="post">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="mb-3">
                        <label for="clave1" class="form-label">Clave 1:</label>
                        <input type="text" class="form-control" id="clave1" name="clave1" required>
                    </div>
                    <div class="mb-3">
                        <label for="clave2" class="form-label">Clave 2:</label>
                        <input type="text" class="form-control" id="clave2" name="clave2" required>
                    </div>
                    <div class="mb-3">
                        <label for="clave3" class="form-label">Clave 3:</label>
                        <input type="text" class="form-control" id="clave3" name="clave3" required>
                    </div>
                    <div class="mb-3">
                        <label for="clave4" class="form-label">Clave 4:</label>
                        <input type="text" class="form-control" id="clave4" name="clave4" required>
                    </div>
                    <div class="mb-3">
                        <label for="clave5" class="form-label">Clave 5:</label>
                        <input type="text" class="form-control" id="clave5" name="clave5" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Verificar Ingreso</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
