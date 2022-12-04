<?php

require_once "models/modelo.voluntario.php";

class ControladorVoluntario{

	/*=============================================
	Registro
	=============================================*/

	static public function ctrRegistroVoluntario(){

		if(isset($_POST[""])){

			$tabla = "TBL_Voluntario";

			$datos = array("Nombres" => $_POST[""],
				           "Apellidos" => $_POST[""],
				           "FK_CodigoPais" => $_POST[""],
						   "FK_Genero" => $_POST[""]);

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
							"Nombres" => $_POST[""],
				           "Apellidos" => $_POST[""],
				           "FK_CodigoPais" => $_POST[""],
						   "FK_Genero" => $_POST[""]);

			$respuesta = ModeloVoluntario::mdlActualizarVoluntario($tabla, $datos);

			return $respuesta;

		}


	}

	/*=============================================
	Eliminar Registro
	=============================================*/
	public function ctrEliminarRegistroVoluntario(){

		if(isset($_POST[""])){

			$tabla = "TBL_Voluntario";
			$valor = $_POST[""];

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