<!DOCTYPE html>
<html lang="es-PE">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Agregar Libro</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center" style="background-color: blueviolet; color:aliceblue; border: radius 10px;">AGREGAR LIBRO</h1>
        <br>

        <form action="../Controlador/Agregar.php" method="post">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre del Producto</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="mb-3">
                <label for="precio" class="form-label">Precio</label>
                <input type="text" class="form-control" name="precio">
            </div>
            <div class="mb-3">
                <label for="cantidad" class="form-label">Cantidad</label>
                <input type="text" class="form-control" name="cantidad">
            </div>
            <button type="submit" class="btn btn-primary">Agregar</button>
            <a href="../Plantillas/index.php" class="btn btn-dark">Regresar</a>
        </form>
    </div>
    
</body>
</html>