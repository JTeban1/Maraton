<?php

require_once "models/modelo.evento.php";

class ControladorEvento{

	/*=============================================
	Registro
	=============================================*/

	static public function ctrRegistroEvento(){

		if(isset($_POST[""])){

			$tabla = "TBL_Evento";

			$datos = array("NombreEvento" => $_POST[""],
							"FechaInicio" => $_POST[""],
							"Valor" => $_POST[""],
							"ParticipantesMax" => $_POST[""],
							"FK_MaratonID" => $_POST[""],
							"FK_TipoEventoID" => $_POST[""]);

			$respuesta = //ModeloFormularios::mdlRegistro($tabla, $datos);

			return $respuesta;

		}

	}

	/*=============================================
	Seleccionar Registros
	=============================================*/

	static public function ctrSeleccionarRegistroEvento($item, $valor){

		$tabla = "TBL_Evento";

		$respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);

		return $respuesta;

	}


     /*=============================================
	Actualizar Registro
	=============================================*/
	static public function ctrActualizarRegistroEvento(){

		if(isset($_POST[""])){

			if($_POST[""] != ""){			

				$password = $_POST[""];

			}else{

				$password = $_POST[""];
			}

			$tabla = "TBL_Evento";

			$datos = array("EventoID" => $_POST[""],
							"NombreEvento" => $_POST[""],
				           "FechaInicio" => $_POST[""],
				           "Valor" => $_POST[""],
						   "ParticipantesMax" => $_POST[""],
						   "FK_MaratonID" => $_POST[""],
						   "FK_TipoEventoID" => $_POST[""]);

			$respuesta = ModeloFormularios::mdlActualizarRegistro($tabla, $datos);

			return $respuesta;

		}


	}

	/*=============================================
	Eliminar Registro
	=============================================*/
	public function ctrEliminarRegistroEvento(){

		if(isset($_POST[""])){

			$tabla = "TBL_Evento";
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