<?php include "./inc/02-login.php"; ?>

<body>
    <!-- Inclusión del navbar del login-->
    <?php include "./inc/03-navbar-login.php"; ?>
    <!-- cuerpo-->
    <div class="pusher">
        <div class="main-content">
            <div class="ui grid stackable padded">
                <div class="column">
                    <div class="page-login">
                        <div class="ui centered grid container">
                            <div class="eight wide computer eight wide tablet sixteen wide mobile column">
                                <!-- Mensaje de Alerta-->
                                <div id="alert">

                                </div>
                                <h2 class="ui teal image header">
                                    <img src="../img/logo-ps.png" class="image">
                                    <div class="content">
                                        Ingrese a su cuenta
                                    </div>
                                </h2>
                                <div class="ui fluid card">
                                    <div class="ui inverted segment">
                                        <form class="ui inverted form" action="validations/06-validar-login.php" method="POST">
                                            <div class="field">
                                                <label>Email</label>
                                                <div class="ui left icon input">
                                                    <i class="user icon teal"></i>
                                                    <input type="text" name="email" id="email" placeholder="ejemplo@gmail.com">
                                                </div>
                                            </div>
                                            <div class="field">
                                                <label>Contraseña</label>
                                                <div class="ui left icon input">
                                                    <i class="lock icon teal"></i>
                                                    <input type="password" name="password" id="passwordUser" placeholder="Contraseña">
                                                </div>
                                            </div>
                                            <button class="ui fluid large teal submit button" type="submit" onclick="return validarUsuario();">
                                                <i class="unlock alternate icon"></i>
                                                Ingresar
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <div class="ui message aligned center aligned grid">
                                    ¿Eres nuevo para nosotros?<a href="02-registrarse.php">Regístrate</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- inclución scrpts -->
    <?php  include './inc/05-scripts-login.php'; ?>
    <!-- validación del login en JS -->
    <script src="../js/validar-login.js"></script>
</body>

</html>