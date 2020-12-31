<?php
include "./inc/config/01-connection.php";
include "./inc/config/03-variables.php";
$pageTitle = $pageEditarPelis;
include "./inc/01-layout.php";

$id = $_GET['id'];
$sql3 = "SELECT `ID`, `NOMBRE`, `DESCRIPCION`, `ANIO` FROM `peliculas` WHERE ID=?";
$consultar_peli = $dbh->prepare($sql3);
$consultar_peli->execute([$id]);

if ($consultar_peli->rowCount() !== 1) {
    header('Refresh: 5; URL=05-peliculas.php');
    die('<b>No existe la película consultada...<b>');
    
}

$datos = $consultar_peli->fetch(PDO::FETCH_OBJ);


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
                        <form class="ui inverted form" action="validations/04-validar-editar-peliculas.php?id=<?php echo $datos->ID; ?>" method="POST">
                            <div class="field">
                                <label>Película</label>
                                <input placeholder="First Name" name="pelicula" type="text" value="<?php echo $datos->NOMBRE; ?>">
                            </div>
                            <div class="field">
                                <label>Año</label>
                                <input placeholder="Last Name" name="anio" type="date" value="<?php echo $datos->ANIO; ?>">
                            </div>
                            <div class="field">
                                <label>Descripción</label>
                                <textarea placeholder="Descripción" name="descripcion" type="text"> <?php echo $datos->DESCRIPCION; ?></textarea>
                            </div>
                            <input placeholder="Last Name" name="ID" type="number" value="<?php echo $datos->ID; ?>" hidden>
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