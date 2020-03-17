<?php
require_once '../Modelo/MasterModel/MasterModel.php';

class ModelOrdenSeccionUno extends MasterModel{
    
    private $ObjMaster;
    
    public function _construct(){
        $this->ObjMaster = new MasterModel();
    }
    
    public function sqlInsertSeccionUno(Vehiculo $vehiculo, Propietario $propietario){
        
        $fecha= $vehiculo->fecha;
        $idEmpresa= $vehiculo->idEmpresa;
        $empresa= $vehiculo->empresa;
        $placa= $vehiculo->placa;
        $numeroInterno= $vehiculo->numeroInterno;
        $pkVehiculo= $vehiculo->pkVehiculo;
        $numeroCelularVehiculo= $vehiculo->numeroCelular;
        $nombreCompletoVehiculo= $vehiculo->nombreCompleto;
        $version= $vehiculo->version;
        $nombreCompletoPropietario= $propietario->nombreCompleto;
        $numeroCelularPropietario= $propietario->numeroCelular;
        
        $tabla="tbl_orden_trabajo_info_seccion_uno";
        $id=null;
        date_default_timezone_set('America/Bogota'); $fecha_cre= date("Y-m-d");
        /*. "(pk_ord_tra_inf_sec_uno,fk_empresa,fk_vehiculo,nombre_completo_vehiculo,celular_vehiculo,version_regisbus,placa,numero_interno,nombre_completo_propietario,celular_propietario) "*/
        $sql= "insert into {$tabla} "
            . "(pk_ord_tra_inf_sec_uno,fk_empresa,fk_vehiculo,nombre_completo_vehiculo,celular_vehiculo,version_regisbus,placa,numero_interno,nombre_completo_propietario,celular_propietario,fecha_registro)"
            . " values(:pk,:fk_emp,:fk_veh,:nomComVeh,:celVeh,:verReg,:placa,:numInt,:nomComPro,:celPro,:fechaRegistro)";
        
        try {
            
            $instancia = new MasterModel();
            $conexion= $instancia->getConect();
            $sqlInsert= $conexion->prepare($sql);
            $sqlInsert->bindParam(':pk', $id);
            $sqlInsert->bindParam(':fk_emp', $idEmpresa);
            $sqlInsert->bindParam(':fk_veh', $pkVehiculo);
            $sqlInsert->bindParam(':nomComVeh', $nombreCompletoVehiculo);
            $sqlInsert->bindParam(':celVeh', $numeroCelularVehiculo);
            $sqlInsert->bindParam(':verReg', $version);
            $sqlInsert->bindParam(':placa', $placa);
            $sqlInsert->bindParam(':numInt', $numeroInterno);
            $sqlInsert->bindParam(':nomComPro', $nombreCompletoPropietario);
            $sqlInsert->bindParam(':celPro', $numeroCelularPropietario);
            $sqlInsert->bindParam(':fechaRegistro', $fecha_cre);
            $sqlInsert->execute();

            $ultimoID= $conexion->lastInsertId();
            
            $ultimoIDArrayAsociativo= array(
                                            'ultimoID'=>$ultimoID, 'empresa'=>$empresa,
                                            'placa'=>$placa."-".$numeroInterno, 'version'=>$version, 
                                            'nombreVehiculo'=>$nombreCompletoVehiculo, 'numeroCeularVehiculo'=>$numeroCelularVehiculo,
                                            'nombrePropietario'=>$nombreCompletoPropietario, 'numeroCelularVehiculo'=>$numeroCelularPropietario
                                            );
            
            $sqlInsert=null;
            $conexion=null;
            $ultimoID=null;
            
            echo json_encode($ultimoIDArrayAsociativo);
            
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
        
    }
    public function sqlUpdatePostInsertSeccionUno(Vehiculo $vehiculo, Propietario $propietario, int $idSeccionUno){
        $CodigoIdSeccionUno= $idSeccionUno;
        $nombreCompletoVehiculo= $vehiculo->nombreCompleto;
        $numeroCelularVehiculo= $vehiculo->numeroCelular;
        $nombreCompletoPropietario= $propietario->nombreCompleto;
        $numeroCelularPropietario= $propietario->numeroCelular;
        
        $tabla= "tbl_orden_trabajo_info_seccion_uno";
        
        $sql="update {$tabla} "
            . "set nombre_completo_vehiculo=:nombreVehiculo,celular_vehiculo=:celularVehiculo,nombre_completo_propietario=:nombrePropietario,celular_propietario=:celularPropietario "
            . "where pk_ord_tra_inf_sec_uno like :codigo";
        
        try {
            $instancia= new MasterModel();
            $conexion= $instancia->getConect();
            $sqlUpdate= $conexion->prepare($sql);
            $sqlUpdate->bindParam(':nombreVehiculo',$nombreCompletoVehiculo);
            $sqlUpdate->bindParam(':celularVehiculo',$numeroCelularVehiculo);
            $sqlUpdate->bindParam(':nombrePropietario',$nombreCompletoPropietario);
            $sqlUpdate->bindParam(':celularPropietario',$numeroCelularPropietario);
            $sqlUpdate->bindParam(':codigo',$CodigoIdSeccionUno);
            $sqlUpdate->execute();
            
            $sqlUpdate=null;
            
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
        
    }
    public function __destruct() {
        
    }
    
}