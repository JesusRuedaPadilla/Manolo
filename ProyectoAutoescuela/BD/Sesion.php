<?php
class Sesion
{
    private static $conex;
    public static function IniciaConex(){
    
        self::$conex= new PDO('mysql:host=localhost;dbname=autoescuela', 'root', '');    
   
 }

    public static function leer(string $clave)
    {
        return isset($_SESSION[$clave])?$_SESSION[$clave]:"";
    }

    public static function existe(string $clave)
    {
        return isset($_SESSION[$clave])?true:false;
    }

    public static function escribir($clave,$valor)
    {
        $_SESSION[$clave]=$valor;
    }

    public static function eliminar($clave)
    {
        unset($_SESSION[$clave]);
    }

    public static function destruir()
    {
        session_destroy();
    }
}