<?php


require_once "models/modelo.registroevento.php";

class ControladorRegistroEvento{

	/*=============================================
	Registro
	=============================================*/

	static public function ctrRegistroRegistroEven(){

		if(isset($_POST[""])){

			$tabla = "TBL_RegistroEvento";

			$datos = array("NumDorsal" => $_POST[""],
							"TiempoCarrera" => $_POST[""],
							"FK_RegistroID" => $_POST[""],
							"FK_EventoID" => $_POST[""]);

			$respuesta = //ModeloFormularios::mdlRegistro($tabla, $datos);

			return $respuesta;

		}

	}

	/*=============================================
	Seleccionar Registros
	=============================================*/

	static public function ctrSeleccionarRegistroRegistroEven($item, $valor){

		$tabla = "TBL_RegistroEvento";

		$respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);

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
							"NumDorsal" => $_POST[""],
				           "TiempoCarrera" => $_POST[""],
				           "FK_RegistroID" => $_POST[""],
				           "FK_EventoID" => $_POST[""]);

			$respuesta = ModeloFormularios::mdlActualizarRegistro($tabla, $datos);

			return $respuesta;

		}


	}

	/*=============================================
	Eliminar Registro
	=============================================*/
	public function ctrEliminarRegistroRegistroEven(){

		if(isset($_POST[""])){

			$tabla = "TBL_RegistroEvento";
			$valor = $_POST[""];

			$respuesta = ModeloFormularios::mdlEliminarRegistro($tabla, $valor);

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