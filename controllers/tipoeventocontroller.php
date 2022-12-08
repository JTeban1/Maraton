<?php

require_once "models/modelo.tipoevento.php";

class ControladorTipoEvento{

	/*=============================================
	Registro
	=============================================*/

	static public function ctrRegistroTipoEven(){

		if(isset($_POST["registroNombreTipoEvento"])){

			$tabla = "TBL_TipoEvento";

			$datos = array("NombreTipoEvento" => $_POST["registroNombreTipoEvento"]);

			$respuesta = ModeloTipoEvento::mdlTipoEvento($tabla, $datos);

			return $respuesta;

		}

	}

	/*=============================================
	Seleccionar Registros
	=============================================*/

	static public function ctrSeleccionarRegistroTipoEven($item, $valor){

		$tabla = "TBL_TipoEvento";

		$respuesta = ModeloTipoEvento::mdlSeleccionarTipoEvento($tabla, $item, $valor);

		return $respuesta;

	}


     /*=============================================
	Actualizar Registro
	=============================================*/
	static public function ctrActualizarRegistroTipoEven(){

		if(isset($_POST["actualizarNombreTipoEvento"])){

			
			$tabla = "TBL_TipoEvento";

			$datos = array(
							"NombreTipoEvento" => $_POST["actualizarNombreTipoEvento"]);

			$respuesta = ModeloTipoEvento::mdlActualizarTipoEvento($tabla, $datos);

			return $respuesta;

		}


	}

	/*=============================================
	Eliminar Registro
	=============================================*/
	public function ctrEliminarRegistroTipoEven(){

		if(isset($_POST["eliminarRegistroEvento"])){

			$tabla = "TBL_TipoEvento";
			$valor = $_POST["eliminarRegistroEvento"];

			$respuesta = ModeloTipoEvento::mdlEliminarTipoEvento($tabla, $valor);

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