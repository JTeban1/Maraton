<?php


class ModeloCaridad {
    /*=============================================
    tabla caridad
    =============================================*/

    //funcio crear 

    static public function mdlCaridad($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(NombreCaridad, Descripcion, logoCaridad) 
        VALUES (:NombreCaridad, :Descripcion, :logoCaridad)");

        $stmt->bindParam(":NombreCaridad", $datos["NombreCaridad"], PDO::PARAM_STR);
        $stmt->bindParam(":Descripcion", $datos["Descripcion"], PDO::PARAM_STR);
        $stmt->bindParam(":logoCaridad", $datos["logoCaridad"], PDO::PARAM_STR);

        if($stmt->execute()){

            return "ok";

        }else{

            print_r(Conexion::conectar()->errorInfo());

        }
        $stmt->close();
        $stmt = null;	

    }

    // funcion mostrar

    static public function mdlSeleccionarCaridad($tabla){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ");

        $stmt->execute();
        return $stmt -> fetchAll();
        $stmt->close();
        $stmt = null;	
    }
}
