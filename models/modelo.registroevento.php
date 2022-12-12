<?php

require_once "config/conexion.php";    



class ModeloRegistroEvento {
        
    /*=============================================
    tabla hojatiempo
    =============================================*/

    //funcio crear 

    static public function mdlRegistroEvento($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(NumDorsal, TiempoCarrera, fk_RegistroID, fk_EventoID) 
        VALUES (:NumDorsal, :TiempoCarrera,:fK_RegistroID,:fK_EventoID)");

        $stmt->bindParam(":NumDorsal", $datos["NumDorsal"], PDO::PARAM_STR);
        $stmt->bindParam(":TiempoCarrera", $datos["TiempoCarrera"], PDO::PARAM_STR);
        $stmt->bindParam(":fk_RegistroID", $datos["fk_RegistroID"], PDO::PARAM_STR);
        $stmt->bindParam(":fk_EventoID", $datos["fk_EventoID"], PDO::PARAM_STR);

        if($stmt->execute()){

            return "ok";

        }else{

            print_r(Conexion::conectar()->errorInfo());

        }
        $stmt->close();
        $stmt = null;	

    }

    // funcion mostrar

    static public function mdlSeleccionarRegistroEvento($tabla, $item, $valor){

	

		if($item == null && $valor == null){

		  $stmt = Conexion::conectar()->prepare("SELECT RegistroID,NumDorsal ,TiempoCarrera ,FechaRegistro,NombreEvento 
          FROM tbl_registroevento,tbl_evento,tbl_registro 
          WHERE $tabla.fk_RegistroID = tbl_registro.RegistroID 
          AND $tabla.fk_EventoID = tbl_evento.EventoID;");
        //SELECT RegistroID, Costo, ObjetivoPatrocinio As Patrocinio, estadoRegistro, NombreCaridad, Nombre FROM $tabla, tbl_corredor, tbl_estadoregistro, tbl_caridad,tbl_usuario WHERE tbl_registro.fk_CaridadID = tbl_caridad.CaridadID AND tbl_registro.fk_CorredorID = tbl_estadoregistro.estadoID AND tbl_usuario.UsuarioID = tbl_corredor.fk_UsuarioID
		  $stmt->execute();

		  return $stmt -> fetchAll();

	  }else{

		  $stmt = Conexion::conectar()->prepare("SELECT RegistroID , NumDorsal , TiempoCarrera , NombreEvento,FechaRegistro FROM tbl_registroevento tbl_evento,tbl_registro WHERE $item = :$item AND tbl_registroevento.fk_RegistroID = tbl_registro.RegistroID AND tbl_registroevento.fk_EventoID = tbl_evento.EventoID");

		  $stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);

		  $stmt->execute();

		  return $stmt -> fetch();


	  }

	  $stmt->close();

	  $stmt = null;	
    }



    static public function mdlEliminarRegistroEvento($tabla, $valor){
	
        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE RegistroID = :RegistroID");
    
        $stmt->bindParam(":RegistroID", $valor, PDO::PARAM_STR);
    
        if($stmt->execute()){
    
            return "ok";
    
        }else{
    
            print_r(Conexion::conectar()->errorInfo());
    
        }
    
        $stmt->close();
    
        $stmt = null;	
    }

    

    // funcion actualizar
    static public function mdlActualizarRegistroEvento($tabla, $datos){
        
        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET NumDorsal=:NumDorsal, TiempoCarrera=:TiempoCarrera, fk_RegistroID=:fk_RegistroID, fk_EventoID=:fk_EventoID WHERE RegistroID = :RegistroID");

        $stmt->bindParam(":NumDorsal", $datos["NumDorsal"], PDO::PARAM_STR);
        $stmt->bindParam(":TiempoCarrera", $datos["TiempoCarrera"], PDO::PARAM_STR);
        $stmt->bindParam(":fk_RegistroID", $datos["fk_RegistroID"], PDO::PARAM_STR);
        $stmt->bindParam(":fk_EventoID", $datos["fk_EventoID"], PDO::PARAM_STR);
        $stmt->bindParam(":RegistroID", $datos["RegistroID"], PDO::PARAM_INT);

        if($stmt->execute()){

            return "ok";

        }else{

            print_r(Conexion::conectar()->errorInfo());

        }

        $stmt->close();

        $stmt = null;	

    }
}