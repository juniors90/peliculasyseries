<?php
include '../inc/config/01-connection.php';

$peliculas = $_POST['pelicula'];
$descripcion = $_POST['descripcion'];
$anio = $_POST['anio'];
$id = $_POST['ID'];


$sql_update="UPDATE `peliculas` SET `NOMBRE`=?,`DESCRIPCION`=?,`ANIO`=? WHERE `ID`=?";

$update_p = $dbh->prepare($sql_update);
$guardado = $update_p->execute([$peliculas, $descripcion, $anio, $id]);



if ($guardado==true) {
    echo 'hola, actualizó';
    header('Refresh: 5; URL=../05-peliculas.php');
} else {
    echo 'hola, no ejecutó nada';
}

?>