<?php
    include "Conexion/conexion.php";
    $id = $_GET["id"];
    $sql = $connection->query("SELECT * FROM CLIENTE WHERE ID=$id")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <form class="col-4 p-3 m-auto" method="POST">
        <h5 class="text-center alert alert-secondary">Editar</h5>
        <input type="hidden" name="id" value="<?= $_GET["id"] ?>"> 
        <?php
            include "Controlador/c_editar.php";
            while($datos=$sql->fetch_object()){?>
                <div class="mb-1">
                    <label for="exampleInputEmail1" class="form-label">Ingrese nombre:</label>
                    <input type="text" class="form-control" name="NOMBRE" value="<?= $datos -> NOMBRE ?>">
                </div>
                <div class="mb-1">
                    <label for="exampleInputEmail1" class="form-label">Ingrese email:</label>
                    <input type="text" class="form-control" name="EMAIL" value="<?= $datos -> EMAIL ?>">
                </div>
                <div class="mb-1">
                    <label for="exampleInputEmail1" class="form-label">Ingrese teléfono</label>
                    <input type="text" class="form-control" name="TELEFONO" value="<?= $datos -> TELEFONO ?>">
                </div>
                <div class="mb-1">
                    <label for="exampleInputEmail1" class="form-label">Ingrese dirección</label>
                    <input type="text" class="form-control" name="DIRECCION" value="<?= $datos -> DIRECCION ?>">
                </div>
            <?php }
        ?>
        <button type="submit" class="btn btn-primary" name="btnregistro" value = "ok">Modificar Cliente</button>
        
    </form>
</body>
</html>