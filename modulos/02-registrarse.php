<?php include "./inc/02-login.php";
 
 $pageTitle = $pageName;
?>


<body>
    <!-- top nav -->
    <?php include "./inc/03-navbar-login.php"; ?>
    <!-- top nav -->

    <div class="pusher">
        <div class="main-content">
            <div class="ui grid stackable padded">
                <div class="column">
                    <div class="page-login">
                        <div class="ui centered grid container">
                            <div class="eight wide computer eight wide tablet sixteen wide mobile column">
                                <div id="alert">
                                    
                                </div>
                                <h2 class="ui teal image header">
                                    <img src="../img/logo-ps.gif" class="image">
                                    <div class="content">
                                        Crear una cuenta
                                    </div>
                                </h2>
                                <div class="ui fluid card">
                                    <div class="ui inverted segment">

                                        <form class="ui inverted form" action="validations/05-validacion-registrarse.php" method="POST">
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
                                            <div class="field">
                                                <label>Confirmar Contraseña</label>
                                                <div class="ui left icon input">
                                                    <i class="lock icon teal"></i>
                                                    <input type="password" name="password1" id="passswordUserConfirm" placeholder="Confirmar Contraseña">
                                                </div>
                                            </div>
                                            <button class="ui fluid large teal submit button" type="submit" onclick="return validarUsuario();" >
                                                <i class="unlock alternate icon"></i>
                                                Registrarme
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <div class="ui message aligned center aligned grid">
                                    ¿Ya tienes cuenta?<a href="01-login.php">Ingresar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php  include './inc/05-scripts-login.php'; ?>
    <!-- validación del login en JS -->
    <script src="../js/validar-registrarse.js"></script>
</body>

</html>