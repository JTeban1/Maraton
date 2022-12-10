<?php

require_once "config/conexion.php";  


class ModeloMaraton {
        
    /*=============================================
    tabla hojatiempo
    =============================================*/

    //funcio crear 

    static public function mdlMaraton($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(NombreMaraton, NombreCiudad, NombreCelebracion, fk_PaisID) 
        VALUES (:NombreMaraton, :NombreCiudad,:NombreCelebracion,:fk_PaisID)");

        $stmt->bindParam(":NombreMaraton", $datos["NombreMaraton"], PDO::PARAM_STR);
        $stmt->bindParam(":NombreCiudad", $datos["NombreCiudad"], PDO::PARAM_STR);
        $stmt->bindParam(":NombreCelebracion", $datos["NombreCelebracion"], PDO::PARAM_STR);
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

    static public function mdlSeleccionarMaraton($tabla, $item, $valor){

	

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


    
    static public function mdlEliminarMaraton($tabla, $valor){
	
        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE maratonID = :maratonID");
    
        $stmt->bindParam(":maratonID", $valor, PDO::PARAM_STR);
    
        if($stmt->execute()){
    
            return "ok";
    
        }else{
    
            print_r(Conexion::conectar()->errorInfo());
    
        }
    
        $stmt->close();
    
        $stmt = null;	
    }
    // funcion actualizar
    static public function mdlActualizarMaraton($tabla, $datos){
        
        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET NombreMaraton=:NombreMaraton, NombreCiudad=:NombreCiudad, NombreCelebracion=:NombreCelebracion, fk_PaisID=:fk_PaisID WHERE maratonID = :maratonID");

        $stmt->bindParam(":NombreMaraton", $datos["NombreMaraton"], PDO::PARAM_STR);
        $stmt->bindParam(":NombreCiudad", $datos["NombreCiudad"], PDO::PARAM_STR);
        $stmt->bindParam(":NombreCelebracion", $datos["NombreCelebracion"], PDO::PARAM_STR);
        $stmt->bindParam(":fk_PaisID", $datos["fk_PaisID"], PDO::PARAM_STR);
        $stmt->bindParam(":maratonID", $datos["maratonID"], PDO::PARAM_INT);

        if($stmt->execute()){

            return "ok";

        }else{

            print_r(Conexion::conectar()->errorInfo());

        }

        $stmt->close();

        $stmt = null;	

    }
}