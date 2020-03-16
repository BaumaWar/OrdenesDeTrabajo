<?php
declare (strict_types=1);

class IngresoSalida{
    
    private $seccionUnoId;
    private $horaDeEntrada;
    private $horaDeSalida;
    private $numeracion;
    private $sello;
    private $lucesInternas;
    private $lucesExternas;
    private $aperturaDePuerta;
    private $pito;
    private $golpes;
    private $rayones;
    
    public function __construct(int $seccionUnoId, string $horaDeEntrada, string $horaDeSalida, string $numeracion, string $sello, int $lucesInternas, int $lucesExternas,int $aperturaDePuerta, int $pito , int $golpes, int $rayones) {
        $this->seccionUnoId= $seccionUnoId;
        $this->horaDeEntrada= $horaDeEntrada;
        $this->horaDeSalida=  $horaDeSalida;
        $this->numeracion= $numeracion;
        $this->sello= $sello;
        $this->lucesInternas= $lucesInternas;
        $this->lucesExternas= $lucesExternas;
        $this->aperturaDePuerta= $aperturaDePuerta;
        $this->pito= $pito;
        $this->golpes= $golpes;
        $this->rayones= $rayones;
    }
    
    public function __get($name){
        return $this->$name;
    }
    
    public function __set($name, $value) {
        $this->$name= $value;
    }
    
    public function __destruct() {
        
    }
    
}
