<?php

require_once "config/conexion.php";  


class ModelosKitCompeticion {
    /*=============================================
    tabla kitcompeticion
    =============================================*/

    //funcio crear 

    static public function mdlKitcompeticion($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(opcionkit, valorkit) 
        VALUES (:opcionkit,:valorkit)");

        $stmt->bindParam(":opcionkit", $datos["opcionkit"], PDO::PARAM_STR);
        $stmt->bindParam(":valorkit", $datos["valorkit"], PDO::PARAM_STR);

        if($stmt->execute()){

            return "ok";

        }else{

            print_r(Conexion::conectar()->errorInfo());

        }
        $stmt->close();
        $stmt = null;	

    }

    // funcion mostrar

    static public function mdlSeleccionarKitcompeticion($tabla, $item, $valor){

	

		if($item == null && $valor == null){

		  $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ");

		  $stmt->execute();

		  return $stmt -> fetchAll();

	  }else{

		  $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

		  $stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);

		  $stmt->execute();

		  return $stmt -> fetch();


	  }

	  $stmt->close();

	  $stmt = null;	
    }


    
    static public function mdlEliminarKitCompeticion($tabla, $valor){
	
        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE kitID = :kitID");
    
        $stmt->bindParam(":kitID", $valor, PDO::PARAM_STR);
    
        if($stmt->execute()){
    
            return "ok";
    
        }else{
    
            print_r(Conexion::conectar()->errorInfo());
    
        }
    
        $stmt->close();
    
        $stmt = null;	
    }

    
    // funcion actualizar
    static public function mdlActualizarKitcompeticion($tabla, $datos){
        
        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET opcionKit=:opcionKit, valorKit=:valorKit  WHERE KitID = :KitID");

        $stmt->bindParam(":opcionKit", $datos["opcionKit"], PDO::PARAM_STR);
        $stmt->bindParam(":valorKit", $datos["valorKit"], PDO::PARAM_STR);
        $stmt->bindParam(":KitID", $datos["KitID"], PDO::PARAM_INT);

        if($stmt->execute()){

            return "ok";

        }else{

            print_r(Conexion::conectar()->errorInfo());

        }

        $stmt->close();

        $stmt = null;	

    }
}