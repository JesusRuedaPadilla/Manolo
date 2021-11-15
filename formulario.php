<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>

<body>

<form action="procesa.php" method="post">

    <p> Nombre <input type="text" name="nombre" id="nombre"> 
</p>
    
<p>
    Apellidos <input type="text" id="apellidos" name="apellidos">
    </p>

    <p>
    DNI <input type="text" id="dni" name="dni">
    </p>

    <p>
    Fecha Nac <input type="text" id="fecha_nac" name="fecha_nac">
    </p>

    <p>
    Correo Electrónico <input type="text" id="correo" name="correo">
    </p>
    <p>

    <h4>
        Modulos Profesionales
</h4>
     Desarrollo aplicaciones Web<input type="checkbox" name="modulos[]" value="DAW" />

   
    <p>
    </p>
     Mecatronica Industrial<input type="checkbox" name="modulos[]" value="MIA" />

   
 <p>
 Ingenieria Informatica<input type="checkbox" name="modulos[]" value="Informatica" />

   
<p>

    <input type="submit" value="Enviar" name="enviar" id="enviar">

     


</form>

</body>
</html>
 