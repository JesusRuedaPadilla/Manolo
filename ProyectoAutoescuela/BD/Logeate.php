<?php
require_once "Usuario.php";
require_once "Login.php";
require_once "Sesion.php";
    // Comprobamos si ya se ha enviado el formulario
    $error="";
    if (isset($_POST['enviar']))
    {
        $usuario = $_POST['usuario'];
        $Password = $_POST['password'];
       
        if (empty($usuario) || empty($Password)) 
            $error = "Debes introducir un nombre de usuario y una contraseña";
        else 
        {
            // Comprobamos si existe el usuario. Si existe se crea la variable de seion login
                        
            Login::Identifica($usuario,$password,false);
            // Si el usuario es identificado se crea la variable de sesion login
            if  (Login::UsuarioEstaLogueado())
            {
                // Creamos la variable de sesion uuario de tipo User
                // La podiamos haber creado Login::Identifica 
                // Redirigimos a la lista de productos
                Sesion::escribir('usuario', DB::obtieneUsuario($usuario,$Password));
                header("Location: Usuario.php");                    
            }
           
        }
    }
            
    
   
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  
  <title>Login Tienda Web</title>
  <link rel="stylesheet" href="./css/estilos.css">
  </head>

<body>
    <div id='login'>
    <form action='loginform.php' method='post'>
    
       
        <div>
            <?php echo $error; ?>
        </div>
        <div>
            <label for='usuario' >Usuario/email:</label><br/>
            <input type='text' name='usuario' id='usuario' maxlength="50" /><br/>
        </div>
        <div>
            <label for='password' >Contraseña:</label><br/>
            <input type='password' name='password' id='password' maxlength="50" /><br/>
        </div>

        <div>
           <a href="">¿Has olvidado tu contraseña?</a>
        </div>

        <div>
            <input type='submit' name='enviar' value='Aceptar' />
        </div>
    
    </form>
    </div>
</body>
</html>