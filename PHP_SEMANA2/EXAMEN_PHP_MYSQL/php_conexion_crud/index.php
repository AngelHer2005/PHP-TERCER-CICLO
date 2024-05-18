<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi tienda</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <script>
        function eliminar(){
            return confirm("¿Quieres eliminar este Cliente?")
        }
    </script>
    <div class="container my-5">
        <h2>Lista de Clientes</h2>
        <?php
            include "Conexion/conexion.php";
            include "Controlador/c_eliminar.php";
        ?>
        <a class='btn btn-primary' href='añadir.php' name='btnañadir'>Nuevo Cliente</a>
        <br>
        
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Teléfono</th>
                    <th>Dirección</th>
                    <th>Fecha de Creación</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "Conexion/conexion.php";
                // Realizar consulta
                $result = $connection->query("SELECT * FROM cliente");

                // Verificar si la consulta fue exitosa
                if (!$result) {
                    die("Consulta inválida: " . $connection->error);
                }

                // Iterar sobre los resultados
                while ($row = $result->fetch_assoc()) {
                    $id = htmlspecialchars($row['ID']);
                    $nombre = htmlspecialchars($row['NOMBRE']);
                    $email = htmlspecialchars($row['EMAIL']);
                    $telefono = htmlspecialchars($row['TELEFONO']);
                    $direccion = htmlspecialchars($row['DIRECCION']);
                    $fechacreacion = htmlspecialchars($row['FECHACREACION']);
                    ?>
                    <tr>
                        <td><?= $id; ?></td>
                        <td><?= $nombre; ?></td>
                        <td><?= $email; ?></td>
                        <td><?= $telefono; ?></td>
                        <td><?= $direccion; ?></td>
                        <td><?= $fechacreacion; ?></td>
                        <td>
                            <a class='btn btn-primary btn-sm' href='editar.php?id=<?= $id; ?>' name="btnEditar">Editar</a>
                            <a onclick="return eliminar()" class='btn btn-danger btn-sm' href='index.php?id=<?= $id; ?>' name='btneliminar' value="ok">Eliminar</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
