<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuentas Bancarias</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h2 class="text-center">Cuentas Bancarias</h2>
            </div>
            <div class="card-body">
                <?php
                    include "../Conexion/conexion.php";
                    $conn = crear_conexion("localhost", "root", "", "EJERCICIO7");

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $numCuenta = $_POST["numCuenta"];
                        $nombres = $_POST["nombres"];
                        $apellidos = $_POST["apellidos"];
                        $edad = $_POST["edad"];
                        $fechaNacimiento = $_POST["fechaNacimiento"];
                        $direccion = $_POST["direccion"];
                        $distrito = $_POST["distrito"];
                        $tipoCuenta = $_POST["tipoCuenta"];
                        $montoDepositado = $_POST["montoDepositado"];

                        if ($montoDepositado > 5000) {
                            $sql = "INSERT INTO clientes (num_cuenta, nombres, apellidos, edad, fecha_nacimiento, direccion, distrito, tipo_cuenta, monto_depositado) VALUES ('$numCuenta', '$nombres', '$apellidos', $edad, '$fechaNacimiento', '$direccion', '$distrito', '$tipoCuenta', $montoDepositado)";
                            if ($conn->query($sql) === TRUE) {
                                echo "<div class='alert alert-success'>Cliente registrado exitosamente. Debe recoger su tarjeta de crédito.</div>";
                            } else {
                                echo "<div class='alert alert-danger'>Error al registrar el cliente: " . $conn->error . "</div>";
                            }
                        } else {
                            $sql = "INSERT INTO clientes (num_cuenta, nombres, apellidos, edad, fecha_nacimiento, direccion, distrito, tipo_cuenta, monto_depositado) VALUES ('$numCuenta', '$nombres', '$apellidos', $edad, '$fechaNacimiento', '$direccion', '$distrito', '$tipoCuenta', $montoDepositado)";
                            if ($conn->query($sql) === TRUE) {
                                echo "<div class='alert alert-success'>Cliente registrado exitosamente.</div>";
                            } else {
                                echo "<div class='alert alert-danger'>Error al registrar el cliente: " . $conn->error . "</div>";
                            }
                        }
                    }

                    $conn->close();
                ?>
                <form method="post" action="" class="mt-3">
                    <div class="form-group">
                        <label for="numCuenta">Número de Cuenta:</label>
                        <input type="text" class="form-control" id="numCuenta" name="numCuenta" required>
                    </div>
                    <div class="form-group">
                        <label for="nombres">Nombres:</label>
                        <input type="text" class="form-control" id="nombres" name="nombres" required>
                    </div>
                    <div class="form-group">
                        <label for="apellidos">Apellidos:</label>
                        <input type="text" class="form-control" id="apellidos" name="apellidos" required>
                    </div>
                    <div class="form-group">
                        <label for="edad">Edad:</label>
                        <input type="number" class="form-control" id="edad" name="edad" required>
                    </div>
                    <div class="form-group">
                        <label for="fechaNacimiento">Fecha de Nacimiento:</label>
                        <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" required>
                    </div>
                    <div class="form-group">
                        <label for="direccion">Dirección:</label>
                        <input type="text" class="form-control" id="direccion" name="direccion" required>
                    </div>
                    <div class="form-group">
                        <label for="distrito">Distrito:</label>
                        <input type="text" class="form-control" id="distrito" name="distrito" required>
                    </div>
                    <div class="form-group">
                        <label for="tipoCuenta">Tipo de Cuenta:</label>
                        <select class="form-control" id="tipoCuenta" name="tipoCuenta" required>
                            <option value="Ahorro">Ahorro</option>
                            <option value="Cuenta Sueldo">Cuenta Sueldo</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="montoDepositado">Monto Depositado:</label>
                        <input type="number" class="form-control" id="montoDepositado" name="montoDepositado" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Registrar Cliente</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
