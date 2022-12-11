<?php

require_once "models/modelo.pais.php";

class ControladorPais{

	/*=============================================
	Registro
	=============================================*/

	static public function ctrRegistroPais(){

		if(isset($_POST["registroNombrePais"])){

			$tabla = "tbl_pais";

			$datos = array("NombrePais" => $_POST["registroNombrePais"],
				           "BanderaPais"=> addslashes(file_get_contents ($_FILES["registroBanderaPais"]["tmp_name"])));//ES IMG

			$respuesta = ModeloPais::mdlPais($tabla, $datos);

			return $respuesta;

		}

	}

	/*=============================================
	Seleccionar Registros
	=============================================*/

	static public function ctrSeleccionarRegistroPais($item, $valor){

		$tabla = "tbl_pais";

		$respuesta = ModeloPais::mdlSeleccionarPais($tabla, $item, $valor);

		return $respuesta;

	}


     /*=============================================
	Actualizar Registro
	=============================================*/
	static public function ctrActualizarRegistroPais(){

		if(isset($_POST["actualizarNombrePais"])){



			$tabla = "tbl_pais";

			$datos = array("PaisID" => $_POST["idpais"],
							"NombrePais" => $_POST["actualizarNombrePais"],
							"BanderaPais"=> addslashes(file_get_contents ($_FILES["actualizarBanderaPais"]["tmp_name"])));//ES IMG;

			$respuesta = ModeloPais::mdlActualizarPais($tabla, $datos);

			return $respuesta;

		}


	}

	/*=============================================
	Eliminar Registro
	=============================================*/
	public function ctrEliminarRegistroPais(){

		if(isset($_POST["eliminarRegistroPais"])){

			$tabla = "tbl_pais";
			$valor = $_POST["eliminarRegistroPais"];

			$respuesta = ModeloPais::mdlEliminarPais($tabla, $valor);

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