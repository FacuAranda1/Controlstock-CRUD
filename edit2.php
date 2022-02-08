<?php
include("conexion.php");

$id=$_POST['id'];

$producto=$_POST['producto'];
$marca=$_POST['marca'];
$talle=$_POST['talle'];
$precio=$_POST['precio'];
$cantidad=$_POST['cantidad'];
$descripcion=$_POST['descripcion'];


$actualiza = mysqli_query($link, "UPDATE indumentaria SET producto='$producto',marca='$marca',talle='$talle',precio='$precio',cantidad='$cantidad',descripcion='$descripcion' WHERE id='$id'");

if($actualiza){
    header("Location: edit.php?id=$id&mensaje=Producto Actualizado");
}else{
    echo "Error en la carga del producto";
}
?>