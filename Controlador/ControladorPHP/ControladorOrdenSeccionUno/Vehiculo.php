<?php
declare(strict_types=1);

class Vehiculo {
    
    private $fecha;
    private $idEmpresa;
    private $empresa;
    private $placa;
    private $pkVehiculo;
    private $numeroInterno;
    private $nombreCompleto;
    private $numeroCelular;
    private $version;
    
    public function __construct(){
       
    }
    public function vehiculoCompleto(string $fecha, int $idEmpresa, string $empresa,string $placa, string $numeroInterno, int $pkVehiculo,string $numeroCelular, string $nombreCompleto, string $version) {
        $this->fecha= $fecha;
        $this->idEmpresa=$idEmpresa;
        $this->empresa=$empresa;
        $this->placa=$placa;
        $this->pkVehiculo= $pkVehiculo;
        $this->numeroInterno=$numeroInterno;
        $this->nombreCompleto=$nombreCompleto;
        $this->numeroCelular=$numeroCelular;
        $this->version= $version;
    }
    
    public function vehiculoNombreCelular(string $nombreCompletoVehiculo, int $numeroCelularVehiculo){
        $this->nombreCompleto= $nombreCompletoVehiculo;
        $this->numeroCelular= $numeroCelularVehiculo;
    }
    
    public function __get($name){
       return $this->$name;
    }
    
    public function __set($name, $value){
        $this->$name= $value;
    }
    
    public function __destruct(){
        
    }
    
}
