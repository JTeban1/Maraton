<?php

require_once "models/modelo.voluntario.php";

class ControladorVoluntario{

	/*=============================================
	Registro
	=============================================*/

	static public function ctrRegistroVoluntario(){

		if(isset($_POST["registroNombrevoluntario"])){

			$tabla = "TBL_Voluntario";

			$datos = array("Nombres" => $_POST["registroNombrevoluntario"],
				           "Apellidos" => $_POST["registroApellidovoluntario"],
				           "fk_PaisID" => $_POST["registroFK_Paisvoluntario"],
						   "fk_GeneroID" => $_POST["registroFK_Generovoluntario"]);

			$respuesta = ModeloVoluntario::mdlVoluntario($tabla, $datos);

			return $respuesta;

		}

	}

	/*=============================================
	Seleccionar Registros
	=============================================*/

	static public function ctrSeleccionarRegistroVoluntario($item, $valor){

		$tabla = "TBL_Voluntario";

		$respuesta = ModeloVoluntario::mdlSeleccionarVoluntario($tabla, $item, $valor);

		return $respuesta;

	}


     /*=============================================
	Actualizar Registro
	=============================================*/
	static public function ctrActualizarRegistroVoluntario(){

		if(isset($_POST[""])){

			if($_POST[""] != ""){			

				$password = $_POST[""];

			}else{

				$password = $_POST[""];
			}

			$tabla = "TBL_Voluntario";

			$datos = array("VoluntarioID" => $_POST[""],
							"Nombres" => $_POST["actualizarNombrevoluntario"],
				           "Apellidos" => $_POST["actualizarApellidovoluntario"],
				           "fk_PaisID" => $_POST["actualizarFK_Paisvoluntario"],
						   "fk_GeneroID" => $_POST["actualizarFK_Generovoluntario"]);

			$respuesta = ModeloVoluntario::mdlActualizarVoluntario($tabla, $datos);

			return $respuesta;

		}


	}

	/*=============================================
	Eliminar Registro
	=============================================*/
	public function ctrEliminarRegistroVoluntario(){

		if(isset($_POST["eliminarRegistroVoluntario"])){

			$tabla = "TBL_Voluntario";
			$valor = $_POST["eliminarRegistroVoluntario"];

			$respuesta = ModeloVoluntario::mdlEliminarVoluntario($tabla, $valor);

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