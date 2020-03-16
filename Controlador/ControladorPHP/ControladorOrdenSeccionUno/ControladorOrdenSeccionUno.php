<?php
require_once '../Modelo/ModelOrdenSeccionUno/ModelOrdenSeccionUno.php';
require_once '../Controlador/ControladorPHP/ControladorOrdenSeccionUno/Propietario.php';
require_once '../Controlador/ControladorPHP/ControladorOrdenSeccionUno/Vehiculo.php';

class ControladorOrdenSeccionUno extends ModelOrdenSeccionUno{
    
    private $ObjModel;
    
    public function __construct() {
        $this->ObjModel = new ModelOrdenSeccionUno();
    }

    public function crear() {
        include_once '../Vista/FormularioOrdenesDePedidoSeccionUno/crearOrden.html.php';
        include_once '../Vista/FormularioOrdenesDePedidoSeccionDos/crearOrden.html.php';
        include_once '../Vista/FormularioOrdenesDePedidoSeccionTres/crearOrden.html.php';
        include_once '../Vista/FormularioOrdenesDePedidoSeccionCuatro/crearOrden.html.php';
        include_once '../Vista/FormularioOrdenesDePedidoSeccionCinco/crearOrden.html.php';
        include_once '../Vista/FormularioOrdenesDePedidoSeccionSeis/crearOrden.html.php';
    }
    
    public function crearPostInsert(){
        
        if($_SERVER['REQUEST_METHOD']=='POST'){
            
            $fecha= $_REQUEST['fecha'];
            $empresa= $_REQUEST['empresa'];
            $placa= $_REQUEST['placa'];

            $findGuion= "-";
            $positionGuion= strpos($placa,$findGuion);
            $placaVehiculo= substr($placa, 0, $positionGuion);
            $pkPosition= strpos($placa, $findGuion,$positionGuion+1);
            $pkVehiculo= substr($placa, $pkPosition+1);
            $termine= strlen($pkVehiculo)+1;
            $numeroInterno= substr($placa, $positionGuion+1,-$termine);
            
            $positionGuion= strpos($empresa, $findGuion);
            $tamañoCadena= strlen($empresa);
            
            $idEmpresa= substr($empresa,0,$positionGuion);
            $empresa= substr($empresa, $positionGuion+1);
            
            $nombreCompletoVehiculo= $_REQUEST['nombreCompletoVehiculo'];
            $numeroCelularVehiculo= $_REQUEST['numeroCelularVehiculo'];
            $versionRegisbus= $_REQUEST['version'];
            $nombreCompletoPropietario= $_REQUEST['nombreCompletoPropietario'];
            $numeroCelularPropietario= $_REQUEST['numeroCelularPropietario'];

            $ObjVehiculo= new Vehiculo();
            $ObjVehiculo->vehiculoCompleto($fecha, $idEmpresa, $empresa, $placaVehiculo, $numeroInterno, $pkVehiculo,$numeroCelularVehiculo, $nombreCompletoVehiculo, $versionRegisbus);
            $ObjPropietario= new Propietario($nombreCompletoPropietario, $numeroCelularPropietario);
            $this->ObjModel->sqlInsertSeccionUno($ObjVehiculo, $ObjPropietario);
        
        }else{
            
        }
        
    }
    public function editarPostInsert(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            
            $nombreCompletoVehiculo= $_REQUEST['nombreCompletoVehiculo'];
            $numeroCelularVehiculo= $_REQUEST['numeroCelularVehiculo'];
            $nombreCompletoPropietario= $_REQUEST['nombreCompletoPropietario'];
            $numeroCelularPropietario= $_REQUEST['numeroCelularPropietario'];
            $idSeccionUno= $_REQUEST['idSeccionUno'];
            $ObjVehiculo= new Vehiculo();
            $ObjVehiculo->vehiculoNombreCelular($nombreCompletoVehiculo, $numeroCelularVehiculo);
            $ObjPropietario= new Propietario($nombreCompletoPropietario, $numeroCelularPropietario);
            $this->ObjModel->sqlUpdatePostInsertSeccionUno($ObjVehiculo, $ObjPropietario, $idSeccionUno);
            
        }else{
            
        }
        
    }
    
    public function __destruct() {
        
    }
}

