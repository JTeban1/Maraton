<?php

require_once "models/modelo.corredor.php";

class ControladorCorredor{

	/*=============================================
	Registro
	=============================================*/

	static public function ctrRegistroCorredor(){

		if(isset($_POST["registroFechaNacimiento"])){

			$tabla = "tbl_corredor";

			$datos = array("FechaNacimiento" => $_POST["registroFechaNacimiento"],
							"fk_GeneroID" => $_POST["registrofk_GeneroID"],
							"fk_UsuarioID" => $_POST["registrofk_UsuarioID"],
							"fk_PaisID" => $_POST["registrosfk_paisID"]);

			$respuesta = ModeloCorredor::mdlCorredor($tabla, $datos);

			return $respuesta;

		}

	}


	/*=============================================
	Seleccionar Registros
	=============================================*/

	static public function ctrSeleccionarRegistroCorredor($item, $valor){

		$tabla = "tbl_corredor";

		$respuesta = ModeloCorredor::mdlSeleccionarCorredor($tabla, $item, $valor);

		return $respuesta;

	}


     /*=============================================
	Actualizar Registro
	=============================================*/
	static public function ctrActualizarRegistroCorredor(){

		if(isset($_POST["actualizarFechaNacimiento"])){

			

			$tabla = "tbl_corredor";

			$datos = array("CorredorID" => $_POST["idcorredor"],
							"FechaNacimiento" => $_POST["actualizarFechaNacimiento"],
							"fk_GeneroID" => $_POST["actualizarfk_GeneroID"],
							"fk_UsuarioID" => $_POST["actualizarfk_UsuarioID"],
							"fk_PaisID" => $_POST["actualizarfk_paisID"]);

			$respuesta = ModeloCorredor::mdlActualizarCorredor($tabla, $datos);

			return $respuesta;

		}


	}

	/*=============================================
	Eliminar Registro
	=============================================*/
	public function ctrEliminarRegistroCorredor(){

		if(isset($_POST["eliminarRegistroCorredor"])){

			$tabla = "tbl_corredor";
			$valor = $_POST["eliminarRegistroCorredor"];

			$respuesta = ModeloCorredor::mdlEliminarCorredor($tabla, $valor);

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