<?php

if (isset($_POST['enviar'])){

    $a=$_GET['a'];
    $b=$_GET['b'];

    $c=$a+$b; 
    echo $c;
}
 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

    <input type='text' name='a' id='a' maxlength="50" /><br/>
    <input type='text' name='b' id='b' maxlength="50" /><br/>

    <input type='submit' name='enviar' value='Aceptar' />

    
</body>
</html>