<?php

require_once "models/modelo.rol.php";

class ControladorRol{

	/*=============================================
	Registro
	=============================================*/

	static public function ctrRegistroRol(){

		if(isset($_POST["registroRol"])){

			$tabla = "TBL_Rol";

			$datos = array("rol" => $_POST["registroRol"]);

			$respuesta = ModeloRol::mdlRol($tabla, $datos);

			return $respuesta;

		}

	}

	/*=============================================
	Seleccionar Registros
	=============================================*/

	static public function ctrSeleccionarRegistroRol($item, $valor){

		$tabla = "TBL_Rol";

		$respuesta = ModeloRol::mdlSeleccionarRol($tabla, $item, $valor);

		return $respuesta;

	}


     /*=============================================
	Actualizar Registro
	=============================================*/
	static public function ctrActualizarRegistroRol(){

		if(isset($_POST["actualizarRol"])){

			$tabla = "TBL_Rol";

			$datos = array("rolID" => $_POST["idRol"],
							"rol" => $_POST["actualizarRol"]);

			$respuesta = ModeloRol::mdlActualizarRol($tabla, $datos);

			return $respuesta;

		}


	}

	/*=============================================
	Eliminar Registro
	=============================================*/
	public function ctrEliminarRegistroRol(){

		if(isset($_POST["eliminarRegistroRol"])){

			$tabla = "TBL_Rol";
			$valor = $_POST["eliminarRegistroRol"];

			$respuesta = ModeloRol::mdlEliminarRol($tabla, $valor);

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