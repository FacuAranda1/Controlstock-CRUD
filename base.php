<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock Indumentaria</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<br>
<div class="search">
<form  action="buscar.php" method="POST">
    <input type="text" placeholder="MARCA o PRODUCTO" name="palabra" style="width:500px; height:40px; padding-left:10px;">
    <input type="submit" value="Buscar" name="buscar" style="width:60px; height:46px; font-weight:bold; cursor:pointer;">
</form>
</div>
<br>
<?php
    error_reporting(0);
    include("conexion.php"); 
    
    
    $consulta = mysqli_query($link, "SELECT * FROM indumentaria");

    echo "<table width='100%' border='1' cellpading='2' cellspacing='2'>
    <tr style='font-weight:bold; color:#3a85a3;'>
        <td style='background-color:rgb(209, 169, 94);'>Producto</td>
        <td style='background-color:rgb(209, 169, 94);'>Marca</td>
        <td style='background-color:rgb(209, 169, 94);'>Talle</td>
        <td style='background-color:rgb(209, 169, 94);'>Precio</td>
        <td style='background-color:rgb(209, 169, 94);'>Cantidad</td>
        <td style='background-color:rgb(209, 169, 94);'>Mas</td>
    </tr>";

    while ($row = mysqli_fetch_row($consulta)){
    
        echo "<tr>

        <td>$row[1]</td>
        <td>$row[2]</td>
        <td>$row[3]</td>
        <td>$row[4]</td>
        <td>$row[5]</td>
        <td><a href='edit.php?id=$row[0]'>Editar</a>/ <a href='borrar.php?id=$row[0]'>Borrar</a> / <a href='info.php?id=$row[0]'>+Info</a></td>
</tr>";    
}
echo "</table>";
echo "<br>";
echo "<div class='texto-rojo'>";
echo $_GET['mensaje'];
echo "</div>";
?>

<a class="a-index" href="index.php">Volver al menu</a>
</body>
</html>