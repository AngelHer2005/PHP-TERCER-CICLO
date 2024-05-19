<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descomposición de Números</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h2 class="text-center">Descomposición de Números de 5 Cifras</h2>
            </div>
            <div class="card-body">
                <?php
                    include "../Conexion/conexion.php";
                    $conn = crear_conexion("localhost", "root", "", "EJERCICIO5");

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $numero = $_POST["numero"];
                        if (strlen($numero) == 5 && is_numeric($numero)) {
                            $digitos = str_split($numero);
                            $sql = "INSERT INTO numeros (numero, digito1, digito2, digito3, digito4, digito5) VALUES ($numero, $digitos[0], $digitos[1], $digitos[2], $digitos[3], $digitos[4])";
                            if ($conn->query($sql) === TRUE) {
                                echo "<div class='alert alert-success'>Número descompuesto correctamente.</div>";
                                echo "<div class='card number-card'>";
                                echo "<div class='card-header'>Descomposición del Número</div>";
                                echo "<div class='card-body'>";
                                echo "<ul class='list-group'>";
                                foreach ($digitos as $index => $digito) {
                                    echo "<li class='list-group-item'>Dígito " . ($index + 1) . ": $digito</li>";
                                }
                                echo "</ul>";
                                echo "</div>";
                                echo "</div>";
                            } else {
                                echo "<div class='alert alert-danger'>Error al registrar el número en la base de datos: " . $conn->error . "</div>";
                            }
                        } else {
                            echo "<div class='alert alert-danger'>Error: El número debe tener exactamente 5 cifras.</div>";
                        }
                    }

                    $conn->close();
                ?>
                <form method="post" action="" class="mt-3">
                    <div class="form-group">
                        <label for="numero">Ingrese un número de 5 cifras:</label>
                        <input type="text" class="form-control" id="numero" name="numero" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Descomponer</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
