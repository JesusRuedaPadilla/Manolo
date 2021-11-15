<?php

include "libreria.php";
if (isset($_GET['a']))
{
    return tabla_multiplicar($_GET['a'],15);
  
}
else {
    return "algo falla";
}


?>
 