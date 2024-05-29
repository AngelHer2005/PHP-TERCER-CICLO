<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
</head>
<body class="login">
    <h1 class="register">REGÍSTRATE</h1>
    <img src="../IMÁGENES/icon.png" alt="icon">
    <div class="loginF">
        <form action="../CONTROLADOR/registroC.php" method="POST">
            <div class="mb-3">
                <label for="usuario" class="form-label">USUARIO:</label>
                <input type="text" name="usuario" class="form-control">
            </div>
            <div class="mb-3">
                <label for="contraseña" class="form-label">CONTRASEÑA:</label>
                <input type="password" name="contraseña" class="form-control">
            </div>
            <button class="btn btn-success btn-lg w-100 mb-2" type="submit">REGISTRARSE</button>
            <a href="REGISTRO.php" class="btn btn-primary btn-lg w-100">LOGEARSE</a>
        </form>
    </div>
</body>
</html>
