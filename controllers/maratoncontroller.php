<?php

require_once "models/modelo.maraton.php";

class ControladorMaraton{

	/*=============================================
	Registro
	=============================================*/

	static public function ctrRegistroMaraton(){

		if(isset($_POST[""])){

			$tabla = "TBL_Maraton";

			$datos = array("NombreMaraton" => $_POST[""],
							"NombreCiudad" => $_POST[""],
							"NombreCelebracion" => $_POST[""],
							"FK_CodigoPaisID" => $_POST[""]);

			$respuesta = ModeloMaraton::mdlMaraton($tabla, $datos);

			return $respuesta;

		}

	}

	/*=============================================
	Seleccionar Registros
	=============================================*/

	static public function ctrSeleccionarRegistroMaraton($item, $valor){

		$tabla = "TBL_Maraton";

		$respuesta = ModeloMaraton::mdlSeleccionarMaraton($tabla, $item, $valor);

		return $respuesta;

	}


     /*=============================================
	Actualizar Registro
	=============================================*/
	static public function ctrActualizarRegistroMaraton(){

		if(isset($_POST[""])){

			if($_POST[""] != ""){			

				$password = $_POST[""];

			}else{

				$password = $_POST[""];
			}

			$tabla = "TBL_Maraton";

			$datos = array("MaratonID" => $_POST[""],
							"NombreMaraton" => $_POST[""],
				           "NombreCiudad" => $_POST[""],
				           "NombreCelebracion" => $_POST[""],
						   "FK_CodigoPaisID" => $_POST[""]);

			$respuesta = ModeloMaraton::mdlActualizarMaraton($tabla, $datos);

			return $respuesta;

		}


	}

	/*=============================================
	Eliminar Registro
	=============================================*/
	public function ctrEliminarRegistroMaraton(){

		if(isset($_POST["eliminarRegistroMaraton"])){

			$tabla = "TBL_Maraton";
			$valor = $_POST["eliminarRegistroMaraton"];

			$respuesta = ModeloMaraton::mdlEliminarMaraton($tabla, $valor);

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