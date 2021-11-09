<?php

function valida(){

    if(isset($_POST["sumar"])){

        if(is_numeric($_POST["numero1"]) && is_numeric($_POST["numero2"])){

            return true;
        }
        else{
            return false;
        }
    }

}

if (valida()){

    $numero1=$_POST["numero1"];
    $numero2=$_POST["numero2"];
    $suma= $numero1+$numero2;
        echo $suma;


}
else{
    header("Location:formulario.html");
}


?>