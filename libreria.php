<?php

function tabla_multiplicar ($a,$b){

    for ($c=0; $c<=$b; $c++){

    if($c<=9)
    {

        echo $_GET['a']." x ". "&nbsp"."&nbsp" .$c . " = ". $_GET['a']*$c. "<br>";
    }

    else
    {
        echo $_GET['a']." x ".$c . " = ". $_GET['a']*$c. "<br>";
    }
        
    }


}


function funcion_estilosa($texto, $num=0){
    switch($num){
        case 1:
            return "<h1> $texto </h1>";
            break;
        case 2:
            return "<h2>$texto </h2>";
            break;
        case 5:
            return "<h5>$texto</h5>";
            break;
        case 6:
            return "<h6>$texto</h6>";
            break;

        default:
            return $texto;
    }      
}



?>