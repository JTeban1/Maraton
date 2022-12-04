<?php

class ModelosKitCompeticion {
    /*=============================================
    tabla kitcompeticion
    =============================================*/

    //funcio crear 

    static public function mdlKitcompeticion($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(opcionkit, valorkit) 
        VALUES (:opcionkit,:valorkit)");

        $stmt->bindParam(":opcionkit", $datos["opcionkit"], PDO::PARAM_STR);
        $stmt->bindParam(":valorkit", $datos["valorkit"], PDO::PARAM_STR);

        if($stmt->execute()){

            return "ok";

        }else{

            print_r(Conexion::conectar()->errorInfo());

        }
        $stmt->close();
        $stmt = null;	

    }

    // funcion mostrar

    static public function mdlSeleccionarKitcompeticion($tabla){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ");

        $stmt->execute();
        return $stmt -> fetchAll();
        $stmt->close();
        $stmt = null;
    }
}