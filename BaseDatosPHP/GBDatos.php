<?php


    class BD{

        private static $conex;

        public static function IniciaConex(){
            try{
                self::$conex= new PDO('mysql:host=localhost;dbname=tienda', 'root', '');
              echo "Hola";
            }
            catch (Exception $e) {
                echo $e;
            }
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