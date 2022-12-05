<?php

require_once "config/conexion.php";   


class ModeloPatrocinio {
    /*=============================================
    tabla posicion
    =============================================*/

    //funcio crear 

    static public function mdlPatrocinio($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(NombrePatrocinador, Monto, fk_RegistroID) 
        VALUES (:NombrePatrocinador, :Monto, :fk_RegistroID)");

        $stmt->bindParam(":NombrePatrocinador", $datos["NombrePatrocinador"], PDO::PARAM_STR);
        $stmt->bindParam(":Monto", $datos["Monto"], PDO::PARAM_STR);
        $stmt->bindParam(":fk_RegistroID", $datos["fk_RegistroID"], PDO::PARAM_STR);

        if($stmt->execute()){

            return "ok";

        }else{

            print_r(Conexion::conectar()->errorInfo());

        }
        $stmt->close();
        $stmt = null;	

    }

    // funcion mostrar

    static public function mdlSeleccionarPatrocinio($tabla){

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


    
    static public function mdlEliminarPatrocinio($tabla, $valor){
	
        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE PatrocinioID = :PatrocinioID");
    
        $stmt->bindParam(":PatrocinioID", $valor, PDO::PARAM_STR);
    
        if($stmt->execute()){
    
            return "ok";
    
        }else{
    
            print_r(Conexion::conectar()->errorInfo());
    
        }
    
        $stmt->close();
    
        $stmt = null;	
    }
    // funcion actualizar
    static public function mdlActualizarPatrocinio($tabla, $datos){
        
        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET NombrePatrocinador=:NombrePatrocinador, Monto=:Monto, fk_RegistroID=:fk_RegistroID WHERE PatrocinioID = :PatrocinioID");

        $stmt->bindParam(":NombrePatrocinador", $datos["NombrePatrocinador"], PDO::PARAM_STR);
        $stmt->bindParam(":Monto", $datos["Monto"], PDO::PARAM_STR);
        $stmt->bindParam(":fk_RegistroID", $datos["fk_RegistroID"], PDO::PARAM_STR);
        $stmt->bindParam(":PatrocinioID", $datos["PatrocinioID"], PDO::PARAM_INT);

        if($stmt->execute()){

            return "ok";

        }else{

            print_r(Conexion::conectar()->errorInfo());

        }

        $stmt->close();

        $stmt = null;	

    }
}
