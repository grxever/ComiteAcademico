<?php
// Define la ruta base del proyecto
define('BASE_PATH', __DIR__);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comité Académico</title>
    <link rel="stylesheet" href="css/Index.css">
    <link rel="shortcut icon" href="img/icono.png">
</head>
<body>
    <div class="header-bar"></div>
    <div class="container">
        <header>
            <div class="logos">
                <img src="img/tecnm_logo.png" alt="Logo TecNM" class="left-logo">
                <img src="img/itsoeh.png" alt="Logo ITSOEH" class="center-logo">
                <img src="img/HidalgoLogo.png" alt="Logo Hidalgo" class="right-logo">
            </div>
        </header>

        <main>
            <h1>Comité Académico</h1>
            <h2>Ingresa</h2>
            <div class="login-container">
                <div class="user-icon">&#128100;</div>
                <form name="loginForm" action="controlador/validarUsuario.php" method="post" onsubmit="validarFormulario(event)">
                    <label for="matricula">Matrícula</label>
                    <input type="text" id="matricula" name="matricula" placeholder="Matrícula">

                    <label for="nip">NIP</label>
                    <input type="password" id="nip" name="nip" placeholder="Ingrese su NIP">

                    <button type="submit">Entrar</button>
                </form>
               <a href="javascript:void(0);" onclick="showForgotNipModal()">¿Olvidaste tu NIP?</a>
            </div>
        </main>
        <footer>
            <p>
                Ingresa tu matrícula y pin (últimos 4 dígitos de tu matrícula), 
                aquí podrás: Realizar tu solicitud Académica para el comité académico,
                podrás visualizar tu seguimiento.
            </p>
        </footer>
    </div>
  
    <script src="/js/index.js"></script>
</body>
</html>

