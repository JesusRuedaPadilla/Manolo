<?php

echo $_SERVER['DOCUMENT_ROOT'];
    echo $_SERVER['PHP_SELF']."<br>";


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
 

?>