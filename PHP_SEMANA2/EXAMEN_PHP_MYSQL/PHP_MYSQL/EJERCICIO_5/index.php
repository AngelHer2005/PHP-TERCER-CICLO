<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descomponer Número de 5 Cifras</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="bg-light">

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-info text-white">
                    <h2 class="text-center">Descomponer Número de 5 Cifras</h2>
                </div>
                <div class="card-body">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        <div class="form-group">
                            <label for="numero">Ingrese un número de 5 cifras:</label>
                            <input type="text" name="numero" id="numero" class="form-control" required pattern="\d{5}">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Descomponer</button>
                    </form>
                    <?php
                    include "../Conexion/conexion.php";
                    $conn = crear_conexion("localhost", "root", "1234", "EJERCICIO4"); 

                    function validarNumero($numero) {
                        return strlen($numero) === 5 && ctype_digit($numero);
                    }

                    function descomponerNumero($numero) {
                        return str_split($numero);
                    }

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $numero = $_POST["numero"];

                        if (!validarNumero($numero)) {
                            echo "<p class='text-danger'>Error: Debe ingresar un número de 5 cifras.</p>";
                        } else {

                            // Consulta para verificar si el número está en la base de datos
                            $sql = "SELECT * FROM numeros WHERE numero = '$numero'";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();
                                $descomposicion = $row["descomposicion"];
                                echo "<p class='text-success'>Dígitos del número (almacenados en la base de datos): $descomposicion</p>";
                            } else {
                                $digitos = descomponerNumero($numero);
                                $descomposicion = implode(" ", $digitos);
                                echo "<p class='text-success'>Dígitos del número (descomposición): $descomposicion</p>";
                                
                                $sql_insert = "INSERT INTO numeros (numero, descomposicion) VALUES ('$numero', '$descomposicion')";
                                if ($conn->query($sql_insert) !== TRUE) {
                                    echo "<p class='text-danger'>Error al insertar el número en la base de datos: " . $conn->error . "</p>";
                                }
                            }

                            $conn->close();
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
