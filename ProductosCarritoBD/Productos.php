<?php
require_once('include/GBD.php');
require_once('include/Sesion.php');
require_once "include/Login.php";
// Creamos una función para mostrar el listado de todos los productos 

function creaFormularioProductos()
{
 
	$productos = DB::obtieneProductos();
	foreach ($productos as $p)
  {
		$c= $p->getcodigo();
		$nc= $p->getnombrecorto();
		$PVP= $p->getPVP();
		// Creamos el formulario en HTML para cada producto
		echo "<br><p><form id='$c' action='productos.php' method='post'>";
        // Metemos ocultos los datos de los productos
        echo "<input type='hidden' name='cod' value='".$c."'/>";
        echo "<input type='hidden' name='nombre' value='".$nc."'/>";
        echo "<input type='hidden' name='precio' value='".$PVP."'/>";
        echo "<input type='submit' name='enviar' value='Añadir'/>";
        echo " $nc: ";
        echo $PVP." euros.";
        echo "</form>"; 
        echo "</p>";
	}        
}

Sesion::iniciar();
if (!Login::UsuarioEstaLogueado())
{
  header("Location:loginform.php");
}
DB::conecta();
if (isset($_POST['enviar']))
{ 
  if (Sesion::existe('cesta'))
  $cesta= Sesion::leer('cesta');
  else
   $cesta=array();
  
  $cesta[$_POST['cod']] = DB::obtieneProducto($_POST['cod']);
  Sesion::escribir('cesta',$cesta);

}

?>

<!DOCTYPE html>
<!-- Desarrollo Web en Entorno Servidor -->
<!-- Tema 5 : Programación orientada a objetos en PHP -->
<!-- Ejemplo Tienda Web: productos.php -->
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Listado de Productos</title>
  </head>

<body class="pagproductos">

<div id="contenedor">
  <div id="encabezado">
    <h1>Listado de productos  <?php echo Sesion::leer('usuario')->getname() ?></h1>
  </div>
    <div id="productos">
      <?php		CreaFormularioProductos();  ?>
  </div>
  <div id="EnlaceCesta">
    <a href="Cesta.php"> Ver Cesta </a>
  </div>
  <br class="divisor" />
  <div id="pie">
          
  </div>
</div>
</body>
</html>