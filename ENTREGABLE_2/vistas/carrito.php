<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJVpack</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        nav ul li a{
            color: white;
        }
    </style>
</head>
<body class="cuerpo">        
    <header>
        <a href="#" class="logo">AJVpack</a>
        <nav>
            <ul>
                <li><a href="HOME.php#Inicio">INICIO</a></li>
                <li><a href="HOME.php#Nosotros">NOSOTROS</a></li>
                <li><a href="HOME.php#Productos">PRODUCTOS</a></li>
                <li><a href="HOME.php#Contacto">CONTACTO</a></li>
                <li><a href="LOGIN.php">LOGOUT</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="carrito">
            <h1 class="text-center mb-4">Carrito de Compras</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Total</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    include "../BASE DE DATOS/conexion.php";
                    $query = $connection->query("SELECT * FROM carrito");
                    $fila = $query->fetchAll(PDO::FETCH_OBJ);

                    foreach ($fila as $row) {
                        echo "<tr>";
                        echo "<td>{$row->producto}</td>";
                        echo "<td>{$row->precio}</td>";
                        echo "<td>{$row->cantidad}</td>";
                        echo "<td>{$row->total}</td>";
                        echo "<td>";
                        echo "<form action='../CONTROLADOR/Eliminar.php' method='POST' style='display: inline;'>";
                        echo "<input type='hidden' name='produc' value='$row->producto'>";
                        echo "<button type='submit' name='eliminar_libro' class='btn btn-danger'>Eliminar</button>";
                        echo "</form>";
                        echo "</td>";
                        echo "</tr>";
                    }
                ?>
                </tbody>
            </table>
            <div>
                <?php
                include "../BASE DE DATOS/conexion.php";
                    $sql = $connection->query("SELECT SUM(precio) AS total FROM carrito");
                    $total = $sql->fetch(PDO::FETCH_ASSOC)['total'];
                    echo "<h5 class='text-center'>TOTAL A PAGAR: <span id='total-amount'>S/. $total</span></h5>";
                ?>
            </div>
            <div class="text-center">
                <a href="/vistas/ventas.php" class="btn btn-primary">Pagar</a>
            </div>
    </div>
    </main>
    <script src="carrito.js"></script>
</body>
</html>
