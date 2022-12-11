<?php


require_once "config/conexion.php";  


class ModeloRegistro{
    
    /*=============================================
    tabla personal
    =============================================*/

    //funcio crear 

    static public function mdlRegistro($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(FechaRegistro, Costo, ObjetivoPatrocinio,fk_CorredorID,fk_kitID,fk_EstadoRegistroID,fk_CaridadID) 
        VALUES (:FechaRegistro, :Costo, :ObjetivoPatrocinio, :fk_CorredorID, :fk_kitID, :fk_EstadoRegistroID, :fk_CaridadID)");

        $stmt->bindParam(":FechaRegistro", $datos["FechaRegistro"], PDO::PARAM_STR);
        $stmt->bindParam(":Costo", $datos["Costo"], PDO::PARAM_STR);
        $stmt->bindParam(":ObjetivoPatrocinio", $datos["ObjetivoPatrocinio"], PDO::PARAM_STR);
        $stmt->bindParam(":fk_CorredorID", $datos["fk_CorredorID"], PDO::PARAM_STR);
        $stmt->bindParam(":fk_kitID", $datos["fk_kitID"], PDO::PARAM_STR);
        $stmt->bindParam(":fk_EstadoRegistroID", $datos["fk_EstadoRegistroID"], PDO::PARAM_STR);
        $stmt->bindParam(":fk_CaridadID", $datos["fk_CaridadID"], PDO::PARAM_STR);

        if($stmt->execute()){

            return "ok";

        }else{

            print_r(Conexion::conectar()->errorInfo());

        }
        $stmt->close();
        $stmt = null;	

    }

    // funcion mostrar

    static public function mdlSeleccionarRegistro($tabla, $item, $valor){

	

		if($item == null && $valor == null){

		  $stmt = Conexion::conectar()->prepare("SELECT RegistroID,FechaRegistro, Costo, ObjetivoPatrocinio , FechaNacimiento, opcionkit, NombreCaridad, estadoRegitro FROM $tabla, tbl_corredor, tbl_kitcompeticion, tbl_caridad,tbl_estadoregistro WHERE tbl_registro.fk_CaridadID = tbl_caridad.CaridadID AND tbl_registro.fk_CorredorID = tbl_corredor.CorredorID AND tbl_registro.fk_kitID = tbl_kitcompeticion.kitID AND tbl_registro.fk_EstadoRegistroID = tbl_estadoregistro.estadoID AND tbl_registro.fk_CaridadID = tbl_caridad.CaridadID");
          //SELECT RegistroID, Costo, ObjetivoPatrocinio As Patrocinio, estadoRegistro, NombreCaridad, Nombre FROM $tabla, tbl_corredor, tbl_estadoregistro, tbl_caridad,tbl_usuario WHERE tbl_registro.fk_CaridadID = tbl_caridad.CaridadID AND tbl_registro.fk_CorredorID = tbl_estadoregistro.estadoID AND tbl_usuario.UsuarioID = tbl_corredor.fk_UsuarioID

		  $stmt->execute();

		  return $stmt -> fetchAll();

	  }else{

		  $stmt = Conexion::conectar()->prepare("SELECT RegistroID, FechaRegistro,Costo, ObjetivoPatrocinio , FechaNacimiento, opcionkit, NombreCaridad, estadoRegitro FROM tbl_registro, tbl_corredor, tbl_kitcompeticion, tbl_caridad,tbl_estadoregistro WHERE $item = :$item AND tbl_registro.fk_CaridadID = tbl_caridad.CaridadID AND tbl_registro.fk_CorredorID = tbl_corredor.CorredorID AND tbl_registro.fk_kitID = tbl_kitcompeticion.kitID AND tbl_registro.fk_EstadoRegistroID = tbl_estadoregistro.estadoID AND tbl_registro.fk_CaridadID = tbl_caridad.CaridadID");

		  $stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);

		  $stmt->execute();

		  return $stmt -> fetch();


	  }

	  $stmt->close();

	  $stmt = null;	
    }



    static public function mdlEliminarRegistro($tabla, $valor){
	
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
    static public function mdlActualizarRegistro($tabla, $datos){
        
        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET FechaRegistro=:FechaRegistro, Costo=:Costo, ObjetivoPatrocinio=:ObjetivoPatrocinio, fk_CorredorID=:fk_CorredorID, fk_kitID=:fk_kitID, fk_EstadoRegistroID=:fk_EstadoRegistroID, fk_CaridadID=:fk_CaridadID WHERE RegistroID = :RegistroID");

        $stmt->bindParam(":FechaRegistro", $datos["FechaRegistro"], PDO::PARAM_STR);
        $stmt->bindParam(":Costo", $datos["Costo"], PDO::PARAM_STR);
        $stmt->bindParam(":ObjetivoPatrocinio", $datos["ObjetivoPatrocinio"], PDO::PARAM_STR);
        $stmt->bindParam(":fk_CorredorID", $datos["fk_CorredorID"], PDO::PARAM_STR);
        $stmt->bindParam(":fk_kitID", $datos["fk_kitID"], PDO::PARAM_STR);
        $stmt->bindParam(":fk_EstadoRegistroID", $datos["fk_EstadoRegistroID"], PDO::PARAM_STR);
        $stmt->bindParam(":fk_CaridadID", $datos["fk_CaridadID"], PDO::PARAM_STR);
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