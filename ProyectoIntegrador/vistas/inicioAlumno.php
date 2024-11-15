<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['usuario']) || !is_array($_SESSION['usuario'])) {
    header("Location: ../index.php");
    exit();
}

// Asignar los datos del usuario a variables
$nombre = $_SESSION['usuario']['nombre'];
$matricula = $_SESSION['usuario']['matricula'];
$carrera = $_SESSION['usuario']['carrera'];
$semestre = $_SESSION['usuario']['semestre'];
$grupo = $_SESSION['usuario']['grupo'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiante</title>
    <link rel="stylesheet" href="../css/Estudiante.css">
    <link rel="shortcut icon" href="../img/icono.png">
</head>
<body>
    <div class="top-bar-superior"></div>
    <div class="top-bar-arriba">
        <div class="buttons-left">
            <button onclick="location.reload()">
                <img src="../img/Home.png" alt="Inicio"> Inicio
            </button>
            <button onclick="toggleButtons()">
                <img src="../img/Agregar.png" alt="Solicitud"> Solicitud
            </button>
        </div>
        <div class="buttons-right">
            <button><img src="../img/Notificaciones.png" alt="Notificaciones"></button>
            <button>
                <a href="../controlador/cerrarSesion.php" style="text-decoration: none; color: inherit;">
                    <img src="../img/Cerrar Sesion.png" alt="Cerrar Sesión"> Cerrar Sesión
                </a>
            </button>
        </div>
    </div>

    <header>
        <div class="logos">
            <img src="../img/tecnm_logo.png" class="left-logo">
            <img src="../img/itsoeh.png" class="center-logo">
            <img src="../img/HidalgoLogo.png" class="right-logo">
        </div>
    </header>

    <div class="title">¡Bienvenido!</div>

    <div class="user-info-container">
        <img src="<?php echo $_SESSION['usuario']['foto'] ?? '../img/Usuario2.png'; ?>" alt="Foto del usuario" class="user-photo">
        <div class="user-info">
            <p><strong>Nombre:</strong> <?php echo htmlspecialchars($nombre); ?></p>
            <p><strong>Matrícula:</strong> <?php echo htmlspecialchars($matricula); ?></p>
            <p><strong>Carrera:</strong> <?php echo htmlspecialchars($carrera); ?></p>
            <p><strong>Semestre:</strong> <?php echo htmlspecialchars($semestre); ?></p>
            <p><strong>Grupo:</strong> <?php echo htmlspecialchars($grupo); ?></p>
        </div>
    </div>

    <!-- Botones adicionales -->
    <div class="buttons-container" id="extraButtons">
        <button class="action-btn" onclick="toggleAnexos()">Anexos Requeridos</button>
        <button class="action-btn" onclick="toggleSolicitud()">Solicitud</button>
        <button class="action-btn" onclick="toggleSolicitudesEnviadas()">Solicitudes Enviadas</button>
    </div>

    <!-- Contenedor de solicitudes -->
    <div id="solicitudContainer" class="solicitud-container">
        <button class="close-btn" onclick="toggleSolicitud()">✖</button>
        <div class="solicitud-title">Subir Anexos</div>

        <form action="guardar_solicitud.php" method="POST" enctype="multipart/form-data">
            <div class="upload-field">
                <label for="archivo_pdf1">Archivo 1:</label>
                <input type="file" id="archivo_pdf1" name="archivo_pdf1" accept=".pdf">
            </div>
            <div class="upload-field">
                <label for="archivo_pdf2">Archivo 2:</label>
                <input type="file" id="archivo_pdf2" name="archivo_pdf2" accept=".pdf">
            </div>
            <div class="upload-field">
                <label for="archivo_pdf3">Archivo 3:</label>
                <input type="file" id="archivo_pdf3" name="archivo_pdf3" accept=".pdf">
            </div>
            <button type="submit" class="submit-btn">Enviar Solicitud</button>
        </form>
    </div>

    <!-- Tabla de solicitudes enviadas -->
    <div id="solicitudesEnviadasContainer" class="solicitud-container">
        <button class="close-btn" onclick="toggleSolicitudesEnviadas()">✖</button>
        <div class="solicitud-title">Solicitudes Enviadas</div>
        <table class="tabla-solicitudes">
            <thead>
                <tr>
                    <th>Solicitud</th>
                    <th>Visualizar</th>
                    <th>Estado</th>
                    <th>Fecha</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td><a href="#">Ver</a></td>
                    <td>En proceso</td>
                    <td>2024-11-04</td>
                </tr>
            </tbody>
        </table>
    </div>

    <script src="../js/Alumno.js"></script>
</body>
</html>

