<?php
require_once('Usuario.php');
    class BD{

        private static $conex;

        public static function IniciaConex(){
    
               self::$conex= new PDO('mysql:host=localhost;dbname=tienda', 'root', '');
               
        }

        public static function existeusuario($usuario,$Password)
        {
    
            $sql = "SELECT * FROM tech.user " .
                "WHERE email='$usuario' " .
                "AND password='" .$Password. "'";
                
                if($resultado = self::$conex->query($sql))
                 {
                    $fila = $resultado->fetch();
                    return ($fila != null);
                 }             
        }
    
        public static function obtieneUsuario($email,$Password):User
        {
            
            $res= self::$conex->query("select * from tech.user where email ='$email' and password='$Password'");
            while ($registro = $res->fetch()) 
            {
                $u=new User(array('email'=>$registro['email'],
                'password'=>$registro['password'],'nombre'=>$registro['nombre']));
                
            }
            return $u;
        
        }

        // $Conexion= new PDO('mysql:host=localhost;dbname=tienda', 'root', '');
        // $resultado= $Conexion->query("SELECT * FROM USERS");
    
        // while($registro=$resultado->fetch(PDO::FETCH_OBJ)){
    
        //     echo " Nombre : ".$registro->Nombre."<br>".
        //     " Correo: ".$registro->Correo."<br>"."Contraseña : ".
        //     $registro->Password."<br>"." Roles : ".$registro->Roles."<br>"."<br>";
    
        // }
    
    }

    
  
   


?>