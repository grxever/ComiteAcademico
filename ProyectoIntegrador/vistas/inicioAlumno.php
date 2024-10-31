<?php
session_start();
include("../modelo/conexion.php");
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Comité Académico</title>
        <link rel="shortcut icon" href="../img/icono.png">
        <style>
            body, html {
                margin: 0;
                padding: 0;
                width: 100%;
                height: 100%;
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
            }

            .nav-bar {
                background-color: #003366;
                color: white;
                display: flex;
                justify-content: space-between;
                padding: 10px 30px;
                font-size: 18px;
            }

            .nav-bar a {
                color: white;
                text-decoration: none;
                margin: 0 15px;
            }

            .nav-bar a:hover {
                text-decoration: underline;
            }

            .container {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
                background-color: #f4f4f4;
            }

            header .logos {
                display: flex;
                justify-content: space-between;
                align-items: center;
                width: 60%;
                margin: 20px 0;
            }

            header .left-logo,
            header .right-logo {
                width: 150px;
            }

            header .center-logo {
                width: 200px;
            }

            h1 {
                font-size: 36px;
                color: #555;
                text-align: center;
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
                align-items: center;
                margin-top: 20px;
                background-color: #f0f0f0;
                border-radius: 10px;
                padding: 150px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            .anexo {
                border: 1px solid #ccc;
                padding: 20px;
                margin: 10px;
                display: inline-block;
                align-items: center;
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
                display: flex;
                align-items: center;
                gap: 10px;
                cursor: pointer;
                position: relative;
            }

            .upload-input {
                opacity: 0;
                width: 50px;
                height: 50px;
                position: absolute;
                left: 0;
                top: 0;
                cursor: pointer;
            }

            .file-name {
                font-size: 16px;
                color: #333;
            }
            
            label {
                display: inline-block;
                margin-right: 10px;
                font-size: 16px;
            }
            
            .file-info {
                display: flex;
                align-items: center;
                gap: 10px;
            }

        </style>
    </head>
    <body>
        <!-- Menú de navegación -->
        <div class="nav-bar">
            <div class="left">
                <a href="#">Inicio</a>
                <a href="#">Solicitud</a>
            </div>
            <div class="right">
                <a href="cerrarSesion.php">Cerrar Sesión</a>
            </div>
        </div>

        <!-- Contenedor principal -->
        <div class="container">
            <!-- Encabezado con logos -->
            <header>
                <div class="logos">
                    <img src="../img/tecnm_logo.png" alt="Logo TecNM" class="left-logo">
                    <img src="../img/itsoeh.png" alt="Logo ITSOEH" class="center-logo">
                    <img src="../img/HidalgoLogo.png" alt="Logo Hidalgo" class="right-logo">
                </div>
            </header>

            <!-- Mensaje de bienvenida -->
            <h1>¡Bienvenido!</h1>

            <!-- Información del usuario -->
            <div class="info-section">
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
                        <div class="file-info">
                            <img src="../img/subrirdoc.png" alt="Subir Archivo">
                            <div id="fileName1" class="file-name">Archivo no seleccionado</div>
                        </div>
                        <input type="file" class="upload-input" id="fileInput1" onchange="mostrarNombreArchivo('fileInput1', 'fileName1')">
                    </div>
                    
                    <label>Subir Anexo2:</label>
                    <div class="upload-container">
                        <div class="file-info">
                            <img src="../img/subrirdoc.png" alt="Subir Archivo">
                            <div id="fileName2" class="file-name">Archivo no seleccionado</div>
                        </div>
                        <input type="file" class="upload-input" id="fileInput2" onchange="mostrarNombreArchivo('fileInput2', 'fileName2')">
                    </div>
                    
                    <label>Subir Anexo3:</label>
                    <div class="upload-container">
                        <div class="file-info">
                            <img src="../img/subrirdoc.png" alt="Subir Archivo">
                            <div id="fileName3" class="file-name">Archivo no seleccionado</div>
                        </div>
                        <input type="file" class="upload-input" id="fileInput3" onchange="mostrarNombreArchivo('fileInput3', 'fileName3')">
                    </div>
                </form>
                <br>
                <button id="backBtnSolicitud" class="back-button">Enviar</button>
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
                solicitudSection.style.display = 'none';
                anexosSection.style.display = anexosSection.style.display === 'none' || anexosSection.style.display === '' ? 'block' : 'none';
            });

            // Mostrar y ocultar la sección de solicitud
            document.getElementById('solicitudBtn').addEventListener('click', function() {
                var solicitudSection = document.getElementById('solicitudSection');
                var anexosSection = document.getElementById('anexosSection');
                anexosSection.style.display = 'none';
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
            function mostrarNombreArchivo(inputId, fileNameId) {
                var fileInput = document.getElementById(inputId);
                var fileName = document.getElementById(fileNameId);

                if (fileInput.files.length > 0) {
                    fileName.textContent = fileInput.files[0].name;
                } else {
                    fileName.textContent = 'Archivo no seleccionado';
                }
            }
        </script>
    </body>
</html>