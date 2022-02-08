<?php


$usuario="indumentaria";
$pass="123";

$username=$_POST['username'];
$password=$_POST['password'];

if ($username==$usuario && $pass==$password) {


    session_start();
    $_SESSION["nombre_user"] = $username;

    header("Location: index.php");

}else{
    header("Location: login.php?msj=Los datos de acceso no son correctos");
}

?>