<?php
declare(strict_types=1);

class Propietario{
   
    private $nombreCompleto;
    private $numeroCelular;
    
    public function __construct(string $nombreCompleto, string $numeroCelular) {
        $this->nombreCompleto= $nombreCompleto;
        $this->numeroCelular= $numeroCelular;
    }
    
    public function __set($name, $value) {
        $this->$name= $value;
    }
    
    public function __get($name){
        return $this->$name;
    }
    
    public function __destruct() {
        
    }
}