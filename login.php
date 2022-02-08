<?php
error_reporting(0);
$error =$_GET['msj'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login / Indumentaria loremipsum</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body style="background-image: url(fondo.png);">
    <!-- <div class="caja-login"> -->
    <h1 style='color:orange';>Ingreso a Stock</h1>
    <div class="form-login">
    <form  name='login' action='loginverif.php' method='POST'>
        <input type='text' name='username' placeholder="Ingrese el usuario">
        <input name='password' type='password'  placeholder="Ingrese la contraseña">
        <div class="error">
        <?php echo "<h3>$error</h3>" ?>
        </div>
        <input type="submit" value='Ingresar' name='btnIniciar'>
    </form>
    </div>
    <!-- </div> -->
    
</body>
</html>