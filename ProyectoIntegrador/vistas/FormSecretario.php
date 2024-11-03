<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Jefe Division</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            font-family: Arial, sans-serif;
            overflow-x: hidden;
            background-color: #f2f2f2;
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
        .buttons-left, .buttons-right {
            display: flex;
            gap: 15px;
        }
        .buttons-left {
            margin-left: -20px;
        }
        .buttons-right {
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
            gap: 5px;
        }
        .top-bar-arriba button img {
            width: 20px;
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
        .form-container {
            max-width: 700px; /* Ancho aumentado */
            margin: 20px auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            background-color: #f9f9f9;
            text-align: center;
        }
        .form-container h2 {
            margin-bottom: 20px;
            font-weight: bold;
            color: #333;
            font-size: 24px;
        }
        .form-group {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
        .form-group label {
            flex: 1;
            font-size: 14px;
            color: #333;
            text-align: left;
            margin-right: 10px;
        }
        .form-group input, .form-group select {
            flex: 2;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 14px;
        }
        .form-container button {
            width: 100%;
            padding: 10px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            font-size: 16px;
        }
        .form-container button:hover {
            background-color: #555;
        }
        #tec {
            max-width: 150px;
            width: auto;
            height: auto;
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
    </style>
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

    <!-- Formulario de Registro de Estudiante -->
    <div class="form-container">
        <h2>Secretario Academico</h2>
        <form action="your_action_page.php" method="POST">
            <div class="form-group">
                <label for="matricula">Matrícula:</label>
                <input type="text" id="matricula" name="matricula" required>
            </div>

            <div class="form-group">
                <label for="nombre_completo">Nombre completo:</label>
                <input type="text" id="nombre_completo" name="nombre_completo" required>
            </div>

            <div class="form-group">
                <label for="carrera">Carrera:</label>
                <select id="carrera" name="carrera" required>
                    <option value="isic">Ing. en Sistemas Computacionales</option>
                    <option value="arqui">Arquitectura</option>
                    <option value="civil">Ing. Civil</option>
                    <option value="civil">Ing. Tics</option>
                    <option value="civil">Ing. Industrial</option>
                    <option value="civil">Ing. Logistica</option>
                </select>
            </div>

            <button type="submit">Registrar</button>
        </form>
    </div>

    <?php
    // put your code here
    ?>
</body>
</html>
