<?php

if (isset($_GET[$a]))
{
    for ($b=0; $b<=10;$b++){
        echo $a + " x " + $b + " = " + $a*$b;
    }
}
else {
    echo "algo falla";
}


?>
 