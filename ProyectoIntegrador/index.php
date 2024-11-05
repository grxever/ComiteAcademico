<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Comité Académico</title>
        <style>
            body {
                margin: 0;
                padding: 0;
                display: flex;
                flex-direction: column;
                min-height: 100vh;
                font-family: Arial, sans-serif;
            }
            .top-bar-arriba {
                width: 100%;
                height: 35px;
                background-color: #17369f;
            }
            .top-bar-abajo {
                width: 100%;
                height: 60px;
                background-color: #17369f;
                position: fixed;
                bottom: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                color: white;
                font-size: 14px;
                text-align: center;
                padding: 5px;
                box-sizing: border-box;
            }
            .image-container {
                display: flex;
                justify-content: space-around;
                align-items: center;
                margin-top: -10px;
            }
            #tec {
                max-width: 140px;
                width: 50%;
                height: auto;
                margin: 0 -4px;
            }
            #itsoeh {
                max-width: 150px;
                width: 450%;
                height: auto;
                margin: 0 -20px;
            }
            #hidalgo {
                max-width: 60px;
                width: 50%;
                height: auto;
                margin: 0 20px;
            }
            .title {
                text-align: center;
                font-size: 36px;
                font-weight: bold;
                margin: -1px 0 10px;
            }
            .subtitle {
                text-align: center;
                font-size: 24px;
                margin-bottom: 4px;
            }
            .form-container {
                display: flex;
                flex-direction: column;
                align-items: center;
                margin-bottom: 15px;
            }
            .form-container img {
                width: 80px;
                height: 80px;
                margin-bottom: 5px;
            }
            .form-group {
                margin-bottom: 15px;
                width: 300px;
            }
            .form-group label {
                display: block;
                margin-bottom: 5px;
                font-weight: bold;
                font-size: 14px;
            }
            .form-group input {
                width: 100%;
                padding: 10px;
                border-radius: 5px;
                border: 1px solid #ccc;
                font-size: 14px;
            }
            .form-group input:focus {
                outline: none;
                border-color: #17369f;
            }
            .submit-btn {
                width: 300px;
                padding: 10px;
                background-color: #17369f;
                color: white;
                border: none;
                border-radius: 5px;
                font-size: 16px;
                cursor: pointer;
            }
            .submit-btn:hover {
                background-color: #142d7a;
            }
            .forgot-link {
                text-align: center;
                margin-top: 10px;
            }
            .forgot-link a {
                color: #17369f;
                text-decoration: none;
                cursor: pointer;
            }
            /* Modal styling */
            .modal {
                display: none; /* Hidden by default */
                position: fixed;
                z-index: 1;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.5); /* Black with opacity */
            }
            .modal-content {
                background-color: white;
                margin: 15% auto;
                padding: 20px;
                border: 1px solid #888;
                width: 80%;
                max-width: 400px;
                border-radius: 8px;
                text-align: center;
            }
            .close {
                color: #aaa;
                float: right;
                font-size: 28px;
                font-weight: bold;
                cursor: pointer;
            }
            .close:hover,
            .close:focus {
                color: black;
                text-decoration: none;
                cursor: pointer;
            }
            .modal-title {
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 24px;
                font-weight: bold;
            }
            .modal-title img {
                width: 24px;
                height: 24px;
                margin-right: 8px;
            }
            .ok-btn {
                margin-top: 15px;
                padding: 10px 20px;
                background-color: #17369f;
                color: white;
                border: none;
                border-radius: 5px;
                font-size: 16px;
                cursor: pointer;
            }
            .ok-btn:hover {
                background-color: #142d7a;
            }
        </style>
    </head>
    <body>
       <div class="top-bar-arriba"></div>

        <div class="image-container">
            <img id="tec" src="img/LogoTec.png" alt="Logo TecNM">
            <img id="itsoeh" src="img/itsoeh.png" alt="Logo Itsoeh">
            <img id="hidalgo" src="../                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  KKKKKKKKKKKKKKKK,                                                                                                                                                                                                                                                                                                                   ,algo">
        </div>

        <div class="title">Comité Académico</div>
        <div class="subtitle">Ingresa</div>

        <div class="form-container">
            <img src="../img/Usuario2.png" alt="User Icon">
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