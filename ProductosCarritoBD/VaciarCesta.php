<?php
include "include/Sesion.php";
include "include/Login.php";
Sesion::iniciar();
if (!Login::UsuarioEstaLogueado())
{
  header("Location:loginform.php");
}
Sesion::eliminar('cesta');
header("Location:productos.php");
?>
