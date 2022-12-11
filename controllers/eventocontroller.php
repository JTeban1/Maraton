<?php

require_once "models/modelo.evento.php";

class ControladorEvento{

	/*=============================================
	Registro
	=============================================*/

	static public function ctrRegistroEvento(){

		if(isset($_POST["registroNombreEvento"])){

			$tabla = "TBL_Evento";

			$datos = array("NombreEvento" => $_POST["registroNombreEvento"],
							"FechaInicio" => $_POST["registroFechaInicio"],
							"Valor" => $_POST["registroValor"],
							"ParticiantesMax" => $_POST["RegistroParticipantesMax"],
							"fk_MaratonID" => $_POST["RegistroFK_MaratonID"],
							"fk_TipoEventoID" => $_POST["RegistroFK_TipoEventoID"]);

			$respuesta = ModeloEvento::mdlEvento($tabla, $datos);

			return $respuesta;

		}

	}

	/*=============================================
	Seleccionar Registros
	=============================================*/

	static public function ctrSeleccionarRegistroEvento($item, $valor){

		$tabla = "TBL_Evento";

		$respuesta = ModeloEvento::mdlSeleccionarEvento($tabla, $item, $valor);

		return $respuesta;

	}


     /*=============================================
	Actualizar Registro
	=============================================*/
	static public function ctrActualizarRegistroEvento(){

		if(isset($_POST["actualizarNombreEvento"])){

			
			$tabla = "TBL_Evento";

			$datos = array("EventoID" => $_POST["idevento"],
							"NombreEvento" => $_POST["actualizarNombreEvento"],
				           "FechaInicio" => $_POST["actualizarFechaInicio"],
				           "Valor" => $_POST["actualizarValor"],
						   "ParticipantesMax" => $_POST["actualizarParticipantesMax"],
						   "fk_MaratonID" => $_POST["actualizarFK_MaratonID"],
						   "fk_TipoEventoID" => $_POST["actualizarFK_TipoEventoID"]);

			$respuesta = ModeloEvento::mdlActualizarEvento($tabla, $datos);

			return $respuesta;

		}


	}

	/*=============================================
	Eliminar Registro
	=============================================*/
	public function ctrEliminarRegistroEvento(){

		if(isset($_POST["eliminarRegistroEvento"])){

			$tabla = "TBL_Evento";
			$valor = $_POST["eliminarRegistroEvento"];

			$respuesta = ModeloEvento::mdlEliminarEvento($tabla, $valor);

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