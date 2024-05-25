<?php
include "../Conexion/connection.php";
$id = isset($_GET['id']) ? $_GET['id'] : null;

if ($id) {
    $query = $connection->prepare("SELECT * FROM producto WHERE id = ?");
    $query->execute([$id]);
    $producto = $query->fetch(PDO::FETCH_OBJ);

    if (!$producto) {
        echo "Producto no encontrado.";
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
    <title>Editar Producto</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center" style="background-color: blueviolet; color:aliceblue; border-radius: 10px;">EDITAR PRODUCTO</h1>
        <br>
        <form action="../Controlador/Editar.php" method="post">
            <input type="hidden" name="id" value="<?php echo $producto->id; ?>">
            <div class="mb-3">
                <label for="nombreproducto" class="form-label">Nombre del Producto</label>
                <input type="text" class="form-control" name="nombre" value="<?php echo htmlspecialchars($producto->nombre); ?>">
            </div>
            <div class="mb-3">
                <label for="autor" class="form-label">Precio</label>
                <input type="text" class="form-control" name="precio" value="<?php echo htmlspecialchars($producto->precio); ?>">
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Cantidad</label>
                <textarea class="form-control" name="cantidad" rows="3"><?php echo htmlspecialchars($producto->cantidad); ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Editar</button>
        </form>
    </div>
</body>
</html>