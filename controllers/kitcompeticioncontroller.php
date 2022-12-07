<?php
require_once "models/modelo.kitcompeticion.php";


class ControladorKitCompetencia{


	/*=============================================
	Registro
	=============================================*/

	static public function ctrRegistroKitCompe(){

		if(isset($_POST["registroOpcionKit"])){

			$tabla = "TBL_KitCompeticion";

			$datos = array("opcionkit " => $_POST["registroOpcionKit"],
				           "valorkit" => $_POST["registroValorKit"]);

			$respuesta = ModelosKitCompeticion::mdlKitcompeticion($tabla, $datos);

			return $respuesta;

		}

	}

	/*=============================================
	Seleccionar Registros
	=============================================*/

	static public function ctrSeleccionarRegistroKitCompe($item, $valor){

		$tabla = "TBL_KitCompeticion";

		$respuesta = ModelosKitCompeticion::mdlSeleccionarKitcompeticion($tabla, $item, $valor);

		return $respuesta;

	}


     /*=============================================
	Actualizar Registro
	=============================================*/
	static public function ctrActualizarRegistroKitCompe(){

		if(isset($_POST[""])){

			if($_POST[""] != ""){			

				$password = $_POST[""];

			}else{

				$password = $_POST[""];
			}

			$tabla = "TBL_KitCompeticion";

			$datos = array("kitID" => $_POST[""],
							"opcionkit" => $_POST["actualizarOpcionKit"],
				           "valorkit" => $_POST["actualizarValorKit"]);

			$respuesta = ModelosKitCompeticion::mdlActualizarKitcompeticion($tabla, $datos);

			return $respuesta;

		}


	}

	/*=============================================
	Eliminar Registro
	=============================================*/
	public function ctrEliminarRegistroKitCompe(){

		if(isset($_POST["eliminarRegistroKitCompetencia"])){

			$tabla = "TBL_KitCompeticion";
			$valor = $_POST["eliminarRegistroKitCompetencia"];

			$respuesta = ModelosKitCompeticion::mdlEliminarKitCompeticion($tabla, $valor);

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