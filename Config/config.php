<?php
//clase de conexion a db
class Conexion{
    //propiedades o variables
    private $servername;
    private $user;
    private $password;
    private $dbname;
    
    //metodo de contruccion
    public function __construct(){
        //informacion para la conexion a la BD
        $this->servername = 'localhost';
        $this->user = 'root';
        $this->password = '';
        $this->dbname = 'prueba';
    }
    //metodo o funcion de conexion
    public function connect(){
        
        $conn = new mysqli($this->servername,$this->user,$this->password,$this->dbname);
        return $conn;
        
    }

}