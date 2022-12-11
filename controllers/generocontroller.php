<?php
require_once "models/modelo.genero.php";

class ControladorGenero{

	/*=============================================
	Registro
	=============================================*/

	static public function ctrRegistroGenero(){

		if(isset($_POST["registrogenero"])){

			$tabla = "tbl_genero";

			$datos = array("genero" => $_POST["registrogenero"]);

			$respuesta = ModelosGenero::mdlGenero($tabla, $datos);

			return $respuesta;

		}

	}

	/*=============================================
	Seleccionar Registros
	=============================================*/

	static public function ctrSeleccionarRegistroGenero($item, $valor){

		$tabla = "tbl_genero";

		$respuesta = ModelosGenero::mdlSeleccionarGenero($tabla, $item, $valor);

		return $respuesta;

	}


     /*=============================================
	Actualizar Registro
	=============================================*/
	static public function ctrActualizarRegistroGenero(){

		if(isset($_POST["actualizarGenero"])){

			$tabla = "tbl_genero";

			$datos = array("generoID" => $_POST["idgenero"],
							"genero" => $_POST["actualizarGenero"]);

			$respuesta = ModelosGenero::mdlActualizarGenero($tabla, $datos);

			return $respuesta;

		}


	}

	/*=============================================
	Eliminar Registro
	=============================================*/
	public function ctrEliminarRegistroGenero(){

		if(isset($_POST["eliminarRegistroGenero"])){

			$tabla = "tbl_genero";
			$valor = $_POST["eliminarRegistroGenero"];

			$respuesta = ModelosGenero::mdlEliminarGenero($tabla, $valor);

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