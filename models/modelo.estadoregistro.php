<?php 


require_once "config/conexion.php";  


class ModeloEstadoRegistro {
    
    /*=============================================
    tabla EstadoRegistro
    =============================================*/

    //funcio crear 

    static public function mdlEstadoRegistro($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(estadoRegitro) 
        VALUES (:estadoRegitro)");

        $stmt->bindParam(":estadoRegitro", $datos["estadoRegitro"], PDO::PARAM_STR);

        if($stmt->execute()){

            return "ok";

        }else{

            print_r(Conexion::conectar()->errorInfo());

        }
        $stmt->close();
        $stmt = null;	

    }

    // funcion mostrar

    static public function mdlSeleccionarEstadoRegistro($tabla, $item, $valor){

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


    
    static public function mdlEliminarRegistro($tabla, $valor){
	
        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE estadoID = :estadoID");
    
        $stmt->bindParam(":estadoID", $valor, PDO::PARAM_STR);
    
        if($stmt->execute()){
    
            return "ok";
    
        }else{
    
            print_r(Conexion::conectar()->errorInfo());
    
        }
    
        $stmt->close();
    
        $stmt = null;	
    }


    
    // funcion actualizar
    static public function mdlActualizarEstadoRegistro($tabla, $datos){
        
        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET estadoRegitro=:estadoRegitro WHERE estadoID = :estadoID");

        $stmt->bindParam(":estadoRegitro", $datos["estadoRegitro"], PDO::PARAM_STR);
        $stmt->bindParam(":estadoID", $datos["estadoID"], PDO::PARAM_INT);

        if($stmt->execute()){

            return "ok";

        }else{

            print_r(Conexion::conectar()->errorInfo());

        }

        $stmt->close();

        $stmt = null;	

    }
}