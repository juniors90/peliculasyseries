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

$consulta_genero="SELECT g.ID, g.NOMBRE FROM `generos` g JOIN `rela_peli_generos` r ON g.ID = r.RELA_GENEROS WHERE r.RELA_PELICULAS=".$id;

$generos = $dbh->query($consulta_genero);
$resultados = $generos->fetchAll(PDO::FETCH_OBJ);


?>

<body>
    <!-- top nav -->
    <?php include "./inc/04-navbar-users.php"; ?>
    <!-- top nav -->

    <div class="pusher">
        <div class="main-content">
            <div class="ui grid stackable padded">
                <div class="column">
                    <div class="four wide computer eight wide tablet sixteen wide mobile column">
                        <div class="ui fluid card">
                            <div class="content">
                                <div class="ui right floated header green">
                                    <i class="icon clock"></i>
                                </div>
                                <div class="header">
                                    <div class="ui header green"><?php echo $datos->NOMBRE; ?></div>
                                </div>
                                <div class="meta">
                                <?php echo $datos->ANIO; ?>
                                </div>
                                <div class="description">
                                <?php echo $datos->DESCRIPCION; ?>
                                </div>
                            </div>
                            <?php foreach ($resultados as $genero){ ?>
                            <div class="extra content">
                                <div class="ui two buttons">
                                    <a href="10-generos-peliculas.php?id=<?php echo $genero->ID; ?>" class="ui green button"><?php echo $genero->NOMBRE; ?></a>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include './inc/06-scripts-users.php'; ?>

</body>

</html>