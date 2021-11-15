<?php
require_once "include/Producto.php";
require_once "include/User.php";
require_once "include/Sesion.php";
require_once "include/Login.php";
Sesion::iniciar();
if (!Login::UsuarioEstaLogueado())
{
  header("Location:loginform.php");
}

if (Sesion::existe('cesta'))
{   $cesta= array();
    $u= Sesion::leer('usuario');
    echo $u->getname()."<br>";
    $cesta = Sesion::leer('cesta');
    foreach ($cesta as $p)
    {
        echo $p->getnombre()."<br>";
    }
}
echo "<a href='productos.php'> Volver a Productos</a><br>";
echo "<a href='VaciarCesta.php'> Vaciar Cesta</a><br>";
echo "<a href='logoff.php'> Logoff </a>"
?>
