<?php 
    $error="";
    if (isset($_POST['enviar']))
    {
        $path="http://www.cartociudad.es/geocoder/api/geocoder/findJsonp?q=Calle%20Iglesia%205,%20Madrid&type=portal&portal=5&outputformat=geojson";
        $fichero=file_get_contents($path);
        $fichero=substr($fichero,9,-1);
        $valor=json_decode($fichero);
        // var_dump($valor);
        $lat= $valor->properties->lat;
        $lat=substr($lat,0,15);
        var_dump($lat);
        // $lng=$valor[4];
      
        // echo $valor;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device0-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        
        <form action="" method="post">
        <!-- <label for='correo' >Email:</label><br/>
                <input type='text' name='correo' id='correo' maxlength="50" /><br/>
        
                <label for='contrasena' >Contraseña:</label><br/>
                <input type='password' name='contrasena' id='contrasena' maxlength="50" /><br/>
         -->
                <input type='submit' name='enviar' value='Aceptar' />
        </form> 

    </body>
</html>