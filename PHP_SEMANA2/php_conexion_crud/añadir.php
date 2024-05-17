<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Cliente</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <form class="col-4 p-3 m-auto" method="POST">
        <h5 class="text-center alert alert-secondary">Crear Usuario</h5>
        <?php
            include "Controlador/c_añadir.php";
        ?>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Ingrese nombre:</label>
            <input type="text" class="form-control" name="NOMBRE">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Ingrese email:</label>
            <input type="text" class="form-control" name="EMAIL">
        </div>
        <div class="mb-1">
            <label for="exampleInputEmail1" class="form-label">Ingrese teléfono</label>
            <input type="text" class="form-control" name="TELEFONO">
        </div>
        <div class="mb-1">
            <label for="exampleInputEmail1" class="form-label">Ingrese dirección</label>
            <input type="text" class="form-control" name="DIRECCION">
        </div>
        <button type="submit" class="btn btn-primary" name="btnañadir" value = "ok">Añadir Cliente</button>
    </form>
</body>
</html>