<?php

require_once "config/conexion.php";  


class ModeloPersonal{
    
    /*=============================================
    tabla personal
    =============================================*/

    //funcio crear 

    static public function mdlPersonal($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(Nombres, Apellidos, FechaNacimiento, Genero,Comentarios,fk_RolID,fk_PosicionID) 
        VALUES (:Nombres, :Apellidos,:FechaNacimiento,:Genero,:Comentarios,:fk_RolID,:fk_PosicionID)");

        $stmt->bindParam(":Nombres", $datos["Nombres"], PDO::PARAM_STR);
        $stmt->bindParam(":Apellidos", $datos["Apellidos"], PDO::PARAM_STR);
        $stmt->bindParam(":FechaNacimiento", $datos["FechaNacimiento"], PDO::PARAM_STR);
        $stmt->bindParam(":Genero", $datos["Genero"], PDO::PARAM_STR);
        $stmt->bindParam(":Comentarios", $datos["Comentarios"], PDO::PARAM_STR);
        $stmt->bindParam(":fk_RolID", $datos["fk_RolID"], PDO::PARAM_STR);
        $stmt->bindParam(":fk_PosicionID", $datos["fk_PosicionID"], PDO::PARAM_STR);

        if($stmt->execute()){

            return "ok";

        }else{

            print_r(Conexion::conectar()->errorInfo());

        }
        $stmt->close();
        $stmt = null;	

    }

    // funcion mostrar

    static public function mdlSeleccionarPersonal($tabla, $item, $valor){

	

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



    static public function mdlEliminarPersonal($tabla, $valor){
	
        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE PersonalID = :PersonalID");
    
        $stmt->bindParam(":PersonalID", $valor, PDO::PARAM_STR);
    
        if($stmt->execute()){
    
            return "ok";
    
        }else{
    
            print_r(Conexion::conectar()->errorInfo());
    
        }
    
        $stmt->close();
    
        $stmt = null;	
    }



    
    static public function mdlActualizarPersonal($tabla, $datos){
        
        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET Nombres=:Nombres, Apellidos=:Apellidos, FechaNacimiento=:FechaNacimiento, Genero=:Genero, Comentarios=:Comentarios, fk_RolID=:fk_RolID, fk_PosicionID=:fk_PosicionID WHERE PersonalID = :PersonalID");

        $stmt->bindParam(":Nombres", $datos["Nombres"], PDO::PARAM_STR);
        $stmt->bindParam(":Apellidos", $datos["Apellidos"], PDO::PARAM_STR);
        $stmt->bindParam(":FechaNacimiento", $datos["FechaNacimiento"], PDO::PARAM_STR);
        $stmt->bindParam(":Genero", $datos["Genero"], PDO::PARAM_STR);
        $stmt->bindParam(":Comentarios", $datos["Comentarios"], PDO::PARAM_STR);
        $stmt->bindParam(":fk_RolID", $datos["fk_RolID"], PDO::PARAM_STR);
        $stmt->bindParam(":fk_PosicionID", $datos["fk_PosicionID"], PDO::PARAM_STR);
        $stmt->bindParam(":PersonalID", $datos["PersonalID"], PDO::PARAM_INT);

        if($stmt->execute()){

            return "ok";

        }else{

            print_r(Conexion::conectar()->errorInfo());

        }

        $stmt->close();

        $stmt = null;	

    }
}