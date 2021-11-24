<?php

class Usuario {
    protected $id;
    protected $correo;
    protected $nombre;
    protected $apellidos;
    protected $contraseña;
    protected $fecha_nac;
    protected $rol;
    protected $foto;
    protected $activo;

     
    
    public function getid() {return $this->id; }
    public function getemail() {return $this->correo; }
    public function getname() {return $this->nombre; }
    public function getApellidos() {return $this->apellidos; }
    public function getpassword() {return $this->contraseña; }
    public function getfecha_nac() {return $this->fecha_nac; }
    public function getroles() {return $this->rol; }
    public function getimagen() {return $this->foto; }
    public function getactivo() {return $this->activo; }
    
    
    
    public function __construct($row) {
        $this->id = $row['id'];
        $this->correo = $row['correo'];
        $this->nombre = $row['nombre'];
        $this->apellidos = $row['apellidos'];
        $this->contraseña = $row['contraseña'];
        $this->fecha_nac = $row['fecha_nac'];
        $this->rol = $row['Rol'];
        $this->foto= $row['foto'];
        $this->activo = $row['activo'];
        
    }
}

?>