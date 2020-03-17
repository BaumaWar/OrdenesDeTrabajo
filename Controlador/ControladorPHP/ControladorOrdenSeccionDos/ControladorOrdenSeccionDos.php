<?php
require_once '../Modelo/ModelOrdenSeccionDos/ModelOrdenSeccionDos.php';
require_once '../Controlador/ControladorPHP/ControladorOrdenSeccionDos/IngresoSalida.php';

class ControladorOrdenSeccionDos extends ModelOrdenSeccionDos{ 
    private $ObjModel;
    
    public function __construct() {
        $this->ObjModel= new ModelOrdenSeccionDos();                
    }
    
    public function crear(){
        require_once '../Vista/FormularioOrdenesDePedidoSeccionDos/crearOrden.html.php';
    }
    public function crearPostInsert(){
        
        $seccionUnoId= $_REQUEST['seccionUnoId'];
        $seccionUnoId= (int)$seccionUnoId;
        
        $horaDeEntrada= $_REQUEST['horaDeEntrada'];
        $horaDeSalida= $_REQUEST['horaDeSalida'];
        $numeracion= $_REQUEST['numeracion'];
        $sello= $_REQUEST['sello'];
        $lucesInternas= $_REQUEST['lucesInternas'];
        $lucesExternas= $_REQUEST['lucesExternas'];
        $aperturaDePuerta= $_REQUEST['aperturaDePuerta'];
        $pito= $_REQUEST['pito'];
        $golpes= $_REQUEST['golpes'];
        $rayones= $_REQUEST['rayones'];
        
        $ObjIngresoSalida= new IngresoSalida($seccionUnoId ,$horaDeEntrada, $horaDeSalida, $numeracion, $sello, $lucesInternas, $lucesExternas, $aperturaDePuerta, $pito, $golpes, $rayones);
        
        $this->ObjModel->sqlInsertSeccionDos($ObjIngresoSalida);
        
    }
    
    public function __destruct() {
        
    }
    
}