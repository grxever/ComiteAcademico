<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Comité Académico</title>
        <link rel="stylesheet" href="css/styles.css">
        <link rel="shortcut icon" href="img/icono.png">
       </head>
       <script>
    function validarFormulario(event) {
        event.preventDefault();

        const matricula = document.getElementById("matricula").value;
        const nip = document.getElementById("nip").value;

        if (matricula === '' || nip === '') {
            alert('Por favor, ingresa todos los datos.');
            return;
        }

        // Verifica si el campo de entrada es un correo (contiene '@')
        let esCorreo = matricula.includes('@');
        
        if (esCorreo) {
            // Verificar si es jefe de carrera o secretario basado en la longitud del correo
            if (matricula.length >= 19 && matricula.length <= 29) {
                // Es jefe de carrera
                if (nip !== 'password123') {
                    alert('NIP incorrecto para jefe de carrera.');
                    return;
                }
                alert('Has iniciado sesión como jefe de carrera.');
            } else if (matricula.length === 32) {
                // Es secretario académico
                if (nip !== 'password123') {
                    alert('NIP incorrecto para secretario académico.');
                    return;
                }
                alert('Has iniciado sesión como secretario académico.');
            } else if (matricula.lenght === 35){
                if (nip !== 'password123') {
                    alert('NIP incorrecto para administrador.');
                    return;
                }
                alert('Has iniciado sesión como  administrador.');
            } 
            else {
                alert('Correo incorrecto. Verifica que ingresaste el correo correctamente.');
                return;
            }
        } else {
            // Valida al estudiante por longitud de matrícula (debe ser de 8 caracteres)
            if (matricula.length !== 8) {
                alert('Matrícula incorrecta para estudiante.');
                return;
            }
            // El NIP es los últimos 4 dígitos de la matrícula
            const nipCorrecto = matricula.slice(-4);
            if (nip !== nipCorrecto) {
                alert('NIP incorrecto para estudiante.');
                return;
            }
            alert('Has iniciado sesión como estudiante.');
        }
        
        document.forms["loginForm"].submit(); // Envía el formulario si todo es correcto
    }
</script>

    <body>
        <div class="header-bar"></div>
        <div class="container">
            <header>
                <div class="logos">
                    <img src="img/tecnm_logo.png" alt="Logo TecNM" class="left-logo">
                    <img src="img/itsoeh.png" alt="Logo ITSOEH" class="center-logo">
                    <img src="img/HidalgoLogo.png" alt="Logo Hidalgo" class="right-logo">
                </div>
            </header>

            <main>
                <h1>Comité Académico</h1>
                <h2>Ingresa</h2>
                <div class="login-container">
                    <div class="user-icon">&#128100;</div>
                    <form name="loginForm" action="controlador/validarUsuario.php" method="post" onsubmit="validarFormulario(event)">
                        <label for="matricula">Matrícula</label>
                        <input type="text" id="matricula" name="matricula" placeholder="Matrícula">

                        <label for="nip">NIP</label>
                        <input type="password" id="nip" name="nip" placeholder="Ingrese su NIP">

                        <button type="submit">Entrar</button>
                    </form>
                    <a href="#" class="forgot-link">¿Olvidaste tu NIP?</a>
                </div>
            </main>
            <footer>
                <p>
                    Ingresa tu matrícula y pin (últimos 4 dígitos de tu matrícula), 
                    aquí podrás: Realizar tu solicitud Académica para el comité académico,
                    podrás visualizar tu seguimiento.
                </p>
            </footer>
        </div>
        <div class="footer-bar"></div>
    </body>
</html>
