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

		  $stmt = Conexion::conectar()->prepare("SELECT UsuarioID , Email, Contrasena, Nombre, Apellido , rol FROM  $tabla, tbl_rol Where $tabla.fk_RolID = tbl_rol.rolID");
          //SELECT UsuarioID , Email, Contrasena, Nombre, Apellido AS  rol FROM  $tabla, tbl_rol Where $tabla.fk_RolID = tbl_rol.rolID

		  $stmt->execute();

		  return $stmt -> fetchAll();

	  }else{

		  $stmt = Conexion::conectar()->prepare("SELECT UsuarioID , Email, Contrasena, Nombre, Apellido ,rol FROM tbl_usuario, tbl_rol WHERE $item = :$item AND tbl_usuario.fk_RolID = tbl_rol.rolID");

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