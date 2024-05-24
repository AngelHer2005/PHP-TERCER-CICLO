<?php
include "../Conexion/connection.php";
$id = isset($_GET['id']) ? $_GET['id'] : null;

if ($id) {
    $query = $connection->prepare("SELECT * FROM libro WHERE id = ?");
    $query->execute([$id]);
    $libro = $query->fetch(PDO::FETCH_OBJ);

    if (!$libro) {
        echo "Libro no encontrado.";
        exit;
    }
} else {
    echo "ID no especificado.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="es-PE">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Editar Libro</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center" style="background-color: blueviolet; color:aliceblue; border-radius: 10px;">EDITAR LIBRO</h1>
        <br>
        <form action="../Controlador/Editar.php" method="post">
            <input type="hidden" name="id" value="<?php echo $libro->id; ?>">
            <div class="mb-3">
                <label for="nombrelibro" class="form-label">Nombre del Libro</label>
                <input type="text" class="form-control" name="nombrelibro" value="<?php echo htmlspecialchars($libro->NombreLibro); ?>">
            </div>
            <div class="mb-3">
                <label for="autor" class="form-label">Autor</label>
                <input type="text" class="form-control" name="autor" value="<?php echo htmlspecialchars($libro->Autor); ?>">
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea class="form-control" name="descripcion" rows="3"><?php echo htmlspecialchars($libro->Descripcion); ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Editar</button>
        </form>
    </div>
</body>
</html>
