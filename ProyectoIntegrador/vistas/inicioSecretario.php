<?php
session_start();
include("../modelo/conexion.php");

// Verifica si el usuario ha iniciado sesión
if (isset($_SESSION['usuario'])) {
    $nombre = $_SESSION['usuario']['nombre'];
    $carrera = $_SESSION['usuario']['carrera'];
} else {
    echo "<p>Error: No se encontró la información del usuario en la sesión.</p>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Secretario</title>
        <link rel="shortcut icon" href="../img/icono.png">
        <link rel="stylesheet" href="../css/InicioSecretario.css">
        
    </head>
    <body>
        <!-- Nueva barra azul superior -->
        <div class="top-bar-superior"></div>

        <!-- Barra blanca inferior con borde en la parte inferior -->
        <div class="top-bar-arriba">
            <!-- Botones alineados a la izquierda -->
            <div class="buttons-left">
                <button>
                    <img src="../img/Home.png" alt="Icono Inicio">
                    Inicio
                </button>
            </div>

            <!-- Botones alineados a la derecha -->
            <div class="buttons-right">
                <button>
                    <img src="../img/Notificaciones.png" alt="Icono Notificaciones">
                </button>
                <button>
                    <img src="../img/Cerrar Sesion.png" alt="Icono Cerrar Sesión">
                    Cerrar Sesión
                </button>
            </div>
        </div>

        <div class="image-container">
            <img id="tec" src="../img/tecnm_logo.png" alt="Logo TecNM">
            <img id="itsoeh" src="../img/itsoeh.png" alt="Logo Itsoeh">
            <img id="hidalgo" src="../img/HidalgoLogo.png" alt="Logo Hidalgo">
        </div>

        <div class="title">¡Bienvenido!</div>

        <div class="user-info-container">
            <img src="../img/Usuario2.png" alt="Foto del usuario"> <!-- Cambia la URL de la imagen aquí -->
            <div class="user-info">
                <p><strong>Nombre:</strong> <?php echo $nombre; ?></p>
                <p><strong>Carrera:</strong> <?php echo $carrera; ?></p>
            </div>
        </div>

        <div class="buttons-container">
            <button class="action-btn">Solicitudes Recientes</button>
            <button class="action-btn">Historial</button>
        </div>
    </body>
</html>

