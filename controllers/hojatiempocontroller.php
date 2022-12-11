<?php

require_once "models/modelo.hojatiempo.php";

class ControladorHojaTiempo{

	/*=============================================
	Registro
	=============================================*/

	static public function ctrRegistroHojaTiem(){

		if(isset($_POST["registroFechaInicio"])){

			$tabla = "TBL_HojaTiempo";

			$datos = array("FechaInicio" => $_POST["registroFechaInicio"],
				           "FechaFinal" => $_POST["registroFechaFinal"],
						   "ValorPagar" => $_POST["registroValorPagar"],
						   "fk_PersonalID" => $_POST["registrofk_PersonalID"]);

			$respuesta = ModeloHojatiempo::mdlHojatiempo($tabla, $datos);

			return $respuesta;

		}

	}

	/*=============================================
	Seleccionar Registros
	=============================================*/

	static public function ctrSeleccionarRegistroHojaTiem($item, $valor){

		$tabla = "TBL_HojaTiempo";

		$respuesta = ModeloHojatiempo::mdlSeleccionarHojatiempo($tabla, $item, $valor);

		return $respuesta;

	}


     /*=============================================
	Actualizar Registro
	=============================================*/
	static public function ctrActualizarRegistroHojaTiem(){

		if(isset($_POST["actualizarFechaInicio"])){

		

			$tabla = "TBL_HojaTiempo";

			$datos = array("HojaID" => $_POST["idhojatiem"],
							"FechaInicio" => $_POST["actualizarFechaInicio"],
							"FechaFinal" => $_POST["actualizarFechaFinal"],
							"ValorPagar" => $_POST["actualizarValorPagar"],
							"fk_PersonalID" => $_POST["actualizarfk_PersonalID"]);

			$respuesta = ModeloHojatiempo::mdlActualizarHojaTiempo($tabla, $datos);

			return $respuesta;

		}


	}

	/*=============================================
	Eliminar Registro
	=============================================*/
	public function ctrEliminarRegistroHojaTiem(){

		if(isset($_POST["eliminarRegistroHojaTiempo"])){

			$tabla = "TBL_HojaTiempo";
			$valor = $_POST["eliminarRegistroHojaTiempo"];

			$respuesta = ModeloHojatiempo::mdlEliminarHojaTiempo($tabla, $valor);

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