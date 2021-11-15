<?php

class User {
    protected $id;
    protected $email;
    protected $roles;
    protected $password;
    protected $name;
    
    public function getid() {return $this->id; }
    public function getemail() {return $this->email; }
    public function getroles() {return $this->roles; }
    public function getpassword() {return $this->password; }
    public function getname() {return $this->name; }
    
    public function __construct($row) {
        $this->id = $row['id'];
        $this->email = $row['email'];
        $this->roles = $row['roles'];
        $this->password= $row['password'];
        $this->name = $row['name'];
        
    }
}

?>