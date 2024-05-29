<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJVpack</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>        
    <header>
        <a href="#" class="logo">AJVpack</a>
        <nav>
            <ul>
                <li><a href="#Inicio">INICIO</a></li>
                <li><a href="#Nosotros">NOSOTROS</a></li>
                <li><a href="#Productos">PRODUCTOS</a></li>
                <li><a href="#Contacto">CONTACTO</a></li>
                <li><a href="carrito.php">CARRITO</a></li>
                <li><a href="LOGIN.php">LOGOUT</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="Inicio" id="Inicio">
            <img src="../mochilas/logo.jpg" alt="LOGO">
            <div class="Bienvenido">
                <span>BIENVENIDO A</span>
                <span>AJVpack</span>
                <p>Encuentra las mejores mochilas al mejor precio. ¡Compra ahora!</p>
                <a href="#Productos" style="font-weight:bold;" class="btn btn-danger btn-lg">VER PRODUCTOS</a>
            </div>
        </div>
        <div class="Nosotros" id="Nosotros">
            <span>SOBRE NOSOTROS</span>
            <p>En nuestra empresa, AJVpack, ofrecemos una amplia variedad de mochilas de alta calidad a precios competitivos. Nuestro objetivo es satisfacer las necesidades de nuestros clientes con productos duraderos y estilosos.</p>
        </div>
        
        <div class="Productos" id="Productos">
            <p class="title-p">NUESTROS PRODUCTOS</p>
            <div class="row">
            <?php
                include "../BASE DE DATOS/conexion.php";

                $query = $connection->query("SELECT * FROM producto");
                $fila = $query->fetchAll(PDO::FETCH_ASSOC);

                foreach ($fila as $row) {
                    echo '<div class="col-md-3">';
                    echo '<div class="card">';
                    echo '<img src="../mochilas/' . $row["id"] . '.png" class="card-img-top" alt="Mochila' . $row["id"] . '">';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">' . $row["nombre"] . '</h5>';
                    echo '<p class="card-text">S/. ' . $row["precio"] . '</p>';
                    echo '<form action="../CONTROLADOR/carritoA.php" method="post">';
                    echo '<input type="hidden" name="producto_id" value="' . $row["id"] . '">';
                    echo '<input type="hidden" name="producto_nombre" value="' . $row["nombre"] . '">';
                    echo '<input type="hidden" name="producto_precio" value="' . $row["precio"] . '">';
                    echo '<button type="submit" class="btn btn-primary">Comprar</button>';
                    echo '</form>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>

        
        <div class="Contacto" id="Contacto">
            <p class="title-p">CONTACTO</p>
            <div class="contact-info">
                <h2>CONTÁCTANOS</h2>
                <p>Av. Los Álamos 183, Chilca 15870,</p>
                <p>Chilca, Peru</p>
                <p>997 150 226</p>
                <p><a href="mailto:angelhernanpatricioarroyo@gmail.com">angelhernanpatricioarroyo@gmail.com</a></p>
                <p>Horario de atención:</p>
                <p>HORARIOS DE ATENCIÓN AL PÚBLICO:</p>
                <p>De 8:30 am a 5:30 pm</p>
                <div class="social-icons">
                    <a href="#"><img src="../IMÁGENES/wsp.png" alt="Facebook"></a>
                    <a href="#"><img src="../IMÁGENES/gmail.png" alt="Gmail"></a>
                    <a href="#"><img src="../IMÁGENES/github.png" alt="GitHub"></a>
                </div>
            </div>
            <div class="contact-form">
                <div class="text-center"><h1>FORMULARIO</h1></div>
                <form action="../CONTROLADOR/formulario.php" method="post">
                    <div class="mb-3">
                        <label for="nombre">Nombre:&ensp;</label>
                        <input type="text" id="nombre" name="nombre" required>
                        <label for="apellido">&ensp;Apellido:&ensp;</label>
                        <input type="text" id="apellido" name="apellido" required>
                    </div>
                    <div class="mb-3">
                        <label for="email">Email:&ensp;</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="mensaje">Mensaje:&ensp;</label>
                        <textarea id="mensaje" name="mensaje" class="form-control h-100" rows="4" required></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success btn-lg">ENVIAR</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    
    <script type="text/javascript">
        window.addEventListener("scroll", function(){
            var header = document.querySelector("header");
            header.classList.toggle("abajo",window.scrollY>0);
        })
    </script>
</body>
</html>
