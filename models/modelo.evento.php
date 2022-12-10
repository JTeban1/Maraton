<?php

require_once "config/conexion.php";  


class ModeloEvento{
    
    /*=============================================
    tabla personal
    =============================================*/

    //funcio crear 

    static public function mdlEvento($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(NombreEvento, FechaInicio, Valor, ParticiantesMax, fk_MaratonID,fk_TipoEventoID) 
        VALUES (:NombreEvento, :FechaInicio, :Valor, :ParticiantesMax, :fk_MaratonID, :fk_TipoEventoID)");

        $stmt->bindParam(":NombreEvento", $datos["NombreEvento"], PDO::PARAM_STR);
        $stmt->bindParam(":FechaInicio", $datos["FechaInicio"], PDO::PARAM_STR);
        $stmt->bindParam(":Valor", $datos["Valor"], PDO::PARAM_STR);
        $stmt->bindParam(":ParticiantesMax", $datos["ParticiantesMax"], PDO::PARAM_STR);
        $stmt->bindParam(":fk_MaratonID", $datos["fk_MaratonID"], PDO::PARAM_STR);
        $stmt->bindParam(":fk_TipoEventoID", $datos["fk_TipoEventoID"], PDO::PARAM_STR);

        if($stmt->execute()){

            return "ok";

        }else{

            print_r(Conexion::conectar()->errorInfo());

        }
        $stmt->close();
        $stmt = null;	

    }

    // funcion mostrar

    static public function mdlSeleccionarEvento($tabla, $item, $valor){

	

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



    
    static public function mdlEliminarEvento($tabla, $valor){
	
        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE EventoID = :EventoID");
    
        $stmt->bindParam(":EventoID", $valor, PDO::PARAM_STR);
    
        if($stmt->execute()){
    
            return "ok";
    
        }else{
    
            print_r(Conexion::conectar()->errorInfo());
    
        }
    
        $stmt->close();
    
        $stmt = null;	
    }
    // funcion actualizar
    static public function mdlActualizarEvento($tabla, $datos){
        
        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET NombreEvento=:NombreEvento, FechaInicio=:FechaInicio, Valor=:Valor, ParticiantesMax=:ParticiantesMax, fk_MaratonID=:fk_MaratonID, fk_TipoEventoID=:fk_TipoEventoID  WHERE EventoID = :EventoID");

        $stmt->bindParam(":NombreEvento", $datos["NombreEvento"], PDO::PARAM_STR);
        $stmt->bindParam(":FechaInicio", $datos["FechaInicio"], PDO::PARAM_STR);
        $stmt->bindParam(":Valor", $datos["Valor"], PDO::PARAM_STR);
        $stmt->bindParam(":ParticiantesMax", $datos["ParticiantesMax"], PDO::PARAM_STR);
        $stmt->bindParam(":fk_MaratonID", $datos["fk_MaratonID"], PDO::PARAM_STR);
        $stmt->bindParam(":fk_TipoEventoID", $datos["fk_TipoEventoID"], PDO::PARAM_STR);
        $stmt->bindParam(":EventoID", $datos["EventoID"], PDO::PARAM_INT);

        if($stmt->execute()){

            return "ok";

        }else{

            print_r(Conexion::conectar()->errorInfo());

        }

        $stmt->close();

        $stmt = null;	

    }
}