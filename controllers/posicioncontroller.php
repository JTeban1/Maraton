<?php

require_once "models/modelo.posicion.php";

class ControladorPosicion{

	/*=============================================
	Registro
	=============================================*/

	static public function ctrRegistroPosi(){

		if(isset($_POST["registroNombrePosicionposicion"])){

			$tabla = "TBL_Posicion";

			$datos = array("NombrePosicion" => $_POST["registroNombrePosicionposicion"],
				           "DescripcionPosicion" => $_POST["registroDescripcionPosicion"],
				           "TarifaPago" => $_POST["registroTarifaPagoposicion"]);

			$respuesta = ModeloPosicion::mdlPosicion($tabla, $datos);

			return $respuesta;

		}

	}

	/*=============================================
	Seleccionar Registros
	=============================================*/

	static public function ctrSeleccionarRegistroPosi($item, $valor){

		$tabla = "TBL_Posicion";

		$respuesta = ModeloPosicion::mdlSeleccionarPosicion($tabla, $item, $valor);

		return $respuesta;

	}


     /*=============================================
	Actualizar Registro
	=============================================*/
	static public function ctrActualizarRegistroPosi(){

		if(isset($_POST[""])){

			if($_POST[""] != ""){			

				$password = $_POST[""];

			}else{

				$password = $_POST[""];
			}

			$tabla = "TBL_Posicion";

			$datos = array("PosicionID" => $_POST[""],
							"NombrePosicion" => $_POST[""],
				           "DescripcionPosicion" => $_POST[""],
						   "TarifaPago" => $_POST[""]);

			$respuesta = ModeloPosicion::mdlActualizarPosicion($tabla, $datos);

			return $respuesta;

		}


	}

	/*=============================================
	Eliminar Registro
	=============================================*/
	public function ctrEliminarRegistroPosi(){

		if(isset($_POST["eliminarRegistroPosicion"])){

			$tabla = "TBL_Posicion";
			$valor = $_POST["eliminarRegistroPosicion"];

			$respuesta = ModeloPosicion::mdlEliminarPosicion($tabla, $valor);

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