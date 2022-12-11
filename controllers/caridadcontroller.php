<?php

require_once "models/modelo.caridad.php";

class ControladorCaridad{


	/*=============================================
	Registro
	=============================================*/

	static public function ctrRegistroCaridad(){

		if(isset($_POST["registroNombreCaridad"])){

			$tabla = "tbl_caridad";

			$datos = array("NombreCaridad" => $_POST["registroNombreCaridad"],
				           "Descripcion" => $_POST["registroDescripcionCaridad"],
				           "logoCaridad" => addslashes(file_get_contents ($_FILES["registroLogoCaridad"]["tmp_name"])));//es IMG

			$respuesta = ModeloCaridad::mdlCaridad($tabla, $datos);

			return $respuesta;

		}

	}

	/*=============================================
	Seleccionar Registros
	=============================================*/

	static public function ctrSeleccionarRegistroCaridad($item, $valor){

		$tabla = "TBL_Caridad";

		$respuesta = ModeloCaridad::mdlSeleccionarCaridad($tabla, $item, $valor);

		return $respuesta;

	}


     /*=============================================
	Actualizar Registro
	=============================================*/
	static public function ctrActualizarRegistroCaridad(){

		if(isset($_POST["actualizarNombreCaridad"])){

			

			$tabla = "TBL_Caridad";

			$datos = array("CaridadID" => $_POST["idcaridad"],
							"NombreCaridad" => $_POST["actualizarNombreCaridad"],
				           "Descripcion" => $_POST["actualizarDescripcionCaridad"],
						   "logoCaridad" => addslashes(file_get_contents ($_FILES["actualizarLogoCaridad"]["tmp_name"])));//es IMG);

			$respuesta = ModeloCaridad::mdlActualizarCaridad($tabla, $datos);

			return $respuesta;

		}


	}

	/*=============================================
	Eliminar Registro
	=============================================*/
	public function ctrEliminarRegistroCaridad(){

		if(isset($_POST["eliminarRegistroCaridad"])){

			$tabla = "TBL_Caridad";
			$valor = $_POST["eliminarRegistroCaridad"];

			$respuesta = ModeloCaridad::mdlEliminarCaridad($tabla, $valor);

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