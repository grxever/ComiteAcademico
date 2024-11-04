<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiante</title>
    <style>
    </style>
</head>
<body>
    <div class="top-bar-superior"></div>
    <div class="top-bar-arriba">
        <div class="buttons-left">
            <button>
                <img src="../imagenes/Home.png" alt="Icono Inicio">
                Inicio
            </button>
            <button onclick="toggleButtons()">
                <img src="../imagenes/Agregar.png" alt="Icono Solicitud">
                Solicitud
            </button>
        </div>
        <div class="buttons-right">
            <button>
                <img src="../imagenes/Notificaciones.png" alt="Icono Notificaciones">
            </button>
            <button>
                <img src="../imagenes/Cerrar Sesion.png" alt="Icono Cerrar Sesión">
                Cerrar Sesión
            </button>
        </div>
    </div>

    <div class="image-container">
        <img id="tec" src="../imagenes/LogoTec.png" alt="Logo TecNM">
        <img id="itsoeh" src="../imagenes/LogoItsoeh.png" alt="Logo Itsoeh">
        <img id="hidalgo" src="../imagenes/Hidalgo.png" alt="Logo Hidalgo">
    </div>

    <div class="title">¡Bienvenido!</div>

    <div class="user-info-container">
        <img src="../imagenes/Usuario2.png" alt="Foto del usuario">
        <div class="user-info">
            <p><strong>Nombre:</strong> Santuru Gojo</p>
            <p><strong>Matrícula:</strong> 18011002</p>
            <p><strong>Carrera:</strong> Sistemas Computacionales</p>
            <p><strong>Grupo y semestre:</strong> 9° "A"</p>
        </div>
    </div>

    <!-- Additional buttons that appear when 'Solicitud' is clicked -->
    <div class="buttons-container" id="extraButtons">
        <button class="action-btn" onclick="toggleAnexos()">Anexos Requeridos</button>
        <button class="action-btn" onclick="toggleSolicitud()">Solicitud</button>
    </div>

    <!-- Contenedor de solicitudes -->
    <div id="solicitudContainer" class="solicitud-container">
        <button class="close-btn" onclick="toggleSolicitud()">✖</button>
        <div class="solicitud-title">Subir Anexos</div>

        <div class="upload-field">
            <label for="anexo1">
                <img src="../imagenes/word.png" alt="Icono de archivo">
                Subir Anexo1:
            </label>
            <input type="file" id="anexo1" onchange="displayFileName(this)">
            <span class="file-name" id="fileName1">Archivo no seleccionado</span>
        </div>

        <div class="upload-field">
            <label for="anexo2">
                <img src="../imagenes/word.png" alt="Icono de archivo">
                Subir Anexo2:
            </label>
            <input type="file" id="anexo2" onchange="displayFileName(this)">
            <span class="file-name" id="fileName2">Archivo no seleccionado</span>
        </div>

        <div class="upload-field">
            <label for="anexo3">
                <img src="../imagenes/word.png" alt="Icono de archivo">
                Subir Anexo3:
            </label>
            <input type="file" id="anexo3" onchange="displayFileName(this)">
            <span class="file-name" id="fileName3">Archivo no seleccionado</span>
        </div>

        <button class="submit-btn">Enviar Solicitud</button>
    </div>

    <!-- Contenedor de los anexos (modal) -->
    <div id="modalAnexos" class="modal-container">
        <div class="anexos-row">
            <div class="anexo-card" onclick="alert('Abrir Anexo 1')">
                <div class="anexo-title">Anexo 1</div>
                <div class="anexo-content">Análisis académico.</div>
                <img src="../imagenes/word.png" alt="Word Icon" class="word-icon">
            </div>
            <div class="anexo-card" onclick="alert('Abrir Anexo 2')">
                <div class="anexo-title">Anexo 2</div>
                <div class="anexo-content">Solicitud de estudiante para el análisis del comité académico.</div>
                <img src="../imagenes/word.png" alt="Word Icon" class="word-icon">
            </div>
            <div class="anexo-card" onclick="alert('Abrir Anexo 3')">
                <div class="anexo-title">Anexo 3</div>
                <div class="anexo-content">Solicitud de análisis de propuesta para el comité académico.</div>
                <img src="../imagenes/word.png" alt="Word Icon" class="word-icon">
            </div>
        </div>
        <button class="back-btn" onclick="toggleAnexos()">Regresar</button>
    </div>

    <script>
        function toggleButtons() {
            const extraButtons = document.getElementById("extraButtons");
            extraButtons.style.display = (extraButtons.style.display === "none" || extraButtons.style.display === "") ? "flex" : "none";
        }

        function toggleAnexos() {
            const modalAnexos = document.getElementById("modalAnexos");
            const solicitudContainer = document.getElementById("solicitudContainer");

            // Close solicitudContainer if open
            if (solicitudContainer.style.display === "block") {
                solicitudContainer.style.display = "none";
            }

            // Toggle modalAnexos
            modalAnexos.style.display = (modalAnexos.style.display === "none" || modalAnexos.style.display === "") ? "flex" : "none";
        }

        function toggleSolicitud() {
            const solicitudContainer = document.getElementById("solicitudContainer");
            const modalAnexos = document.getElementById("modalAnexos");

            // Close modalAnexos if open
            if (modalAnexos.style.display === "flex") {
                modalAnexos.style.display = "none";
            }

            // Toggle solicitudContainer
            solicitudContainer.style.display = (solicitudContainer.style.display === "none" || solicitudContainer.style.display === "") ? "block" : "none";
        }

        function displayFileName(input) {
            const fileNameSpan = input.nextElementSibling;
            if (input.files && input.files[0]) {
                fileNameSpan.textContent = input.files[0].name;
            } else {
                fileNameSpan.textContent = "Archivo no seleccionado";
            }
        }
    </script>
</body>
</html>
