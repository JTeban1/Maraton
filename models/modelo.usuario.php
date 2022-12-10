<?php


require_once "config/conexion.php";  


class ModelosUsuario {
    /*=============================================
    tabla usuario
    =============================================*/

    //funcio crear 

    static public function mdlUsuario($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(Email, Contrasena, Nombre, Apellido, fk_RolID) 
        VALUES (:Email, :Contrasena,:Nombre,:Apellido,:fk_RolID)");

        $stmt->bindParam(":Email", $datos["Email"], PDO::PARAM_STR);
        $stmt->bindParam(":Contrasena", $datos["Contrasena"], PDO::PARAM_STR);
        $stmt->bindParam(":Nombre", $datos["Nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":Apellido", $datos["Apellido"], PDO::PARAM_STR);
        $stmt->bindParam(":fk_RolID", $datos["fk_RolID"], PDO::PARAM_STR);

        if($stmt->execute()){

            return "ok";

        }else{

            print_r(Conexion::conectar()->errorInfo());

        }
        $stmt->close();
        $stmt = null;	

    }

    // funcion mostrar

    static public function mdlSeleccionarUsuario($tabla, $item, $valor){

	

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

    
    static public function mdlEliminarUsuario($tabla, $valor){
	
        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE UsuarioID = :UsuarioID");
    
        $stmt->bindParam(":UsuarioID", $valor, PDO::PARAM_STR);
    
        if($stmt->execute()){
    
            return "ok";
    
        }else{
    
            print_r(Conexion::conectar()->errorInfo());
    
        }
    
        $stmt->close();
    
        $stmt = null;	
    }
    // funcion actualizar 



    static public function mdlActualizarUsuario($tabla, $datos){
        
        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET Email=:Email, Contrasena=:Contrasena, Nombre=:Nombre, Apellido=:Apellido, fk_RolID=:fk_RolID WHERE UsuarioID = :UsuarioID");

        $stmt->bindParam(":Email", $datos["Email"], PDO::PARAM_STR);
        $stmt->bindParam(":Contrasena", $datos["Contrasena"], PDO::PARAM_STR);
        $stmt->bindParam(":Nombre", $datos["Nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":Apellido", $datos["Apellido"], PDO::PARAM_STR);
        $stmt->bindParam(":fk_RolID", $datos["fk_RolID"], PDO::PARAM_STR);
        $stmt->bindParam(":UsuarioID", $datos["UsuarioID"], PDO::PARAM_INT);

        if($stmt->execute()){

            return "ok";

        }else{

            print_r(Conexion::conectar()->errorInfo());

        }

        $stmt->close();

        $stmt = null;	

    }
}