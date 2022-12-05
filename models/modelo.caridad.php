<?php
require_once "config/conexion.php";  


class ModeloCaridad {
    /*=============================================
    tabla caridad
    =============================================*/

    //funcio crear 

    static public function mdlCaridad($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(NombreCaridad, Descripcion, logoCaridad) 
        VALUES (:NombreCaridad, :Descripcion, :logoCaridad)");

        $stmt->bindParam(":NombreCaridad", $datos["NombreCaridad"], PDO::PARAM_STR);
        $stmt->bindParam(":Descripcion", $datos["Descripcion"], PDO::PARAM_STR);
        $stmt->bindParam(":logoCaridad", $datos["logoCaridad"], PDO::PARAM_STR);

        if($stmt->execute()){

            return "ok";

        }else{

            print_r(Conexion::conectar()->errorInfo());

        }
        $stmt->close();
        $stmt = null;	

    }

    // funcion mostrar

    static public function mdlSeleccionarCaridad($tabla){

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







    

    static public function mdlEliminarCaridad($tabla, $valor){
	
        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE CaridadID = :CaridadID");
    
        $stmt->bindParam(":CaridadID", $valor, PDO::PARAM_STR);
    
        if($stmt->execute()){
    
            return "ok";
    
        }else{
    
            print_r(Conexion::conectar()->errorInfo());
    
        }
    
        $stmt->close();
    
        $stmt = null;	
    }



     // funcion actualizar

    static public function mdlActualizarCaridad($tabla, $datos){
        
        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET NombreCaridad=:NombreCaridad, Descripcion=:Descripcion, logoCaridad=:logoCaridad WHERE CaridadID = :CaridadID");

        $stmt->bindParam(":NombreCaridad", $datos["NombreCaridad"], PDO::PARAM_STR);
        $stmt->bindParam(":Descripcion", $datos["Descripcion"], PDO::PARAM_STR);
        $stmt->bindParam(":logoCaridad", $datos["logoCaridad"], PDO::PARAM_STR);
        $stmt->bindParam(":CaridadID", $datos["CaridadID"], PDO::PARAM_INT);

        if($stmt->execute()){

            return "ok";

        }else{

            print_r(Conexion::conectar()->errorInfo());

        }

        $stmt->close();

        $stmt = null;	

    }
}
