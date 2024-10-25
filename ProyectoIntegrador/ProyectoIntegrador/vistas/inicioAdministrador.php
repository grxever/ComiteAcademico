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
                margin-top: -6px;
                width: 100%;
            }
            #tec {
                max-width: 150px;
                width: 100px;
                height: 100px;
                margin: -35px;
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
                margin: -7px 0 10px;
            }
            .user-info-container {
                display: flex;
                justify-content: center;
                align-items: center;
                margin-bottom: 20px;
                gap: 20px;
            }
            .user-info-container img {
                width: 80px; /* Tamaño de la imagen del usuario */
                height: 80px;
                border-radius: 50%; /* Para que sea redonda */
            }
            .user-info {
                text-align: left;
            }
            .user-info p {
                margin: 5px 0;
                font-size: 18px;
            }
            .buttons-container {
                display: flex;
                justify-content: center;
                gap: 80px;
                margin-top: 10px;
            }
            .action-btn {
                background-color: #eae6f3;
                color: #5c3d80;
                border: none;
                border-radius: 10px;
                padding: 15px 30px;
                font-size: 16px;
                cursor: pointer;
                box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
                transition: background-color 0.3s ease;
            }
            .action-btn:hover {
                background-color: #d1c4e9;
            }
            .alta-container {
                margin: 20px auto; /* Centra el contenedor */
                padding: 20px;
                background-color: #f4f4f4;
                border-radius: 10px;
                box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
                width: 80%; /* Ajusta el ancho del contenedor de dar de alta */
                text-align: center;
            }
            .alta-container .alta-title {
                font-size: 24px;
                font-weight: bold;
                margin-bottom: 15px;
                color: #333;
            }
            .alta-container .alta-buttons {
                display: flex;
                justify-content: space-around;
                width: 100%; /* Asegura que ocupe todo el ancho */
            }
            .alta-container .alta-buttons button {
                background-color: #eae6f3;
                border: none;
                border-radius: 80px;
                padding: 15px 20px;
                width: 120px; /* Ajusta el ancho de los botones de alta */
                text-align: center;
                cursor: pointer;
                transition: background-color 0.3s ease;
                box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            }
            .alta-container .alta-buttons button:hover {
                background-color: #d1c4e9;
            }
            .alta-container .alta-buttons button img {
                width: 50px; /* Ajusta el tamaño de las imágenes dentro de los botones */
                height: 50px;
                display: block;
                margin: 0 auto 5px; /* Centra la imagen y añade margen inferior */
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
            <img src="../img/Usuario2.png" alt="Foto del usuario">
            <div class="user-info">
                <p><strong>Nombre:</strong></p>
            </div>
        </div>

        <!-- Sección para dar de alta -->
        <div class="alta-container">
            <div class="alta-title">Dar de Alta</div>
            <div class="alta-buttons">
                <button>
                    <img src="../img/Alumno.png" alt="Icono Alumnos">
                    Alumnos
                </button>
                <button>
                    <img src="../img/Jefe de Carrera.png" alt="Icono Jefe de Carrera">
                    Jefe de Carrera
                </button>
                <button>
                    <img src="../img/Secretario.png" alt="Icono Secretario de Academia">
                    Secretario de Academia
                </button>
            </div>
        </div>

        <?php
        // put your code here
        ?>
    </body>
</html>
