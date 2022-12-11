<?php
require_once "models/modelo.registro.php";

class ControladorRegis{

	/*=============================================
	Registro
	=============================================*/

	static public function ctrRegistroRegis(){

		if(isset($_POST["registroFechaRegistroregistro"])){

			$tabla = "tbl_registro";

			$datos = array("FechaRegistro" => $_POST["registroFechaRegistroregistro"],
							"Costo" => $_POST["registroCostoregistro"],
							"ObjetivoPatrocinio" => $_POST["registroObjetivoPatrocinioregistro"],
							"fK_CorredorID" => $_POST["registroFK_CorredorIDregistro"],
							"fK_kitID" => $_POST["registroFK_KitIDregistro"],
							"fK_EstadoRegistroID" => $_POST["registroFK_EstadoRegistroIDregistro"],
							"fK_CaridadID"=> $_POST["registroFK_CaridadIDregistro"]);

			$respuesta = ModeloRegistro::mdlRegistro($tabla, $datos);

			return $respuesta;

		}

	}

	/*=============================================
	Seleccionar Registros
	=============================================*/

	static public function ctrSeleccionarRegistroRegis($item, $valor){

		$tabla = "TBL_Registro";

		$respuesta = ModeloRegistro::mdlSeleccionarRegistro($tabla, $item, $valor);

		return $respuesta;

	}


     /*=============================================
	Actualizar Registro
	=============================================*/
	static public function ctrActualizarRegistroRegis(){

		if(isset($_POST["actualizarFechaRegistroregistro"])){

			

			$tabla = "TBL_Registro";

			$datos = array("RegistroID" => $_POST["idregistro"],
							"FechaRegistro" => $_POST["actualizarFechaRegistroregistro"],
				           "Costo" => $_POST["actualizarCostoregistro"],
						   "ObjetivoPatrocinio" => $_POST["actualizarObjetivoPatrocinioregistro"],
						   "fk_CorredorID" => $_POST["actualizarfk_CorredorIDregistro"],
						   "fk_kitID" => $_POST["actualizarfk_kitIDregistro"],
						   "fk_EstadoRegistroID" => $_POST["actualizarfk_EstadoRegistroIDregistro"],
				           "fk_CaridadID"=> $_POST["actualizarfk_CaridadIDregistro"]);

			$respuesta = ModeloRegistro::mdlActualizarRegistro($tabla, $datos);

			return $respuesta;

		}


	}

	/*=============================================
	Eliminar Registro
	=============================================*/
	public function ctrEliminarRegistroRegis(){

		if(isset($_POST["eliminarRegistroRegis"])){

			$tabla = "TBL_Registro";
			$valor = $_POST["eliminarRegistroRegis"];

			$respuesta = ModeloRegistro::mdlEliminarRegistro($tabla, $valor);

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