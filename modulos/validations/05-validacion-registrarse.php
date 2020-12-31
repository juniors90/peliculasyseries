<?PHP
//conexion a la base de datos
include '../inc/config/01-connection.php';

$email = $_POST['email'];
$password = $_POST['password'];
$password1 = $_POST['password1'];

// -----------verificarusuario/registrado----------- //

if (!empty($email)) {
    //  vamos a validar que hayan contraseña de usuarios correcta.
    $sql_validar = ("SELECT COUNT(*) FROM usuarios WHERE EMAIL=?");
    $sentenciaValidar = $dbh->prepare($sql_validar);
    //pasamos los parámetros definidos para ejecutar nuestra sentencia.
    $sentenciaValidar->execute([$email]);

    if ($sentenciaValidar->fetchColumn() == 1) {
        // cuando no se encuentra el usuario y contraseña correspondiente
        die('El usuario a ya ha sido registrado anteriormente...');
    }
}

 
if (empty($email)) {
    die('Ingrese un correo');
} 
if (!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.([a-zA-Z]{2,4})+$/", $email)) {
    die('El EMAIL es incorrecto.');
}

if (!empty($password) || !empty($password1)) {

    if ($password1 !== $password) {            
       die('Repita la contraseña correctamente...');
    }
    $rango = 1;
    $created = date("Y-m-d");
    $password_hash = password_hash($password, PASSWORD_BCRYPT);

    $sql1 = $dbh->prepare("INSERT INTO `usuarios`(`EMAIL`, `PASSWORD`, `RANGO`, `CREATED`) VALUES (?,?,?,?)");
    $contador = $sql1->execute([$email, $password_hash, $rango, $created]);

    if ($contador === TRUE) {
        echo 'Usuario Ingresado';
        header('Refresh: 5; URL=../01-login.php');
    } else {
        echo 'ERROR';
    }
} 


?>