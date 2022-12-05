<?php

require_once "config/conexion.php";  


class ModeloTipoEvento {
    /*=============================================
    tabla TipoEvento
    =============================================*/

    //funcio crear 

    static public function mdlTipoEvento($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(NombreTipoEvento) 
        VALUES (:NombreTipoEvento)");

        $stmt->bindParam(":NombreTipoEvento", $datos["NombreTipoEvento"], PDO::PARAM_STR);

        if($stmt->execute()){

            return "ok";

        }else{

            print_r(Conexion::conectar()->errorInfo());

        }
        $stmt->close();
        $stmt = null;	

    }

    // funcion mostrar

    static public function mdlSeleccionarTipoEvento($tabla){
        $item1 = null;
		$valor1 = null;

		if($item1 == null && $valor1 == null){

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



    static public function mdlEliminarTipoEvento($tabla, $valor){
	
        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE TipoEventoID = :TipoEventoID");
    
        $stmt->bindParam(":TipoEventoID", $valor, PDO::PARAM_STR);
    
        if($stmt->execute()){
    
            return "ok";
    
        }else{
    
            print_r(Conexion::conectar()->errorInfo());
    
        }
    
        $stmt->close();
    
        $stmt = null;	
    }
    // funcion actualizar 


    
    static public function mdlActualizarTipoEvento($tabla, $datos){
        
        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET NombreTipoEvento=:NombreTipoEvento WHERE TipoEventoID = :TipoEventoID");

        $stmt->bindParam(":NombreTipoEvento", $datos["NombreTipoEvento"], PDO::PARAM_STR);
        $stmt->bindParam(":TipoEventoID", $datos["TipoEventoID"], PDO::PARAM_INT);

        if($stmt->execute()){

            return "ok";

        }else{

            print_r(Conexion::conectar()->errorInfo());

        }

        $stmt->close();

        $stmt = null;	

    }
}