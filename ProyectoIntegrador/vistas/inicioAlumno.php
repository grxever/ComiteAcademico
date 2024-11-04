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
        <!-- Nueva barra azul superior -->
        <div class="top-bar-superior"></div>
        
        <!-- Barra blanca inferior con borde en la parte inferior -->
        <div class="top-bar-arriba">
            <div class="buttons-left">
                <button>
                    <img src="../img/Home.png" alt="Icono Inicio">
                    Inicio
                </button>
            </div>
            <div class="buttons-right">
            <!-- Botón de Notificaciones -->
            <button onclick="toggleNotificaciones()">
                <img src="../img/Notificaciones.png" alt="Icono Notificaciones">
            </button>
                <!-- Botón de Cerrar Sesión -->
                <button onclick="window.location.href='logout.php'">
                    <img src="../img/Cerrar Sesion.png" alt="Icono Cerrar Sesión">
                    Cerrar Sesión
                </button>
            </div>
        </div>

        <!-- Contenedor de imágenes -->
        <div class="image-container">
            <img id="tec" src="../img/tecnm_logo.png" alt="Logo TecNM">
            <img id="itsoeh" src="../img/itsoeh.png" alt="Logo Itsoeh">
            <img id="hidalgo" src="../img/HidalgoLogo.png" alt="Logo Hidalgo">
        </div>

        <!-- Mensaje de bienvenida -->
        <h1>¡Bienvenido!</h1>

<!-- Información del usuario -->
<div class="info-section">
    <div class="user-icon">
        <!-- Icono de usuario usando una imagen -->
        <img src="../img/perfil.png" alt="Icono de usuario">
    </div>
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

        <!-- Cuadro de notificaciones -->
    <div id="notificaciones" class="notificaciones hidden">
        <p>No hay notificaciones por ahora</p>
        <button onclick="closeNotificaciones()" class="close-notificaciones-btn">Cerrar</button>
    </div>

        <!-- Pie de página -->
        <footer>
            © 2024 Comité Académico
        </footer>
        
        <script>
        // Función para mostrar/ocultar el cuadro de notificaciones
        function toggleNotificaciones() {
                    const notificaciones = document.getElementById("notificaciones");
                    notificaciones.classList.toggle("hidden"); // Alterna la visibilidad
                }

                // Función para cerrar el cuadro de notificaciones
                function closeNotificaciones() {
                    document.getElementById("notificaciones").classList.add("hidden");
                }

            // Asegura que ambas secciones estén ocultas al cargar la página
            document.addEventListener("DOMContentLoaded", function() {
                document.getElementById('anexosSection').style.display = 'none';
                document.getElementById('solicitudSection').style.display = 'none';
            });

            // Mostrar y ocultar la sección de anexos
            document.getElementById('anexosBtn').addEventListener('click', function() {
                var anexosSection = document.getElementById('anexosSection');
                var solicitudSection = document.getElementById('solicitudSection');
                
                // Oculta la sección de solicitud
                solicitudSection.style.display = 'none';
                
                // Muestra la sección de anexos en formato de fila
                anexosSection.style.display = anexosSection.style.display === 'none' || anexosSection.style.display === '' ? 'flex' : 'none';
            });

            // Mostrar y ocultar la sección de solicitud
            document.getElementById('solicitudBtn').addEventListener('click', function() {
                var solicitudSection = document.getElementById('solicitudSection');
                var anexosSection = document.getElementById('anexosSection');
                
                // Oculta la sección de anexos
                anexosSection.style.display = 'none';
                
                // Muestra la sección de solicitud
                solicitudSection.style.display = solicitudSection.style.display === 'none' || solicitudSection.style.display === '' ? 'block' : 'none';
            });

            // Ocultar la sección de anexos cuando se presiona el botón "Regresar"
            document.getElementById('backBtn').addEventListener('click', function() {
                document.getElementById('anexosSection').style.display = 'none';
            });

            // Ocultar la sección de solicitud cuando se presiona el botón "Enviar"
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
