<?php


require_once "config/conexion.php";  


class ModeloPosicion {
    /*=============================================
    tabla posicion
    =============================================*/

    //funcio crear 

    static public function mdlPosicion($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(NombrePosicion, DescripcionPosicion, TarifaPago) 
        VALUES (:NombrePosicion, :DescripcionPosicion, :TarifaPago)");

        $stmt->bindParam(":NombrePosicion", $datos["NombrePosicion"], PDO::PARAM_STR);
        $stmt->bindParam(":DescripcionPosicion", $datos["DescripcionPosicion"], PDO::PARAM_STR);
        $stmt->bindParam(":TarifaPago", $datos["TarifaPago"], PDO::PARAM_STR);

        if($stmt->execute()){

            return "ok";

        }else{

            print_r(Conexion::conectar()->errorInfo());

        }
        $stmt->close();
        $stmt = null;	

    }

    // funcion mostrar

    static public function mdlSeleccionarPosicion($tabla, $item, $valor){

	

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



    static public function mdlEliminarPosicion($tabla, $valor){
	
        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE PosicionID = :PosicionID");
    
        $stmt->bindParam(":PosicionID", $valor, PDO::PARAM_STR);
    
        if($stmt->execute()){
    
            return "ok";
    
        }else{
    
            print_r(Conexion::conectar()->errorInfo());
    
        }
    
        $stmt->close();
    
        $stmt = null;	
    }


    
    static public function mdlActualizarPosicion($tabla, $datos){
        
        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET NombrePosicion=:NombrePosicion, DescripcionPosicion=:DescripcionPosicion, TarifaPago=:TarifaPago WHERE PosicionID = :PosicionID");

        $stmt->bindParam(":NombrePosicion", $datos["NombrePosicion"], PDO::PARAM_STR);
        $stmt->bindParam(":DescripcionPosicion", $datos["DescripcionPosicion"], PDO::PARAM_STR);
        $stmt->bindParam(":TarifaPago", $datos["TarifaPago"], PDO::PARAM_STR);
        $stmt->bindParam(":PosicionID", $datos["PosicionID"], PDO::PARAM_INT);

        if($stmt->execute()){

            return "ok";

        }else{

            print_r(Conexion::conectar()->errorInfo());

        }

        $stmt->close();

        $stmt = null;	

    }
}
