<?php

class Examen_Terminado {
    protected $id;
    // protected Examenes $id_examen;
    // protected Usuarios $id_usuarios;
    protected $fecha;
    protected $calificacion;
    protected $ejecucion;


    // public function set($dni){
    //     $this-> $dni
    
    //     }
    
    // }

    
    
    
    public function getemail() {return $this->email; }
    public function getroles() {return $this->rol; }
    public function getpassword() {return $this->Password; }
    public function getname() {return $this->Nombre; }
    
    public function __construct($row) {
        $this->email = $row['email'];
        $this->roles = $row['rol'];
        $this->password= $row['password'];
        $this->name = $row['nombre'];
        
    }
}

?>