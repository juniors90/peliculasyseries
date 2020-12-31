<?php
include "./inc/config/01-connection.php";
include "./inc/config/03-variables.php";
$pageTitle = $mostrarPeliculas;
include "./inc/01-layout.php";

$id = $_GET['id'];
$sql1 = 'SELECT p.ID, p.NOMBRE, p.DESCRIPCION, p.ANIO FROM `peliculas` p JOIN `rela_peli_generos` r ON p.ID = r.RELA_PELICULAS WHERE r.RELA_GENEROS=' . $id;
$show_p = $dbh->query($sql1);
$resultados = $show_p->fetchAll(PDO::FETCH_OBJ);
$conta = 1;

?>

<body>
    <!-- top nav -->
    <?php include "./inc/04-navbar-users.php"; ?>
    <!-- top nav -->

    <div class="pusher">
        <div class="main-content">
            <div class="ui grid stackable padded">
                <div class="column">
                    <table class="ui celled striped table">
                        <thead>
                            <tr>
                                <th>
                                    #
                                </th>
                                <th>
                                    Películas
                                </th>
                                <th>
                                    Descripción
                                </th>
                                <th>
                                    Año
                                </th>
                                <th>
                                    acciones
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($resultados as $peli) { ?>
                                <tr>
                                    <td>
                                        <b><?php echo $conta;
                                            $conta++ ?></b>
                                    </td>
                                    <td>
                                        <a href="09-detalle-pelicula.php?id=<?php echo $peli->ID; ?>"><i class="tv teal icon"></i> <?php echo $peli->NOMBRE; ?></a>
                                    </td>
                                    <td><?php echo $peli->DESCRIPCION; ?></td>
                                    <td><i class="calendar icon"></i> <?php echo $peli->ANIO; ?></td>
                                    <td>
                                        <a class="ui labeled icon button" href="08-editar-peliculas.php?id=<?php echo $peli->ID; ?>">
                                            <i class="edit icon"></i>
                                            Editar
                                        </a>
                                        <a class="ui right labeled icon button" href="07-eliminar.php?id=<?php echo $peli->ID; ?>">
                                            <i class="trash icon"></i>
                                            Eliminar
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php include './inc/06-scripts-users.php'; ?>

</body>

</html>