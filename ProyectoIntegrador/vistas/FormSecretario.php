<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Jefe Division</title>
    <link rel="stylesheet" href="../css/InicioSecretario.css">
</head>
<body>
    <!-- Nueva barra azul superior -->
    <div class="top-bar-superior"></div>

    <!-- Barra blanca inferior con borde en la parte inferior -->
    <div class="top-bar-arriba">
        <div class="buttons-left">
            <button>
                <img src="../imagenes/Home.png" alt="Icono Inicio">
                Inicio
            </button>
        </div>
        <div class="buttons-right">
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
