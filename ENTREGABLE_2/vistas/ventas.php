<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proceso de Pago</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
</head>
<body style="background-color:bisque;">
    <div class="container mt-5">
        <h1 class="text-center mb-4">Proceso de Pago</h1>
        <form action="../CONTROLADOR/procesar_pago.php" method="POST" class="p-4 rounded bg-light shadow">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" id="nombre" name="nombre" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="tarjeta" class="form-label">Número de Tarjeta:</label>
                <input type="text" id="tarjeta" name="tarjeta" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="fecha_vencimiento" class="form-label">Fecha de Vencimiento:</label>
                <input type="text" id="fecha_vencimiento" name="fecha_vencimiento" class="form-control" placeholder="YYYY-MM" required>
            </div>
            <div>
                <?php
                include "../BASE DE DATOS/conexion.php";
                    $sql = $connection->query("SELECT SUM(precio) AS total FROM carrito");
                    $total = $sql->fetch(PDO::FETCH_ASSOC)['total'];
                    echo "<h5 class='text-center'>TOTAL A PAGAR: <span id='total-amount'>S/. $total</span></h5>";
                ?>
            </div>
            <button type="submit" class="btn btn-primary w-100">Pagar <??></button>
        </form>
    </div>
</body>
</html>
