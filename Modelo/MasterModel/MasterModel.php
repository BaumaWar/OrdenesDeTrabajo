<?php
require_once '../Modelo/ConfigMasterModel.php';

class MasterModel{
    
    use ConfigMasterModel;
    //Metodo que retorna la conexion a la base de datos.
    public function getConect(){
        
        $dbname= $this->nameDateBase;
        $user= $this->userName;
        $password= $this->password;
        $host= $this->Host;
        $driver= $this->driver;
        $charset= $this->charset;
        
        try {
            $conexion= new PDO("{$driver}:host={$host};dbname={$dbname};{$charset}",$user,$password);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conexion;
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
        
    }
    
}
