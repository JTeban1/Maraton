<?php
require_once "models/modelo.estadoregistro.php";

class ControladorEstadoRegistro{

	/*=============================================
	Registro
	=============================================*/

	static public function ctrRegistroEstaRegis(){

		if(isset($_POST["registroEstadoRegistro"])){

			$tabla = "tbl_estadoregistro";

			$datos = array("estadoRegitro" => $_POST["registroEstadoRegistro"]);

			$respuesta = ModeloEstadoRegistro::mdlEstadoRegistro($tabla, $datos);

			return $respuesta;

		}

	}

	/*=============================================
	Seleccionar Registros
	=============================================*/

	static public function ctrSeleccionarRegistroEstaRegis($item, $valor){

		$tabla = "tbl_estadoregistro";

		$respuesta = ModeloEstadoRegistro::mdlSeleccionarEstadoRegistro($tabla, $item, $valor);

		return $respuesta;

	}


     /*=============================================
	Actualizar Registro
	=============================================*/
	static public function ctrActualizarRegistroEstaRegis(){

		if(isset($_POST["actualizarEstadoRegistro"])){


			$tabla = "tbl_estadoregistro";

			$datos = array("estadoID" => $_POST["idestadoR"],
				"estadoRegitro" => $_POST["actualizarEstadoRegistro"]);

			$respuesta = ModeloEstadoRegistro::mdlActualizarEstadoRegistro($tabla, $datos);

			return $respuesta;

		}


	}

	/*=============================================
	Eliminar Registro
	=============================================*/
	public function ctrEliminarRegistroEstaRegis(){

		if(isset($_POST["eliminarRegistroEstadoRegistro"])){

			$tabla = "TBL_EstadoRegistro";
			$valor = $_POST["eliminarRegistroEstadoRegistro"];

			$respuesta = ModeloEstadoRegistro::mdlEliminarRegistro($tabla, $valor);

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