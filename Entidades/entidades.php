<?php

class Alumno{

private $nombre;
private $apellidos;
private $dni;
private $fecha_nac;
private $correo;

public function __set($dni,$dni){
    if(property_exists($this,$dni)){
        $letra = substr($dni, -1);
        $numeros = substr($dni, 0, -1);

        if (substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros%23, 1) == $letra && strlen($letra) == 1 && strlen ($numeros) == 8 ){
         return 'valido';
        }
        $this->$dni=$dni;
    }

    }

public function __get($dni){
    $this->$dni=$dni;
}
    

}







?>