<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comité Académico</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <div class="top-bar-arriba"></div>

    <div class="image-container">
        <img id="tec" src="img/tecnm_logo.png" alt="Logo TecNM">
        <img id="itsoeh" src="img/itsoeh.png" alt="Logo ITSOEH">
        <img id="hidalgo" src="img/HidalgoLogo.png" alt="Logo Hidalgo">
    </div>

    <div class="title">Comité Académico</div>
    <div class="subtitle">Ingresa</div>

    <div class="form-container">
        <img src="img/perfil.png" alt="User Icon">
        <form name="loginForm" action="controlador/validarUsuario.php" method="post" onsubmit="validarFormulario(event)">
            <div class="form-group">
                <div class="input-container">
                    <span class="icon">&#128100;</span>
                    <input type="text" id="matricula" name="matricula" placeholder="Matrícula">
                </div>
            </div>
            
            <div class="form-group">
                <div class="input-container">
                    <span class="icon">&#128274;</span>
                    <input type="password" id="nip" name="nip" placeholder="NIP">
                </div>
            </div>
            
            <button type="submit" class="submit-btn">Entrar</button>
        </form>
        
        <div class="forgot-link">
            <a href="javascript:void(0);" onclick="showForgotNipModal()">¿Olvidaste tu NIP?</a>
        </div>
    </div>

    <div class="top-bar-abajo">
        Ingresa tu matrícula y pin (últimos 4 dígitos de tu matrícula),<br>
        aquí podrás realizar tu solicitud académica para el comité académico,
        y podrás visualizar tu seguimiento.
    </div>

    <!-- Modal structure -->
    <div id="forgotNipModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeForgotNipModal()">&times;</span>
            <div class="modal-title">
                <img src="img/Candado.png" alt="Lock Icon">
                Recuperación de PIN
            </div>
            <p>Por favor comunicate al Tel. xxx xxx xxxx en los horarios de atención de 07:00 a 16:00 
               horas o envíanos un correo a xxx@itsoeh.edu.mx con los siguientes datos: Matrícula.</p>
            <p>Breve te enviaremos tu usuario y Pin a tu correo institucional.</p>
            <button class="ok-btn" onclick="closeForgotNipModal()">OK</button>
        </div>
    </div>

    <script>
        function showForgotNipModal() {
            document.getElementById("forgotNipModal").style.display = "block";
        }

        function closeForgotNipModal() {
            document.getElementById("forgotNipModal").style.display = "none";
        }

        // Close modal when clicking outside of it
        window.onclick = function(event) {
            var modal = document.getElementById("forgotNipModal");
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        function validarFormulario(event) {
            event.preventDefault();
            const matricula = document.getElementById("matricula").value;
            const nip = document.getElementById("nip").value;

            if (matricula === '' && nip === '') {
                alert('Por favor, ingresa todos los datos.');
                return;
            }
            
            if (matricula === '') {
                alert('Por favor, ingresa tu matrícula.');
                return;
            }

            if (nip === '') {
                alert('Por favor, ingresa tu NIP.');
                return;
            }

            if (matricula.length === 8) {
                alert('Has iniciado sesión como estudiante.');
            } else if (matricula.length >= 20 && matricula.length <= 29) {
                alert('Has iniciado sesión como jefe de carrera.');
            } else if (matricula.length === 30) {
                alert('Has iniciado sesión como secretario académico.');
            } else {
                alert('Matrícula incorrecta. Asegúrate de que tenga el número correcto de caracteres.');
                return;
            }

            const nipCorrecto = matricula.slice(-4);
            if (nip !== nipCorrecto) {
                alert('NIP incorrecto.');
                return;
            }

            alert('Has iniciado sesión correctamente.');
            document.forms["loginForm"].submit();
        }
    </script>
</body>
</html>

