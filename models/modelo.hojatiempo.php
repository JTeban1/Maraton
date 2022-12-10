<?php
require_once "config/conexion.php";  


class ModeloHojatiempo {
        
    /*=============================================
    tabla hojatiempo
    =============================================*/

    //funcio crear 

    static public function mdlHojatiempo($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(FechaInicio, FechaFinal, ValorPagar, fk_PersonalID) 
        VALUES (:FechaInicio, :FechaFinal,:ValorPagar,:fk_PersonalID)");

        $stmt->bindParam(":FechaInicio", $datos["FechaInicio"], PDO::PARAM_STR);
        $stmt->bindParam(":FechaFinal", $datos["FechaFinal"], PDO::PARAM_STR);
        $stmt->bindParam(":ValorPagar", $datos["ValorPagar"], PDO::PARAM_STR);
        $stmt->bindParam(":fk_PersonalID", $datos["fk_PersonalID"], PDO::PARAM_STR);

        if($stmt->execute()){

            return "ok";

        }else{

            print_r(Conexion::conectar()->errorInfo());

        }
        $stmt->close();
        $stmt = null;	

    }

    // funcion mostrar

    static public function mdlSeleccionarHojatiempo($tabla, $item, $valor){

	

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


    
    static public function mdlEliminarHojaTiempo($tabla, $valor){
	
        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE HojaID = :HojaID");
    
        $stmt->bindParam(":HojaID", $valor, PDO::PARAM_STR);
    
        if($stmt->execute()){
    
            return "ok";
    
        }else{
    
            print_r(Conexion::conectar()->errorInfo());
    
        }
    
        $stmt->close();
    
        $stmt = null;	
    }
    // funcion actualizar

    static public function mdlActualizarHojaTiempo($tabla, $datos){
        
        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET FechaInicio=:FechaInicio, FechaFinal=:FechaFinal, ValorPagar=:ValorPagar, fk_PersonalID=:fk_PersonalID WHERE HojaID = :HojaID");

        $stmt->bindParam(":FechaInicio", $datos["FechaInicio"], PDO::PARAM_STR);
        $stmt->bindParam(":FechaFinal", $datos["FechaFinal"], PDO::PARAM_STR);
        $stmt->bindParam(":ValorPagar", $datos["ValorPagar"], PDO::PARAM_STR);
        $stmt->bindParam(":fk_PersonalID", $datos["fk_PersonalID"], PDO::PARAM_STR);
        $stmt->bindParam(":HojaID", $datos["HojaID"], PDO::PARAM_INT);

        if($stmt->execute()){

            return "ok";

        }else{

            print_r(Conexion::conectar()->errorInfo());

        }

        $stmt->close();

        $stmt = null;	

    }
}