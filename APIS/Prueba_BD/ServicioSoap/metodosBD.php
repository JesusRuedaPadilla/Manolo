<?php
class metodosBD
{
    private static $conex;

        /**
     * @soap
     *
     * @return array
     */
    public static function obtieneUsuarios()
    {

      try {
         self::$conex= new PDO('mysql:host=localhost;dbname=autoescuela', 'root', '');
        //  return true;
         $sql="SELECT correo, contrasena  FROM usuarios";
         $res= self::$conex->query($sql);
         $vector=array();
         while ($registro = $res->fetch(PDO::FETCH_ASSOC)) 
         {
             
            $vector[]=$registro;
             
             
         }
         // $JSON=json_encode($vector);
         return $vector;

     } catch (\Throwable $th) {
         return false;
     }
      //   GBDatos::IniciaConex();
      
    
    }
    

}