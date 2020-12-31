<?php
include "./inc/config/01-connection.php";
include "./inc/config/03-variables.php";
$pageTitle = $mostrarPeliculas;
include "./inc/01-layout.php";

$id = $_GET['id'];
$sql3 = "SELECT `ID`, `NOMBRE`, `DESCRIPCION`, `ANIO` FROM `peliculas` WHERE ID=:id";
$consultar_peli = $dbh->query($sql3);
$consultar_peli->execute(array(":id"=>$id));


/* $sql4 = "SELECT `ID`, `NOMBRE`, `DESCRIPCION`, `ANIO` FROM `peliculas` WHERE ID=:id";
$consulta = $pdo->prepare($sql4);
$consulta->execute([$id]);
$peliculas = $consulta->fetch(PDO::FETCH_OBJ); */

if ($consultar_peli->rowCount() == 1) {
    # code...
} else {
    die('<b>No existe la película consultada...<b>');
}
