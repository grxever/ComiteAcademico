<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/InicioAdministrador.css">
    <title>Administrador</title>
</head>
<body>
    <div class="top-bar-superior"></div>
    <div class="top-bar-arriba">
        <div class="buttons-left">
            <button onclick="window.location.href = 'index.php'">
                <img src="../img/Home.png" alt="Icono Inicio">
                Inicio
            </button>
        </div>
        <div class="buttons-right">
            <button onclick="window.location.href = 'notificaciones.php'">
                <img src="../img/Notificaciones.png" alt="Icono Notificaciones">
            </button>
            <button onclick="window.location.href = 'cerrar_sesion.php'">
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

    <div class="user-info-container">
        <img src="../img/Usuario2.png" alt="Foto del usuario">
        <div class="user-info">
            <p><strong>Nombre:</strong> Santuru Gojo</p>
        </div>
    </div>

    <div class="alta-container">
        <div class="alta-title">Dar de Alta</div>
        <div class="alta-buttons">
            <button onclick="window.location.href = 'FormAlumno.php'">
                <img src="../img/Alumno.png" alt="Icono Alumnos">
                Alumnos
            </button>
            <button onclick="window.location.href = 'FormJefeDiv.php'">
                <img src="../img/Jefe de Carrera.png" alt="Icono Jefe de Carrera">
                Jefe de Carrera
            </button>
            <button onclick="window.location.href = 'FormSecretario.php'">
                <img src="../img/Secretario.png" alt="Icono Secretario de Academia">
                Secretario de Academia
            </button>
        </div>
    </div>

    <?php
    // Código PHP adicional
    ?>
</body>
</html>
