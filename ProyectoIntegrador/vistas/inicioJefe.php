<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jefe de Carrera</title>
    <link rel="shortcut icon" href="../img/icono.png">
    <link rel="stylesheet" href="../css/inicioJefe.css">
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

    <div class="title">¡Bienvenido!</div>

    <div class="user-info-container">
        <img src="../img/Usuario.png" alt="Foto del usuario">
        <div class="user-info">
            <p><strong>Nombre Jefe:</strong> Santuru Gojo</p>
            <p><strong>Carrera:</strong> 18011002</p>
        </div>
    </div>

    <div class="buttons-container">
        <button class="action-btn" onclick="toggleList()">Solicitudes Recientes</button>
        <button class="action-btn" onclick="toggleHistorial()">Historial</button>
    </div>

    <!-- Contenedor de la lista dinámica de solicitudes -->
    <div id="solicitudes-list" class="hidden">
        <ul id="lista-dinamica"></ul>
        <button class="close-btn" onclick="closeList()">Cerrar</button>
    </div>

    <!-- Contenedor de la lista dinámica de historial -->
    <div id="historial-list" class="hidden">
        <ul id="lista-historial"></ul>
        <button class="close-btn" onclick="closeHistorial()">Cerrar</button>
    </div>

    <!-- Cuadro de notificaciones -->
    <div id="notificaciones" class="notificaciones hidden">
        <p>No hay notificaciones por ahora</p>
        <button onclick="closeNotificaciones()" class="close-notificaciones-btn">Cerrar</button>
    </div>

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

        // Función para mostrar/ocultar la lista de solicitudes
        function toggleList() {
            const listContainer = document.getElementById("solicitudes-list");
            if (listContainer.classList.contains("hidden")) {
                listContainer.classList.remove("hidden");
                cargarSolicitudes();
            } else {
                listContainer.classList.add("hidden");
            }
        }

        // Función para cerrar la lista de solicitudes
        function closeList() {
            document.getElementById("solicitudes-list").classList.add("hidden");
        }

        // Función para cargar solicitudes desde el archivo PHP
        function cargarSolicitudes() {
            fetch("obtener_solicitudes.php")
                .then(response => response.json())
                .then(data => {
                    const lista = document.getElementById("lista-dinamica");
                    lista.innerHTML = "";
                    data.forEach((item, index) => {
                        const li = document.createElement("li");
                        li.textContent = `${index + 1}. ${item.nombre_solicitud}`;
                        lista.appendChild(li);
                    });
                })
                .catch(error => console.error("Error cargando solicitudes:", error));
        }

        // Función para mostrar/ocultar la lista de historial
        function toggleHistorial() {
            const historialContainer = document.getElementById("historial-list");
            if (historialContainer.classList.contains("hidden")) {
                historialContainer.classList.remove("hidden");
                cargarHistorial();
            } else {
                historialContainer.classList.add("hidden");
            }
        }

        // Función para cerrar la lista de historial
        function closeHistorial() {
            document.getElementById("historial-list").classList.add("hidden");
        }

        // Función para cargar historial desde el archivo PHP
        function cargarHistorial() {
            fetch("obtener_historial.php")
                .then(response => response.json())
                .then(data => {
                    const lista = document.getElementById("lista-historial");
                    lista.innerHTML = "";
                    data.forEach((item, index) => {
                        const li = document.createElement("li");
                        li.textContent = `${index + 1}. ${item.nombre_historial}`;
                        lista.appendChild(li);
                    });
                })
                .catch(error => console.error("Error cargando historial:", error));
        }
    </script>
</body>
</html>