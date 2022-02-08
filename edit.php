<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar producto</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<?php
error_reporting(0);
include("conexion.php");

$id = $_GET['id'];

$consulta = mysqli_query($link, "SELECT * FROM indumentaria WHERE id='$id'");

echo "<form action='edit2.php' method='post' style='width:340px; height: 440px; background: #e6e6e6; border-radius:8px;box-shadow:0 0 40px -10px #000;margin:calc(35vh - 220px) auto;padding:20px 30px;max-width:calc(100vw - 40px);box-sizing:border-box;
position:relative;'>";
echo "<h2 style='color:#3a85a3;'>Actualice el producto</h2>";
echo "<br>";
while ($row = mysqli_fetch_row($consulta)){

    echo "<input name='id' type='hidden' value='$row[0]' />";

    echo "<table width='100%' border='0' align='center' padding-top='10px'>";
    echo "<tr> <td><b style='color:#3a85a3;'>Producto</b> <input type='text' name='producto' value='$row[1]'/><br></td></tr>";
    echo "<tr> <td><b style='color:#3a85a3;'>Marca</b> <input type='text' name='marca' value='$row[2]'/><br></td></tr>";
    echo "<tr> <td><b style='color:#3a85a3;'>Talle</b> <input type='text' name='talle' value='$row[3]'/><br></td></tr>";
    echo "<tr> <td><b style='color:#3a85a3;'>Precio</b> <input type='text' name='precio' value='$row[4]'/><br></td></tr>";
    echo "<tr> <td><b style='color:#3a85a3;'>Cantidad</b> <input type='text' name='cantidad' value='$row[5]'/><br></td></tr>";
    echo "<tr> <td><b style='color:#3a85a3;'>Descripcion</b> <textarea style='resize:none' name='descripcion' cols='40' rows='5'> $row[6]</textarea><br></td></tr>";
}
echo "<tr> <td><input style='cursor:pointer'; type='submit' value='Actualizar'/></td></tr>";
echo "</table>";
echo $_GET['mensaje'];
echo "<br>";

echo "</form>";
// echo "<br>";
echo "<a class='a-index' href='base.php'>Volver</a>";

echo "<br><br>";


?>
</body>
</html>