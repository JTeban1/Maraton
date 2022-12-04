<?php

require_once "conexion.php";  


class ModeloCorredor {
        
    /*=============================================
    tabla hojatiempo
    =============================================*/

    //funcio crear 

    static public function mdlCorredor($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(FechaNacimiento, fk_GeneroID, fk_UsuarioID, fk_PaisID) 
        VALUES (:FechaNacimiento, :fk_GeneroID,:fk_UsuarioID,:fk_PaisID)");

        $stmt->bindParam(":FechaNacimiento", $datos["FechaNacimiento"], PDO::PARAM_STR);
        $stmt->bindParam(":fk_GeneroID", $datos["fk_GeneroID"], PDO::PARAM_STR);
        $stmt->bindParam(":fk_UsuarioID", $datos["fk_UsuarioID"], PDO::PARAM_STR);
        $stmt->bindParam(":fk_PaisID", $datos["fk_PaisID"], PDO::PARAM_STR);

        if($stmt->execute()){

            return "ok";

        }else{

            print_r(Conexion::conectar()->errorInfo());

        }
        $stmt->close();
        $stmt = null;	

    }

    // funcion mostrar

    static public function mdlSeleccionarCorredor($tabla){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ");

        $stmt->execute();
        return $stmt -> fetchAll();
        $stmt->close();
        $stmt = null;
    }



    
    static public function mdlEliminarCorredor($tabla, $valor){
	
        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE CorredorID = :CorredorID");
    
        $stmt->bindParam(":CorredorID", $valor, PDO::PARAM_STR);
    
        if($stmt->execute()){
    
            return "ok";
    
        }else{
    
            print_r(Conexion::conectar()->errorInfo());
    
        }
    
        $stmt->close();
    
        $stmt = null;	
    }
    // funcion actualizar
    static public function mdlActualizarCorredor($tabla, $datos){
        
        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET FechaNacimiento=:FechaNacimiento, fk_GeneroID=:fk_GeneroID, fk_UsuarioID=:fk_UsuarioID, fk_PaisID=:fk_PaisID  WHERE CorredorID = :CorredorID");

        $stmt->bindParam(":FechaNacimiento", $datos["FechaNacimiento"], PDO::PARAM_STR);
        $stmt->bindParam(":fk_GeneroID", $datos["fk_GeneroID"], PDO::PARAM_STR);
        $stmt->bindParam(":fk_UsuarioID", $datos["fk_UsuarioID"], PDO::PARAM_STR);
        $stmt->bindParam(":fk_PaisID", $datos["fk_PaisID"], PDO::PARAM_STR);
        $stmt->bindParam(":CorredorID", $datos["CorredorID"], PDO::PARAM_INT);

        if($stmt->execute()){

            return "ok";

        }else{

            print_r(Conexion::conectar()->errorInfo());

        }

        $stmt->close();

        $stmt = null;	

    }
}