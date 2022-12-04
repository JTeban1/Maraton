<?php 


require_once "conexion.php";  


class ModeloEstadoRegistro {
    
    /*=============================================
    tabla EstadoRegistro
    =============================================*/

    //funcio crear 

    static public function mdlEstadoRegistro($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(estadoRegistro) 
        VALUES (:estadoRegistro)");

        $stmt->bindParam(":estadoRegistro", $datos["estadoRegistro"], PDO::PARAM_STR);

        if($stmt->execute()){

            return "ok";

        }else{

            print_r(Conexion::conectar()->errorInfo());

        }
        $stmt->close();
        $stmt = null;	

    }

    // funcion mostrar

    static public function mdlSeleccionarEstadoRegistro($tabla){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ");

        $stmt->execute();
        return $stmt -> fetchAll();
        $stmt->close();
        $stmt = null;
    }
    static public function mdlEliminarRegistro($tabla, $valor){
	
        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE estadoID = :estadoID");
    
        $stmt->bindParam(":estadoID", $valor, PDO::PARAM_STR);
    
        if($stmt->execute()){
    
            return "ok";
    
        }else{
    
            print_r(Conexion::conectar()->errorInfo());
    
        }
    
        $stmt->close();
    
        $stmt = null;	
    }


    
    // funcion actualizar
    static public function mdlActualizarEstadoRegistro($tabla, $datos){
        
        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET estadoRegistro=:estadoRegistro WHERE estadoID = :estadoID");

        $stmt->bindParam(":estadoRegistro", $datos["estadoRegistro"], PDO::PARAM_STR);
        $stmt->bindParam(":estadoID", $datos["estadoID"], PDO::PARAM_INT);

        if($stmt->execute()){

            return "ok";

        }else{

            print_r(Conexion::conectar()->errorInfo());

        }

        $stmt->close();

        $stmt = null;	

    }
}