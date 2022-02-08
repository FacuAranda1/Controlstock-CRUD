<?php
session_start();

if (isset($_SESSION['nombre_user'])) {
    echo "<html>";

    echo "<head>";
        echo "<meta charset='UTF-8'>";
        echo "<meta http-equiv='X-UA-Compatible' content='IE=edge'>";
        echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
        echo "<title>Indumentaria Loremipsum</title>";
        echo "<link rel='stylesheet' href='estilos.css'>";
    echo "</head>";


    echo "<body style='background-image: url(fondo.png);'>";
    echo "<h2 style='color:orange';>BIENVENIDO</h2>";
    echo "<h3>¿Qué desea hacer?</h3>";
    echo "<a class='a-index' href='base.php'>Ver stock</a>";
    echo "<a class='a-index' href='agregar.php'>Agregar un producto</a>";
    echo "</body>";

    echo "</html>";

    echo "<a class='a-index' href='logout.php'>Salir</a>";

}else{
    echo "<h4 style='font-size:21px; text-align:center; padding-top:10px;'>Tu no estas autetificado. Ingresa tus datos <a href='login.php'>Aqui</a></h4>"
    ;
}
?>