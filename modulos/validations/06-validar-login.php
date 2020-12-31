<?php
session_start();
//conexion a la base de datos
include '../inc/config/01-connection.php';

$email = $_POST['email'];
$password = $_POST['password'];
$password_hash = password_hash($password, PASSWORD_BCRYPT);

$consulta1 = 'SELECT `EMAIL`, `PASSWORD`, `RANGO` FROM `usuarios` WHERE `EMAIL` = :email AND `PASSWORD` = :password';
$verificar = $conexion->prepare($consulta1);
$verificar->execute(array(":email" => $email, ":password" => $password_hash));


if($verificar->rowCount() == 1){
    $datos = $verificar->fetch(PDO::FETCH_OBJ);
    $_SESSION["email"] = $datos->email;
    echo "Sesion iniciada";
    header ('Location: 05-peliculas.php');
} else {
    echo "El usuario no existe";
}

?>