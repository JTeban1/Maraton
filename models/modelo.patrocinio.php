<?php

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

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ");

        $stmt->execute();
        return $stmt -> fetchAll();
        $stmt->close();
        $stmt = null;	
    }

}
