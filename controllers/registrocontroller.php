<?php
require_once "models/modelo.registro.php";

class ControladorRegis{

	/*=============================================
	Registro
	=============================================*/

	static public function ctrRegistroRegis(){

		if(isset($_POST["registroFechaRegistroregistro"])){

			$tabla = "TBL_Registro";

			$datos = array("FechaRegistro" => $_POST["registroFechaRegistroregistro"],
							"Costo" => $_POST["registroCostoregistro"],
							"ObjetivoPatrocinio" => $_POST["registroObjetivoPatrocinioregistro"],
							"fK_CorredorID" => $_POST["registroFK_CorredorIDregistro"],
							"fK_KitID" => $_POST["registroFK_KitIDregistro"],
							"fK_EstadoRegistroID" => $_POST["registroFK_EstadoRegistroIDregistro"],
							"fK_CaridadID"=> $_POST["registroFK_CaridadIDregistros"]);

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

		if(isset($_POST[""])){

			if($_POST[""] != ""){			

				$password = $_POST[""];

			}else{

				$password = $_POST[""];
			}

			$tabla = "TBL_Registro";

			$datos = array("RegistroID" => $_POST[""],
							"FechaRegistro" => $_POST["actualizarFechaRegistroregistro"],
				           "Costo" => $_POST["actualizarCostoregistro"],
						   "ObjetivoPatrocinio" => $_POST["actualizarObjetivoPatrocinioregistro"],
						   "FK_CorredorID" => $_POST["actualizarFK_CorredorIDregistro"],
						   "FK_KitID" => $_POST["actualizarFK_KitIDregistro"],
						   "FK_EstadoRegistroID" => $_POST["actualizarFK_EstadoRegistroIDregistro"],
				           "FK_CaridadID"=> $_POST["actualizarFK_CaridadIDregistro"]);

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