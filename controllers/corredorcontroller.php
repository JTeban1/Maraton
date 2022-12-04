<?php

require_once "models/modelo.corredor.php";

class ControladorCorredor{

	/*=============================================
	Registro
	=============================================*/

	static public function ctrRegistroCorredor(){

		if(isset($_POST[""])){

			$tabla = "TBL_Corredor";

			$datos = array("FechaNacimiento" => $_POST[""],
				           "FK_Genero" => $_POST[""],
				           "FK_Email" => $_POST[""],
						   "FK_PaisID" => $_POST[""]);

			$respuesta = //ModeloFormularios::mdlRegistro($tabla, $datos);

			return $respuesta;

		}

	}

	/*=============================================
	Seleccionar Registros
	=============================================*/

	static public function ctrSeleccionarRegistroCorredor($item, $valor){

		$tabla = "TBL_Corredor";

		$respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);

		return $respuesta;

	}


     /*=============================================
	Actualizar Registro
	=============================================*/
	static public function ctrActualizarRegistroCorredor(){

		if(isset($_POST[""])){

			if($_POST[""] != ""){			

				$password = $_POST[""];

			}else{

				$password = $_POST[""];
			}

			$tabla = "TBL_Corredor";

			$datos = array("CorredorID" => $_POST[""],
							"FechaNacimiento" => $_POST[""],
							"FK_Genero" => $_POST[""],
							"FK_Email" => $_POST[""],
							"FK_PaisID" => $_POST[""]);

			$respuesta = ModeloFormularios::mdlActualizarRegistro($tabla, $datos);

			return $respuesta;

		}


	}

	/*=============================================
	Eliminar Registro
	=============================================*/
	public function ctrEliminarRegistroCorredor(){

		if(isset($_POST[""])){

			$tabla = "TBL_Corredor";
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