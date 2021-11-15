<?php

//echo $_SERVER['DOCUMENT_ROOT'];
  // include("$_SERVER['DOCUMENT_ROOT']."/libreria.php"");

  // $modulos1 = array(0 => "Programación", 1 => "Bases de datos", "texto" => "Desarrollo web en entorno servidor");
  //  echo $modulos1 ["texto"];

//for ($i=0;$i<=20;$i++){


 // $rand = range(1, 100);
   // shuffle($rand);
  
 // }

 // for ($i=0;$i<=20;$i++){
  //  echo $numero_aleatorio = rand(1,100). "<br>";

  //}
 /*
   $i = 0;
 
 while($i<=20){
    $num = Rand(1, 100);
    $c = 0;
    
  
    if($c==0){
      $arr[$i] = $num."<br>";
      $i++;
     
    }
   

  }
    print_r($arr);
  */

 // Forma del profesor:
/*
   $a=array();
    while (count ($a)){
      $n=random_int (1,100);
      if(!in_array($n,$a)){
        $a[]=$n;
      }
    

    }
   echo ($a);

   //var_dump($a);

 /* mi_var_dump($a);


   function mi_var_dump($a)
   {
       echo $_SERVER['DOCUMENT_ROOT'];
       echo $_SERVER['PHP_SELF'];
       $a= array();
       for($i=0;$i<count($a);$i++){
  
           $a[$i]=$n."<br>";
           
       }
      echo ($a)."<br>";
   }

*/





// sort_numeric -----> compara numeros
  // echo random_int(1,100);
   //Investigar generacion de numero aleatorio entre el 1 y el 100, y rellenamos un array de 20 casillas con numero del 1 al 100 
   //aleatorios, sin que se repita ninguno y pintar el array por pantalla.
  
// count(a) te dice cuantos elementos tiene el array.
//Funciones de array en php.

// EJERCICIO:
//array con lista de nombres (array con nombre roma), otro array con nombre polonia, otro array llamado dublin.
// en dublin hay una lista de candidatos (profesores) que quieren ir a dublin.
// quitar de la lista los que ya han ido a polonia y a roma.

/*
$roma = array("Candidato 1" ==> "PEPE", "Candidato 2" ==> "Foronda", "Candidato 3" ==> "Manolo");

foreach ($roma as $modulo) {
  print "Módulo: ".$modulo. "<br />"
}
   function(){



   }



*/

// dar la clave y el valor 
// array_count_values --- Cuenta las veces que aparece un valor en un array
$keys = array("Antonio", "PEPE", "Manolo", "Foronda");
$a = array_fill_keys($keys, 'Roma');
print_r($a);

$roma=array("1","2","3","4","5","6","7","8","9");
$polonia=array("10","11","12","13","14","15","16","17");
$dublin=array("1","3","7","13","16", "18","19","20","21","22","23","24","25");

$dublinBueno= array_diff($dublin, $roma,$polonia);
print_r($dublinBueno);

?>