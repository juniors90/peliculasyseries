<?php
include "./inc/config/01-connection.php";
include "./inc/config/03-variables.php";
$pageTitle = $pageCargarPelis;
include "./inc/01-layout.php";
?>

<body>
    <!-- top nav -->
    <?php include "./inc/04-navbar-users.php"; ?>
    <!-- top nav -->

    <div class="pusher">
        <div class="main-content">
            <div class="ui grid stackable padded">
                <div class="column">
                    <div class="ui inverted segment">
                        <form class="ui inverted form" action="validations/02-validar-peliculas.php" method="POST">
                            <div class="field">
                                <label>Película</label>
                                <input placeholder="First Name" name="pelicula" type="text">
                            </div>
                            <div class="field">
                                <label>Año</label>
                                <input placeholder="Last Name" name="anio" type="text">
                            </div>
                            <div class="field">
                                <label>Descripción</label>
                                <textarea placeholder="Last Name" name="descripcion" type="text"> </textarea>
                            </div>
                            <button class="ui teal submit button" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include './inc/06-scripts-users.php'; ?>

</body>

</html>