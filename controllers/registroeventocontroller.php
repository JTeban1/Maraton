<?php


require_once "models/modelo.registroevento.php";

class ControladorRegistroEvento{

	/*=============================================
	Registro
	=============================================*/

	static public function ctrRegistroRegistroEven(){

		if(isset($_POST[""])){

			$tabla = "TBL_RegistroEvento";

			$datos = array("NumDorsal" => $_POST["registroNumDorsalevento"],
							"TiempoCarrera" => $_POST["registroTiempoCarreraevento"],
							"fK_RegistroID" => $_POST["registroFK_RegistroIDevento"],
							"fK_EventoID" => $_POST["registroFK_EventoIDevento"]);

			$respuesta = ModeloRegistroEvento::mdlRegistroEvento($tabla, $datos);

			return $respuesta;

		}

	}

	/*=============================================
	Seleccionar Registros
	=============================================*/

	static public function ctrSeleccionarRegistroRegistroEven($item, $valor){

		$tabla = "TBL_RegistroEvento";

		$respuesta = ModeloRegistroEvento::mdlSeleccionarRegistroEvento($tabla, $item, $valor);

		return $respuesta;

	}


     /*=============================================
	Actualizar Registro
	=============================================*/
	static public function ctrActualizarRegistroRegistroEven(){

		if(isset($_POST[""])){

			if($_POST[""] != ""){			

				$password = $_POST[""];

			}else{

				$password = $_POST[""];
			}

			$tabla = "TBL_RegistroEvento";

			$datos = array("RegistroID" => $_POST[""],
							"NumDorsal" => $_POST["actualizarNumDorsalevento"],
				           "TiempoCarrera" => $_POST["actualizarTiempoCarreraevento"],
				           "fk_RegistroID" => $_POST["actualizarFK_RegistroIDevento"],
				           "fk_EventoID" => $_POST["actualizarFK_EventoIDevento"]);

			$respuesta = ModeloRegistroEvento::mdlActualizarRegistroEvento($tabla, $datos);

			return $respuesta;

		}


	}

	/*=============================================
	Eliminar Registro
	=============================================*/
	public function ctrEliminarRegistroRegistroEven(){

		if(isset($_POST["eliminarRegistroEvento"])){

			$tabla = "TBL_RegistroEvento";
			$valor = $_POST["eliminarRegistroEvento"];

			$respuesta = ModeloRegistroEvento::mdlEliminarRegistroEvento($tabla, $valor);

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