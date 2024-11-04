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
        <link rel="stylesheet" href="../css/inicioAlumno.css">
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
                <div class="user-icon">
                    <!-- Icono de usuario usando una imagen -->
                    <img src="../img/perfil.png" alt="Icono de usuario">
                </div>
                <div class="user-info">
                    <p><strong>Nombre:</strong> Juan Pérez</p>
                    <p><strong>Matrícula:</strong> 123456789</p>
                    <p><strong>Carrera:</strong> Ingeniería en Sistemas</p>
                    <p><strong>Grupo y semestre:</strong> 5 "A"</p>
                </div>
            </div>


            <!-- Botones debajo de la información -->
            <div class="buttons">
                <button class="button" id="anexosBtn">Anexos Requeridos</button>
                <button class="button" id="solicitudBtn">Solicitud</button>
            </div>

            <!-- Sección de anexos -->
            <div class="anexos-section" id="anexosSection">
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
                
                <!-- Botón de regresar centrado debajo de los anexos -->
                <div class="back-button-container">
                    <button id="backBtn" class="back-button">Regresar</button>
                </div>
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