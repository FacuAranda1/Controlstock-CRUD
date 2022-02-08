<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar producto</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<form  class="formadd" action="agregar.php" method="post" style="width:340px;
    height:440px;background:#e6e6e6;
    border-radius:8px;box-shadow:0 0 40px -10px #000;
    margin:calc(35vh - 220px) auto;padding:20px 30px;max-width:calc(100vw - 40px);
    box-sizing:border-box;
    position:relative;">
<h2 style="color:#3a85a3">Ingrese su producto</h2>
<table width="100%" border="0" align="center" padding-top="10px">
<tr> <td> <input type="text" name="producto" placeholder="Ingrese el producto"/> <br/></td></tr>
<tr> <td> <input type="text" name="marca" placeholder="Ingrese la marca"/> <br/> </td></tr>
<tr> <td> <input type="text" name="talle" placeholder="Ingrese el talle o numero"/> <br/> </td></tr>
<tr> <td> <input type="text" name="precio" placeholder="Ingrese el precio ($)"/> <br/> </td></tr>
<tr> <td><input type="text" name="cantidad" placeholder="Cantidad a ingresar"/> <br/></td></tr>
<tr> <td><textarea style="resize:none" name="descripcion" cols="22" rows="9" placeholder="Descripcion del producto"></textarea> <br/> </td></tr>
<tr> <td><input style="cursor:pointer; color:#3a85a3; font-weight:bold;" type="submit" value="Ingresar Producto"/></td></tr>
</table>
</form>


<a class='a-index' href="index.php">Volver</a>



<?php
error_reporting(0);
include("conexion.php");


$producto =$_POST['producto'];
$marca =$_POST['marca'];
$talle =$_POST['talle'];
$precio =$_POST['precio'];
$cantidad =$_POST['cantidad'];
$descripcion =$_POST['descripcion'];

if (isset($_POST['producto'])) {
    $inserta = mysqli_query($link, "INSERT INTO indumentaria (producto, marca, talle, precio, cantidad, descripcion) VALUES('$producto', '$marca', '$talle', '$precio', '$cantidad', '$descripcion')");

    if($inserta){
        echo "Se ingreso el producto a la base de datos.";
    }else{
        echo "Hubo un error, no se pudo ingresar el producto.";
    }
}

?>

</body>
</html>
