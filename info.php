<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoremI / Info producto</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    
<?php
include("conexion.php");

$id = $_GET['id'];

$consulta = mysqli_query($link, "SELECT * FROM indumentaria WHERE id='$id'");

while ($row = mysqli_fetch_row($consulta)){
    echo "<b style='color:#3a85a3;'>Producto:</b> ".$row[1]."</br>";
    echo "<b style='color:#3a85a3;'>Marca:</b> ".$row[2]."</br>";
    echo "<b style='color:#3a85a3;'>Talle:</b> ".$row[3]."</br>";
    echo "<b style='color:#3a85a3;'>Precio:</b> ".$row[4]."</br>";
    echo "<b style='color:#3a85a3;'>Cantidad:</b> ".$row[5]."</br>";
    echo "<b style='color:#3a85a3;'>Descripcion:</b> ".$row[6]."</br>";
}
echo "<a class='a-index' href='base.php'>Volver a la base de datos</a>";

?>


</body>
</html>