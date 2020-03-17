<?php
require_once '../Modelo/MasterModel/MasterModel.php';
class ModelOrdenSeccionDos extends MasterModel{
    private $ObjMaster;
    
    public function __construct() {
        $this->ObjMaster= new MasterModel();
    }
    
    public function sqlInsertSeccionDos(IngresoSalida $ingresoSalida){
        
        $seccionUnoId= $ingresoSalida->seccionUnoId;
        $horaDeEntrada= $ingresoSalida->horaDeEntrada;
        $horaDeSalida=  $ingresoSalida->horaDeSalida;
        $numeracion= $ingresoSalida->numeracion;
        $sello= $ingresoSalida->sello;
        $lucesInternas= $ingresoSalida->lucesInternas;
        $lucesExternas= $ingresoSalida->lucesExternas;
        $aperturaDePuerta= $ingresoSalida->aperturaDePuerta;
        $pito= $ingresoSalida->pito;
        $golpes= $ingresoSalida->golpes;
        $rayones= $ingresoSalida->rayones;
        
        $tabla="tbl_orden_trabajo_info_seccion_dos";
        $id=null;
        
        $sql="insert into {$tabla} "
            . "(pk_ord_tra_inf_sec_dos,fk_ord_tra_inf_sec_uno,hora_entrada,hora_salida,numeracion,sello,estado_luces_externas,estado_luces_internas,apertura_puerta,pito,golpes,rayones)"
            . " values(:pk,:fk_sec_uno,:horaEntrada,:horaSalida,:numeracion,:sello,:lucesExternas,:lucesInternas,:apertura_puerta,:pito,:golpes,:rayones)";
        
        try {
            $instancia= new MasterModel();
            $conexion= $instancia->getConect();
            $sqlInsert= $conexion->prepare($sql);
            $sqlInsert->bindParam(':pk',$id);
            $sqlInsert->bindParam(':fk_sec_uno',$seccionUnoId);
            $sqlInsert->bindParam(':horaEntrada',$horaDeEntrada);
            $sqlInsert->bindParam(':horaSalida', $horaDeSalida);
            $sqlInsert->bindParam(':numeracion', $numeracion);
            $sqlInsert->bindParam(':sello', $sello);
            $sqlInsert->bindParam(':lucesExternas', $lucesExternas);
            $sqlInsert->bindParam(':lucesInternas', $lucesInternas);
            $sqlInsert->bindParam(':apertura_puerta', $aperturaDePuerta);
            $sqlInsert->bindParam(':pito', $pito);
            $sqlInsert->bindParam(':golpes', $golpes);
            $sqlInsert->bindParam(':rayones', $rayones);
            $sqlInsert->execute();
            
            $ultimoID= $conexion->lastInsertId();
            
            $ultimoIDArrayAsociativo= array('ultimoID'=>$ultimoID, 'horaDeEntrada'=>$horaDeEntrada, 'HoraDeSalida'=>$horaDeSalida, 'numeracion'=>$numeracion, 'sello'=>$sello);
            
            $conexion=null;
            $sqlInsert=null;
            $ultimoID=null;
            
            echo json_encode($ultimoIDArrayAsociativo);
            
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }

    }
    
    public function __destruct() {
        
    }
    
}


