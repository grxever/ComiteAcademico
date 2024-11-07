<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/inicioAlumno.css">
    <title>Estudiante</title>
</head>
<body>
    <div class="top-bar-superior"></div>
    <div class="top-bar-arriba">
        <div class="buttons-left">
        <button onclick="location.reload()">
            <img src="../img/Home.png" alt="Icono Inicio">
            Inicio
        </button>
            <button onclick="toggleButtons()">
                <img src="../img/Agregar.png" alt="Icono Solicitud">
                Solicitud
            </button>
        </div>
        <div class="buttons-right">
            <button>
                <img src="../img/Notificaciones.png" alt="Icono Notificaciones">
            </button>
            <button onclick="window.location.href='../index.php'">
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
        <img src="../img/Usuario2.png" alt="Foto del usuario">
        <?php
            session_start();
            if (isset($_SESSION['usuario'])) {
                $nombre = $_SESSION['usuario']['nombre'];
                $matricula = $_SESSION['usuario']['matricula'];
                $carrera = $_SESSION['usuario']['carrera'];
                $semestre = $_SESSION['usuario']['semestre'];
                $grupo = $_SESSION['usuario']['grupo'];

                echo "<p><strong>Nombre:</strong> $nombre</p> <br>";
                echo "<p><strong>Matrícula:</strong> $matricula</p> <br>";
                echo "<p><strong>Carrera:</strong> $carrera</p> <br>";
                echo "<p><strong>Grupo y semestre:</strong> $semestre \"$grupo\"</p> <br>";
            } else {
                echo "<p>Error al cargar la información del usuario.</p>";
            }
        ?>
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
                <img src="../img/archivo-pdf.png" alt="Icono de archivo">
                Subir Anexo1:
            </label>
            <input type="file" id="anexo1" onchange="displayFileName(this)">
            <span class="file-name" id="fileName1">Archivo no seleccionado</span>
            <span class="delete-icon" onclick="removeFile('anexo1')">✖</span> <!-- Icono de eliminar -->
        </div>

        <div class="upload-field">
            <label for="anexo2">
                <img src="../img/archivo-pdf.png" alt="Icono de archivo">
                Subir Anexo2:
            </label>
            <input type="file" id="anexo2" onchange="displayFileName(this)">
            <span class="file-name" id="fileName2">Archivo no seleccionado</span>
            <span class="delete-icon" onclick="removeFile('anexo2')">✖</span> <!-- Icono de eliminar -->
        </div>

        <div class="upload-field">
            <label for="anexo3">
                <img src="../img/archivo-pdf.png" alt="Icono de archivo">
                Subir Anexo3:
            </label>
            <input type="file" id="anexo3" onchange="displayFileName(this)">
            <span class="file-name" id="fileName3">Archivo no seleccionado</span>
            <span class="delete-icon" onclick="removeFile('anexo3')">✖</span> <!-- Icono de eliminar -->
        </div>
        <!-- ---------------------------------------------------------------------- -->
        <div class="upload-field">
            <label for="Kardex o historial academico">
                <img src="../img/archivo-pdf.png" alt="Icono de archivo">
                Kardex o historial academico:
            </label>
            <input type="file" id="anexo3" onchange="displayFileName(this)">
            <span class="file-name" id="fileName3">Archivo no seleccionado</span>
            <span class="delete-icon" onclick="removeFile('anexo3')">✖</span> <!-- Icono de eliminar -->
        </div>
        <div class="upload-field">
            <label for="anexo3">
                <img src="../img/word-icon.png" alt="Icono de archivo">
                Subir Anexo3:
            </label>
            <input type="file" id="anexo3" onchange="displayFileName(this)">
            <span class="file-name" id="fileName3">Archivo no seleccionado</span>
            <span class="delete-icon" onclick="removeFile('anexo3')">✖</span> <!-- Icono de eliminar -->
        </div>
        

        <button class="submit-btn">Enviar Solicitud</button>
    </div>

    <!-- Contenedor de los anexos (modal) -->
    <div id="modalAnexos" class="modal-container">
        <div class="anexos-row">
            <div class="anexo-card" onclick="alert('Abrir Anexo 1')">
                <div class="anexo-title">Anexo 1</div>
                <div class="anexo-content">Análisis académico.</div>
                <a href="../docs/AnalisisAcademico.docx" download="Anexo1.docx">
                <img src="../img/word-icon.png" alt="Word Icon" class="word-icon">
                </a>
            </div>
            <div class="anexo-card" onclick="alert('Abrir Anexo 2')">
                <div class="anexo-title">Anexo 2</div>
                <div class="anexo-content">Solicitud de estudiante para el análisis del comité académico.</div>
                <div class="anexo-content">Análisis académico.</div>
                <a href="../docs/AnalisisProp.doc" download="Anexo2.docx">
                <img src="../img/word-icon.png" alt="Word Icon" class="word-icon">
                </a>
            </div>
            <div class="anexo-card" onclick="alert('Abrir Anexo 3')">
                <div class="anexo-title">Anexo 3</div>
                <div class="anexo-content">Solicitud de análisis de propuesta para el comité académico.</div>
                <a href="../docs/SolicitudEstudiante.docx" download="Anexo3.docx">
                <img src="../img/word-icon.png" alt="Word Icon" class="word-icon">
                </a>
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

            if (solicitudContainer.style.display === "block") {
                solicitudContainer.style.display = "none";
            }

            modalAnexos.style.display = (modalAnexos.style.display === "none" || modalAnexos.style.display === "") ? "flex" : "none";
        }

        function toggleSolicitud() {
            const solicitudContainer = document.getElementById("solicitudContainer");
            const modalAnexos = document.getElementById("modalAnexos");

            if (modalAnexos.style.display === "flex") {
                modalAnexos.style.display = "none";
            }

            solicitudContainer.style.display = (solicitudContainer.style.display === "none" || solicitudContainer.style.display === "") ? "block" : "none";
        }

        function displayFileName(input) {
            const fileNameSpan = input.nextElementSibling;
            const deleteIcon = input.parentElement.querySelector(".delete-icon");

            if (input.files && input.files[0]) {
                fileNameSpan.textContent = input.files[0].name;
                input.parentElement.classList.add("show-delete"); // Añade la clase para mostrar el icono de eliminar
            } else {
                fileNameSpan.textContent = "Archivo no seleccionado";
                input.parentElement.classList.remove("show-delete"); // Oculta el icono si no hay archivo
            }
        }

        function removeFile(inputId) {
            const input = document.getElementById(inputId);
            input.value = ""; // Resetea el valor del input (elimina el archivo seleccionado)
            
            const fileNameSpan = input.nextElementSibling;
            fileNameSpan.textContent = "Archivo no seleccionado"; // Restablece el mensaje de "Archivo no seleccionado"
            
            input.parentElement.classList.remove("show-delete"); // Oculta el icono de eliminar
        }
    </script>
</body>
</html>

