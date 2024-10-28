
<?php
session_start();

// Verificar si $_SESSION['usuario'] es un array y tiene los datos necesarios
if (isset($_SESSION['usuario']) && is_array($_SESSION['usuario'])) {
    $nombre = $_SESSION['usuario']['nombre'] ?? 'No disponible';
    $matricula = $_SESSION['usuario']['matricula'] ?? 'No disponible';
    $carrera = $_SESSION['usuario']['carrera'] ?? 'No disponible';
    $semestre = $_SESSION['usuario']['semestre'] ?? 'No disponible';
    $grupo = $_SESSION['usuario']['grupo'] ?? 'No disponible';
} else {
    echo "<p>Error: La información del usuario no está disponible. Por favor, inicia sesión nuevamente.</p>";
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Estudiante</title>
        <link rel="shortcut icon" href="../img/icono.png">
        <style>
            body {
                margin: 0;
                padding: 0;
                display: flex;
                flex-direction: column;
                min-height: 100vh;
                font-family: Arial, sans-serif;
                overflow-x: hidden;
            }
            .top-bar-arriba {
                width: 100%;
                height: 42px;
                background-color: #fff;
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 0 40px;
                border-bottom: 1.9px solid #020203;
            }
            .top-bar-superior {
                width: 100%;
                height: 15px;
                background-color: #17369f;
            }
            .buttons-left {
                display: flex;
                gap: 15px;
                margin-left: -20px;
            }
            .buttons-right {
                display: flex;
                gap: 15px;
                margin-right: 55px;
            }
            .top-bar-arriba button {
                background-color: #fff;
                border: none;
                color: #020203;
                padding: 10px 15px;
                font-size: 14px;
                font-weight: bold;
                border-radius: 5px;
                cursor: pointer;
                transition: background-color 0.3s ease;
                display: flex;
                align-items: center;
                gap: 5px; /* Espacio entre imagen y texto */
            }
            .top-bar-arriba button img {
                width: 20px; /* Ajusta el tamaño de la imagen dentro del botón */
                height: 20px;
            }
            .top-bar-arriba button:hover {
                background-color: #ccc;
                color: #17369f;
            }
            .image-container {
                display: flex;
                justify-content: space-around;
                align-items: center;
                margin-top: 5px;
                width: 100%;
            }
            #tec {
                max-width: 150px;
                width: auto;
                height: auto;
                margin: -30px;
            }
            #itsoeh {
                max-width: 160px;
                width: auto;
                height: auto;
                margin: 0;
            }
            #hidalgo {
                max-width: 70px;
                width: auto;
                height: auto;
                margin: 0;
            }
            .title {
                text-align: center;
                font-size: 42px;
                font-weight: bold;
                color: #bcb6b6;
                margin: 5px 0 10px;
            }
            .user-info-container {
                display: flex;
                justify-content: center;
                align-items: center;
                margin-bottom: 20px;
                gap: 20px;
            }
            .info-section {
                display: flex;
                justify-content: center;
                align-items: center;
                width: 100%;
                margin: 20px 0;
            }

            .user-info {
                font-size: 18px;
                color: #555;
            }

            .user-info p {
                margin: 5px 0;
            }

            .buttons {
                display: flex;
                justify-content: center;
                margin-top: 20px;
            }

            .button {
                background-color: #e0d9f2;
                border: none;
                border-radius: 15px;
                color: #5d3ba4;
                padding: 15px 30px;
                margin: 0 20px;
                text-align: center;
                font-size: 18px;
                cursor: pointer;
                display: inline-block;
            }

            .button:hover {
                background-color: #d2c4ed;
            }

            .anexos-section,
            .solicitud-section {
                display: none;
                margin-top: 20px;
                background-color: #f0f0f0;
                border-radius: 10px;
                padding: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            .anexo {
                border: 1px solid #ccc;
                padding: 10px;
                margin: 10px;
                display: inline-block;
                text-align: center;
                width: 20%;
                background-color: #fff;
                border-radius: 10px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            }

            .anexo img {
                width: 50px;
                height: 50px;
                margin-top: 10px;
            }

            footer {
                background-color: #003366;
                color: white;
                padding: 10px;
                text-align: center;
                width: 100%;
                font-size: 14px;
                position: fixed;
                bottom: 0;
            }

            .back-button {
                background-color: #5d3ba4;
                color: white;
                padding: 10px 20px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                margin-top: 10px;
            }

            .upload-container {
                position: relative;
                display: inline-block;
                cursor: pointer;
            }

            .upload-container img {
                width: 50px;
                height: 50px;
            }

            .upload-input {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                opacity: 0;
                cursor: pointer;
            }

            .file-name {
                margin-top: 10px;
                font-size: 16px;
                color: #333;
            }
            
        </style>
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
                <button>
                    <img src="../img/Agregar.png" alt="Icono Solicitud">
                    Solicitud
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
            <!-- Información del usuario -->
            <div class="user-info-container">
            <img src="../img/Usuario2.png" alt="Foto del usuario"> <!-- Cambia la URL de la imagen aquí -->
            <div class="user-info">
                    <?php
                    if (isset($_SESSION['usuario'])) {
                        $nombre = $_SESSION['usuario']['nombre'];
                        $matricula = $_SESSION['usuario']['matricula'];
                        $carrera = $_SESSION['usuario']['carrera'];
                        $semestre = $_SESSION['usuario']['semestre'];
                        $grupo = $_SESSION['usuario']['grupo'];

                        echo "<p><strong>Nombre:</strong> $nombre</p>";
                        echo "<p><strong>Matrícula:</strong> $matricula</p>";
                        echo "<p><strong>Carrera:</strong> $carrera</p>";
                        echo "<p><strong>Grupo y semestre:</strong> $semestre \"$grupo\"</p>";
                    } else {
                        echo "<p>Error al cargar la información del usuario.</p>";
                    }
                    ?>
                </div>
            </div>

            <!-- Botones debajo de la información -->
            <div class="buttons">
                <button class="button" id="anexosBtn">Anexos Requeridos</button>
                <button class="button" id="solicitudBtn">Solicitud</button>
            </div>

            <!-- Sección de anexos -->
            <div id="anexosSection" class="anexos-section">
                <div class="anexo">
                    <h3>Anexo 1</h3>
                    <p>Análisis académico.</p>
                    <a href="../docs/AnalisisProp.doc" download="Anexo1.docx">
                        <img src="../img/word-icon.png" alt="Descargar Análisis académico.">
                    </a>
                </div>
                <div class="anexo">
                    <h3>Anexo 2</h3>
                    <p>Solicitud de estudiante para el análisis del comité académico.</p>
                    <a href="../docs/SolicitudEstudiante.docx" download="Anexo2.docx">
                        <img src="../img/word-icon.png" alt="Descargar Solicitud de estudiante.">
                    </a>
                </div>
                <div class="anexo">
                    <h3>Anexo 3</h3>
                    <p>Solicitud de análisis de propuesta para el comité académico.</p>
                    <a href="../docs/AnalisisAcademico.docx" download="Anexo3.docx">
                        <img src="../img/word-icon.png" alt="Descargar Solicitud de análisis de propuesta.">
                    </a>
                </div>
                <br>
                <button id="backBtn" class="back-button">Regresar</button>
            </div>

            <!-- Sección de solicitud -->
            <div id="solicitudSection" class="solicitud-section">
                <h2>Subir Anexos</h2>
                <form>
                    <label>Subir Anexo1:</label>
                    <div class="upload-container">
                        <img src="../img/doc.png" alt="Subir Archivo">
                        <input type="file" class="upload-input" id="fileInput" onchange="mostrarNombreArchivo()">
                    </div>
                    <div id="fileName" class="file-name">Archivo no seleccionado</div>
                </form>
                <br>
                <button id="backBtnSolicitud" class="back-button">Regresar</button>
            </div>
        </div>

        <!-- Pie de página -->
        <footer>
            © 2024 Comité Académico
        </footer>
        
        <script>
            // Mostrar y ocultar la sección de anexos
            document.getElementById('anexosBtn').addEventListener('click', function() {
                var anexosSection = document.getElementById('anexosSection');
                var solicitudSection = document.getElementById('solicitudSection');
                solicitudSection.style.display = 'none'; // Ocultar la otra sección si está visible
                anexosSection.style.display = anexosSection.style.display === 'none' || anexosSection.style.display === '' ? 'block' : 'none';
            });

            // Mostrar y ocultar la sección de solicitud
            document.getElementById('solicitudBtn').addEventListener('click', function() {
                var solicitudSection = document.getElementById('solicitudSection');
                var anexosSection = document.getElementById('anexosSection');
                anexosSection.style.display = 'none'; // Ocultar la otra sección si está visible
                solicitudSection.style.display = solicitudSection.style.display === 'none' || solicitudSection.style.display === '' ? 'block' : 'none';
            });

            // Ocultar las secciones cuando se presiona el botón "Regresar"
            document.getElementById('backBtn').addEventListener('click', function() {
                document.getElementById('anexosSection').style.display = 'none';
            });

            document.getElementById('backBtnSolicitud').addEventListener('click', function() {
                document.getElementById('solicitudSection').style.display = 'none';
            });

            // Mostrar el nombre del archivo seleccionado
            function mostrarNombreArchivo() {
                var fileInput = document.getElementById('fileInput');
                var fileName = document.getElementById('fileName');

                if (fileInput.files.length > 0) {
                    fileName.textContent = fileInput.files[0].name;
                } else {
                    fileName.textContent = 'Archivo no seleccionado';
                }
            }
        </script>
    </body>
</html>
