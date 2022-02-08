<?php
error_reporting(0);
include("conexion.php");

$id = $_GET['id'];

$borrar = mysqli_query($link, "DELETE FROM indumentaria WHERE id='$id'");

if($borrar){
    header("Location: base.php?id=$id&mensaje=Se borro el producto");
}else{
    echo "Hubo un error.";
}


?>