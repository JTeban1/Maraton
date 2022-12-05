<?php

require_once "config/conexion.php";  


class ModeloVoluntario {
    
    /*=============================================
    tabla voluntario
    =============================================*/

    //funcio crear 

    static public function mdlVoluntario($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(Nombres, Apellidos, fk_PaisID, fk_GeneroID) 
        VALUES (:Nombres, :Apellidos,:fk_PaisID,:fk_GeneroID)");

        $stmt->bindParam(":Nombres", $datos["Nombres"], PDO::PARAM_STR);
        $stmt->bindParam(":Apellidos", $datos["Apellidos"], PDO::PARAM_STR);
        $stmt->bindParam(":fk_PaisID", $datos["fk_PaisID"], PDO::PARAM_STR);
        $stmt->bindParam(":fk_GeneroID", $datos["fk_GeneroID"], PDO::PARAM_STR);

        if($stmt->execute()){

            return "ok";

        }else{

            print_r(Conexion::conectar()->errorInfo());

        }
        $stmt->close();
        $stmt = null;	

    }


    // funcion mostrar

    static public function mdlSeleccionarVoluntario($tabla){

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



    static public function mdlEliminarVoluntario($tabla, $valor){
	
        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE VoluntarioID = :VoluntarioID");
    
        $stmt->bindParam(":VoluntarioID", $valor, PDO::PARAM_STR);
    
        if($stmt->execute()){
    
            return "ok";
    
        }else{
    
            print_r(Conexion::conectar()->errorInfo());
    
        }
    
        $stmt->close();
    
        $stmt = null;	
    }
    // funcion actualizar 


    
    static public function mdlActualizarVoluntario($tabla, $datos){
        
        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET Nombres=:Nombres, Apellidos=:Apellidos, fk_PaisID=:fk_PaisID, fk_Genero=:fk_Genero WHERE VoluntarioID = :VoluntarioID");

        $stmt->bindParam(":Nombres", $datos["Nombres"], PDO::PARAM_STR);
        $stmt->bindParam(":Apellidos", $datos["Apellidos"], PDO::PARAM_STR);
        $stmt->bindParam(":fk_PaisID", $datos["fk_PaisID"], PDO::PARAM_STR);
        $stmt->bindParam(":fk_Genero", $datos["fk_Genero"], PDO::PARAM_STR);
        $stmt->bindParam(":VoluntarioID", $datos["VoluntarioID"], PDO::PARAM_INT);

        if($stmt->execute()){

            return "ok";

        }else{

            print_r(Conexion::conectar()->errorInfo());

        }

        $stmt->close();

        $stmt = null;	

    }
}