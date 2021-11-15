<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="/BaseDatosPHP/php/BaseDatosphp.php"></script>
    <title>Document</title>
</head>
<body>

    <form action="" method="post">
        <input type="button" value="Mostrar listado" name="mostrar" onclick="location='BaseDatosphp.php'">
        <p>Nombre</p><input type="text" name="nombre" id="nombre">
        <p>Correo</p><input type="text" name="correo" id="correo">
        <p>Contraseña</p><input type="password" name="contraseña" id="contraseña">
        <p>Rol</p> <select name="rol" id="rol">
            <option value="admin">Administrador</option>
            <option value="cliente">Cliente</option>
        </select>
        <input type="submit" value="Añadir" name="añadir">

    <?php

        require_once('Sesion.php');

        if(isset($_POST['añadir'])){
            
            Sesion::IniciaConex();


        }



    ?>

        
    </form>


</body>
</html>