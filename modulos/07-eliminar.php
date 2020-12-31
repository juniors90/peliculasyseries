<?php
include "./inc/config/01-connection.php";
include "./inc/config/03-variables.php";
$pageTitle = $mostrarPeliculas;
include "./inc/01-layout.php";

$id = $_GET['id'];

$sql2 = "DELETE FROM `peliculas` WHERE ID = :id";

$eliminar = $dbh->prepare($sql2);

$eliminar->execute(array(":id"=>$id));
header('Refresh: 5; URL=05-peliculas.php');



