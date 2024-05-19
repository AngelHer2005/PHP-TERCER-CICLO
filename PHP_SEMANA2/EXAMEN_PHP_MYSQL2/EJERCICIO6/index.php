<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesamiento de Texto</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h2 class="text-center">Procesamiento de Texto</h2>
            </div>
            <div class="card-body">
                <?php
                    include "../Conexion/conexion.php";
                    $conn = crear_conexion("localhost", "root", "", "EJERCICIO6");

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $texto = $_POST["texto"];
                        $opcion = $_POST["opcion"];
                        switch ($opcion) {
                            case 1:
                                $textoInvertido = strrev($texto);
                                echo "<div class='alert alert-info'>Texto invertido: $textoInvertido</div>";
                                break;
                            case 2:
                                $textoReemplazado = str_replace($texto, "senati", $texto);
                                echo "<div class='alert alert-info'>Texto reemplazado: $textoReemplazado</div>";
                                break;
                            case 3:
                                $textoMayuscula = strtoupper($texto);
                                echo "<div class='alert alert-info'>Texto en mayúscula: $textoMayuscula</div>";
                                break;
                            case 4:
                                $textoMinuscula = strtolower($texto);
                                echo "<div class='alert alert-info'>Texto en minúscula: $textoMinuscula</div>";
                                break;
                            case 5:
                                $vocales = preg_match_all('/[aeiouáéíóú]/i', $texto, $matches);
                                echo "<div class='alert alert-info'>Número de vocales: $vocales</div>";
                                break;
                            default:
                                echo "<div class='alert alert-danger'>Opción no válida.</div>";
                                break;
                        }
                    }

                    $conn->close();
                ?>
                <form method="post" action="" class="mt-3">
                    <div class="form-group">
                        <label for="texto">Ingrese un texto:</label>
                        <input type="text" class="form-control" id="texto" name="texto" required>
                    </div>
                    <div class="form-group">
                        <label for="opcion">Seleccione una opción:</label>
                        <select class="form-control" id="opcion" name="opcion">
                            <option value="1">Texto que lea de derecha a izquierda</option>
                            <option value="2">Texto que sea reemplazado por la palabra "senati"</option>
                            <option value="3">Texto si ingresa minúscula deberá mostrarse mayúscula</option>
                            <option value="4">Texto si ingresa mayúsculas deberá mostrarse minúsculas</option>
                            <option value="5">Texto que visualice el número de vocales</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Procesar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
