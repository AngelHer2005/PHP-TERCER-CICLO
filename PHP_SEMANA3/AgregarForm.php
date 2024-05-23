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

        <form action="agregar.php" method="post">
            <div class="mb-3">
                <label for="nombrelibro" class="form-label">Nombre del Libro</label>
                <input type="text" class="form-control" name="nombrelibro">
            </div>
            <div class="mb-3">
                <label for="autor" class="form-label">Autor</label>
                <input type="text" class="form-control" name="autor">
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea class="form-control" name="descripcion" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Agregar</button>
            <a href="index.php" class="btn btn-dark">Regresar</a>
        </form>
    </div>
    
</body>
</html>
