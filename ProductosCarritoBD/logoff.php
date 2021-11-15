<?php
include "include/Sesion.php";
require_once "include/Login.php";
Sesion::iniciar();
if (!Login::UsuarioEstaLogueado())
{
  header("Location:loginform.php");
}
Sesion::eliminar('login');
Sesion::eliminar('usuario');
Sesion::eliminar('cesta');
Sesion::destruir();
header("Location:loginform.php");
?>