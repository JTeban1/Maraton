<?php
require_once "models/modelo.estadoregistro.php";

class ControladorEstadoRegistro{

	/*=============================================
	Registro
	=============================================*/

	static public function ctrRegistroEstaRegis(){

		if(isset($_POST[""])){

			$tabla = "TBL_EstadoRegistro";

			$datos = array("EstadoRegistro" => $_POST[""]);

			$respuesta = ModeloEstadoRegistro::mdlEstadoRegistro($tabla, $datos);

			return $respuesta;

		}

	}

	/*=============================================
	Seleccionar Registros
	=============================================*/

	static public function ctrSeleccionarRegistroEstaRegis($item, $valor){

		$tabla = "TBL_EstadoRegistro";

		$respuesta = ModeloEstadoRegistro::mdlSeleccionarEstadoRegistro($tabla, $item, $valor);

		return $respuesta;

	}


     /*=============================================
	Actualizar Registro
	=============================================*/
	static public function ctrActualizarRegistroEstaRegis(){

		if(isset($_POST[""])){

			if($_POST[""] != ""){			

				$password = $_POST[""];

			}else{

				$password = $_POST[""];
			}

			$tabla = "TBL_EstadoRegistro";

			$datos = array("EstadoID" => $_POST[""],
							"EstadoRegistro" => $_POST[""]);

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