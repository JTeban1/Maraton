<?php

require_once "models/modelo.maraton.php";

class ControladorMaraton{

	/*=============================================
	Registro
	=============================================*/

	static public function ctrRegistroMaraton(){

		if(isset($_POST["registroNombreMaraton"])){

			$tabla = "tbl_maraton";

			$datos = array("NombreMaraton" => $_POST["registroNombreMaraton"],
							"NombreCiudad" => $_POST["registroNombreCiudad"],
							"NombreCelebracion" => $_POST["registroNombreCelebracion"],
							"fk_PaisID" => $_POST["registrosfk_PaisID"]);

			$respuesta = ModeloMaraton::mdlMaraton($tabla, $datos);

			return $respuesta;

		}

	}

	/*=============================================
	Seleccionar Registros
	=============================================*/

	static public function ctrSeleccionarRegistroMaraton($item, $valor){

		$tabla = "tbl_maraton";

		$respuesta = ModeloMaraton::mdlSeleccionarMaraton($tabla, $item, $valor);

		return $respuesta;

	}


     /*=============================================
	Actualizar Registro
	=============================================*/
	static public function ctrActualizarRegistroMaraton(){

		if(isset($_POST["actualizarNombreMaraton"])){

			$tabla = "tbl_maraton";

			$datos = array("maratonID" => $_POST["idmaraton"],
							"NombreMaraton" => $_POST["actualizarNombreMaraton"],
				           "NombreCiudad" => $_POST["actualizarNombreCiudad"],
				           "NombreCelebracion" => $_POST["actualizarNombreCelebracion"],
						   "fk_PaisID" => $_POST["actualizarfk_PaisID"]);

			$respuesta = ModeloMaraton::mdlActualizarMaraton($tabla, $datos);

			return $respuesta;

		}


	}

	/*=============================================
	Eliminar Registro
	=============================================*/
	public function ctrEliminarRegistroMaraton(){

		if(isset($_POST["eliminarRegistroMaraton"])){

			$tabla = "tbl_maraton";
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