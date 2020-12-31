<?php
include '../inc/config/01-connection.php';

$peliculas = $_POST['pelicula'];
$descripcion = $_POST['descripcion'];
$anio = $_POST['anio'];

$sql = 'INSERT INTO `peliculas`(`NOMBRE`, `DESCRIPCION`, `ANIO`) VALUES (:pelicula,:descripcion,:anio)';

$register_p = $dbh->prepare($sql);

$register_p->execute(array(":pelicula"=>$peliculas,":descripcion"=>$descripcion,":anio"=>$anio));

if ($register_p->rowCount()==1) {
    echo 'hola, ejecutó';
    # header('Location:../05-peliculas.php');
    header('Refresh: 5; URL=../05-peliculas.php');
    # header("refresh:5;url=farmaciasadmin.php");
} else {
    echo 'hola, no ejecutó';
}




?>