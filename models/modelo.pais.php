<?php

require_once "config/conexion.php";  



class ModeloPais {

    /*=============================================
    tabla pais
    =============================================*/

    //funcio crear 

    static public function mdlPais($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(NombrePais, BanderaPais) 
        VALUES (:NombrePais, :BanderaPais)");

        $stmt->bindParam(":NombrePais", $datos["NombrePais"], PDO::PARAM_STR);
        $stmt->bindParam(":BanderaPais", $datos["BanderaPais"], PDO::PARAM_STR);

        if($stmt->execute()){

            return "ok";

        }else{

            print_r(Conexion::conectar()->errorInfo());

        }
        $stmt->close();
        $stmt = null;	

    }

    // funcion mostrar

    static public function mdlSeleccionarPais($tabla, $item, $valor){

	

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

    
    static public function mdlEliminarPais($tabla, $valor){
	
        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE PaisID = :PaisID");
    
        $stmt->bindParam(":PaisID", $valor, PDO::PARAM_STR);
    
        if($stmt->execute()){
    
            return "ok";
    
        }else{
    
            print_r(Conexion::conectar()->errorInfo());
    
        }
    
        $stmt->close();
    
        $stmt = null;	
    }
    // funcion actualizar

    static public function mdlActualizarPais($tabla, $datos){
        
        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET NombrePais=:NombrePais, BanderaPais=:BanderaPais WHERE PaisID = :PaisID");

        $stmt->bindParam(":NombrePais", $datos["NombrePais"], PDO::PARAM_STR);
        $stmt->bindParam(":BanderaPais", $datos["BanderaPais"], PDO::PARAM_STR);
        $stmt->bindParam(":PaisID", $datos["PaisID"], PDO::PARAM_INT);

        if($stmt->execute()){

            return "ok";

        }else{

            print_r(Conexion::conectar()->errorInfo());

        }

        $stmt->close();

        $stmt = null;	

    }
}
