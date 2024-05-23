<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Libro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1 class="text-center" style="background-color: blue; color: aliceblue; border-radius: 20px;">EDITAR LIBRO</h1>
</div>

<div class="container">
    <?php
    include "connection.php";

    if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = $conexion->prepare("SELECT * FROM LIBRO WHERE id = :id");
        $sql->bindParam(':id', $id);
        $sql->execute();
        $libro = $sql->fetch(PDO::FETCH_OBJ);

        if ($libro) {
            ?>
            <form action="editar.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="mb-3">
                    <label for="nombrelibro" class="form-label">Nombre del Libro</label>
                    <input type="text" class="form-control" id="nombrelibro" name="nombrelibro" value="<?php echo $libro->Nombrelibro; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="autor" class="form-label">Autor</label>
                    <input type="text" class="form-control" id="autor" name="autor" value="<?php echo $libro->Autor; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required><?php echo $libro->Descripcion; ?></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </form>
            <?php
        } else {
            echo "<div class='alert alert-danger' role='alert'>Libro no encontrado.</div>";
        }
    } else {
        echo "<div class='alert alert-danger' role='alert'>ID de libro no proporcionado.</div>";
    }
    ?>
    <a href="index.php" class="btn btn-secondary mt-3">Cancelar</a>
</div>
</body>
</html>