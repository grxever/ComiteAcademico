<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Comité Académico</title>
        <link rel="stylesheet" href="css/Index.css">
    </head>
    <body>
       <div class="top-bar-arriba"></div>

        <div class="image-container">
            <img id="tec" src="img/LogoTec.png" alt="Logo TecNM">
            <img id="itsoeh" src="img/itsoeh.png" alt="Logo Itsoeh">
            <img id="hidalgo" src="img/HidalgoLogo.png" alt="Logo Hidalgo">
        </div>

        <div class="title">Comité Académico</div>
        <div class="subtitle">Ingresa</div>

        <div class="form-container">
            <img src="img/perfil.png" alt="User Icon">
            <div class="form-group">
                <label for="matricula">Matrícula:</label>
                <input type="text" placeholder="Matrícula" id="matricula">
            </div>
            <div class="form-group">
                <label for="nip">NIP:</label>
                <input type="password" placeholder="NIP" id="nip">
            </div>
            <button class="submit-btn">Entrar</button>
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
                    <img src="../img/Candado.png" alt="Lock Icon">
                    Recuperación de PIN
                </div>
                <p>Por favor comunicate al  Tel. xxx xxx xxxx en los horarios de atención de 07:00 a 16:00 
                   horas o envíanos un  correo a xxx@itsoeh.edu.mx con los siguientes datos: Matricula
                   Breve te enviaremos tu usuario y Pin a tu correo institucional.</p>
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
        </script>
    </body>
</html>