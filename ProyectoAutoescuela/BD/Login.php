<?php
require_once "Usuario.php";
require_once "Sesion.php";
require_once "GBDatos.php";
class Login
{
    public static function Identifica(string $usuario,string $contrasena)
    {
        if(self::Existeusuario($usuario,$contrasena))
        {
            Sesion::iniciar();
            Sesion::escribir('login',$usuario); 
        
            return true;
        }
        return false;
    }

    private static function ExisteUsuario(string $usuario,string $password=null)
    {
        DB::conecta();
       return DB::existeusuario($usuario,$password);
    }

    public static function UsuarioEstaLogueado()
    {
        if(Sesion::leer('login'))
        {
            return true;
        }
        elseif(self::ExisteUsuario($_COOKIE['recuerdame']))
        {
            Sesion::iniciar();
            Sesion::escribir('login',$contrasena);
            return true;
        }
        return false;
    }
}