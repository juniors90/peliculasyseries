<?php
include "./inc/config/01-connection.php";
include "./inc/config/03-variables.php";
$pageTitle = $mostrarPeliculas;
include "./inc/01-layout.php";

$sql1 = 'SELECT * FROM `peliculas`';
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
                    <table class="ui celled table" style="width:100%" id="DataTablesPeliculas">
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
                                    Acciones
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
                                    <td class="ui center aligned">
                                        <a class="ui green labeled icon button" href="08-editar-peliculas.php?id=<?php echo $peli->ID; ?>">
                                            <i class="edit icon"></i>
                                            Editar
                                        </a>
                                        <a class="ui red right labeled icon button" href="07-eliminar.php?id=<?php echo $peli->ID; ?>">
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
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.semanticui.min.js"></script>
    <script>
        var table = $('#DataTablesPeliculas').DataTable({
            language: {
                "decimal": "",
                "emptyTable": "No hay información",
                "info": '<h4 class="ui green">Mostrando _START_ a _END_ de _TOTAL_ Peliculas</h4>',
                "infoEmpty": '<h4 class="ui green header">Mostrando 0 a 0 de 0 Peliculas</h4>',
                "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Entradas",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": '<button class="ui medium green basic button"><i class="plus icon"></i>Buscar Pelicula </button>',
                "zeroRecords": "Sin resultados encontrados",
                "paginate": {
                    "first": '<h4 class="ui green header">Primero</h4>',
                    "last": '<h4 class="ui green header">Ultimo</h4>',
                    "next": '<h4 class="ui green header">Siguiente</h4>',
                    "previous": '<h4 class="ui green header">Anterior</h4>'
                }
            },
        });
        $(document).ready(function() {
            $('#DataTablesFarmacia').DataTable();
        });
    </script>

</body>

</html>