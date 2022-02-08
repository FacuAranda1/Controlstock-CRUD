<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indumentaria Lorem</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<br>    

<?php
error_reporting(0);
include("conexion.php");


if($_POST['buscar'])
?>


<table  width="100%" border="1" align="center" cellpading="0" cellspacing="0">

        <tr style="color:#3a85a3; font-weight:bold;">
            <td style="background-color:rgb(209, 169, 94);" width="80" align="center"><strong>Producto</strong></td>
            <td style="background-color:rgb(209, 169, 94);" width="80" align="center"><strong>Marca</strong></td>
            <td style="background-color:rgb(209, 169, 94);" width="40" align="center"><strong>Talle</strong></td>
            <td style="background-color:rgb(209, 169, 94);" width="40" align="center"><strong>Precio</strong></td>
            <td style="background-color:rgb(209, 169, 94);" width="40" align="center"><strong>Stock</strong></td>
            <td style="background-color:rgb(209, 169, 94);" width="40" align="center"><strong>Descripcion</strong></td>
            <td style="background-color:rgb(209, 169, 94);" width="40" align="center"><strong>Mas</strong></td>
       </tr> 
    <?php

    $buscar = $_POST["palabra"];

    $consulta= mysqli_query($link, "SELECT * FROM indumentaria WHERE producto like '%$buscar%' or marca like '%$buscar%'");
    
    while($row = mysqli_fetch_row($consulta)) {
        echo "<tr>

            <td align='center'>$row[1]</td>
            <td align='center'>$row[2]</td>
            <td align='center'>$row[3]</td>
            <td align='center'>$row[4]</td>
            <td align='center'>$row[5]</td>
            <td align='center'>$row[6]</td>
            <td><a href='edit.php?id=$row[0]'>Editar</a>/ <a href='borrar.php?id=$row[0]'>Borrar</a> / <a href='info.php?id=$row[0]'>+Info</a></td>
        </tr>";
    }
    echo "</table>";
    ?>
<br>
<a  class="a-index" href="base.php">Volver</a>
</body>
</html>