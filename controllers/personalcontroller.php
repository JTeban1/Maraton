<?php

require_once "models/modelo.personal.php";

class ControladorPersonal{

	/*=============================================
	Registro
	=============================================*/

	static public function ctrRegistroPersonal(){

		if(isset($_POST["registroNombrepersonal"])){

			$tabla = "TBL_Personal";

			$datos = array("Nombres" => $_POST["registroNombrepersonal"],
				           "Apellidos" => $_POST["registroApellidopesonal"],
						   "FechaNacimiento" => $_POST["registroFechaNacimientopersonal"],
						   "Genero" => $_POST["registroGeneropersonal"],
						   "Comentarios" => $_POST["registroComentariopersonal"],
				           "fk_RolID" => $_POST["registrofk_RolID"],
						   "fk_PosicionID" => $_POST["registrofk_PosicionID"]);

			$respuesta = ModeloPersonal::mdlPersonal($tabla, $datos);

			return $respuesta;

		}

	}

	/*=============================================
	Seleccionar Registros
	=============================================*/

	static public function ctrSeleccionarRegistroPersonal($item, $valor){

		$tabla = "TBL_Personal";

		$respuesta = ModeloPersonal::mdlSeleccionarPersonal($tabla, $item, $valor);

		return $respuesta;

	}


     /*=============================================
	Actualizar Registro
	=============================================*/
	static public function ctrActualizarRegistroPersonal(){

		if(isset($_POST["actualizarNombrepersonal"])){

			$tabla = "TBL_Personal";

			$datos = array("PersonalID" => $_POST[""],
							"Nombres" => $_POST["actualizarNombrepersonal"],
				           "Apellidos" => $_POST["actualizarApellidopesonal"],
				           "FechaNacimiento" => $_POST["actualizarFechaNacimientopersonal"],
						   "Genero" => $_POST["actualizarGeneropersonal"],
						   "Comentarios" => $_POST["actualizarComentariopersonal"],
						   "fk_RolID" => $_POST["actualizarfk_RolID"],
						   "fk_PosicionID" => $_POST["actualizarfk_PosicionID"]);

			$respuesta = ModeloPersonal::mdlActualizarPersonal($tabla, $datos);

			return $respuesta;

		}


	}

	/*=============================================
	Eliminar Registro
	=============================================*/
	public function ctrEliminarRegistroPersonal(){

		if(isset($_POST["eliminarRegistroPersonal"])){

			$tabla = "TBL_Personal";
			$valor = $_POST["eliminarRegistroPersonal"];

			$respuesta = ModeloPersonal::mdlEliminarPersonal($tabla, $valor);

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