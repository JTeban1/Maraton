<?php

require_once "models/modelo.patrocinio.php";

class ControladorPatrocinio{

	/*=============================================
	Registro
	=============================================*/

	static public function ctrRegistroPatrocinio(){

		if(isset($_POST[""])){

			$tabla = "TBL_Patrocinio";

			$datos = array("NombrePatrocinador" => $_POST[""],
							"Monto" => $_POST[""],
							"FK_RegistroID" => $_POST[""]);

			$respuesta = ModeloPatrocinio::mdlPatrocinio($tabla, $datos);

			return $respuesta;

		}

	}

	/*=============================================
	Seleccionar Registros
	=============================================*/

	static public function ctrSeleccionarRegistroPatrocinio($item, $valor){

		$tabla = "TBL_Patrocinio";

		$respuesta = ModeloPatrocinio::mdlSeleccionarPatrocinio($tabla, $item, $valor);

		return $respuesta;

	}


     /*=============================================
	Actualizar Registro
	=============================================*/
	static public function ctrActualizarRegistroPatrocinio(){

		if(isset($_POST[""])){

			if($_POST[""] != ""){			

				$password = $_POST[""];

			}else{

				$password = $_POST[""];
			}

			$tabla = "TBL_Patrocinio";

			$datos = array("PatrocinioID" => $_POST[""],
							"NombrePatrocinador" => $_POST[""],
				           "Monto" => $_POST[""],
				           "FK_RegistroID" => $_POST[""]);

			$respuesta = ModeloPatrocinio::mdlActualizarPatrocinio($tabla, $datos);

			return $respuesta;

		}


	}

	/*=============================================
	Eliminar Registro
	=============================================*/
	public function ctrEliminarRegistroPatrocinio(){

		if(isset($_POST["eliminarRegistroPatrocinio"])){

			$tabla = "TBL_Patrocinio";
			$valor = $_POST["eliminarRegistroPatrocinio"];

			$respuesta = ModeloPatrocinio::mdlEliminarPatrocinio($tabla, $valor);

			if($respuesta == "ok"){

				echo '<script>

					if ( window.history.replaceState ) {

						window.history.replaceState( null, null, window.location.href );

					}

					window.location = "index.php?pagina=inicio";

				</script>';

			}

		}

	}



}