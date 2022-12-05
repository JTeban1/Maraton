<?php

require_once "models/modelo.caridad.php";

class ControladorCaridad{


	/*=============================================
	Registro
	=============================================*/

	static public function ctrRegistroCaridad(){

		if(isset($_POST["registroNombreCaridad"])){

			$tabla = "TBL_Caridad";

			$datos = array("NombreCaridad " => $_POST["registroNombreCaridad"],
				           "DescripcionCaridad" => $_POST["registroDescripcionCaridad"],
				           "LogoCaridad" => addslashes(file_get_contents ($_FILES["registroLogoCaridad"]["tmp_name"])));//es IMG

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

		if(isset($_POST[""])){

			if($_POST[""] != ""){			

				$password = $_POST[""];

			}else{

				$password = $_POST[""];
			}

			$tabla = "TBL_Caridad";

			$datos = array("CaridadID" => $_POST[""],
							"NombreCaridad" => $_POST[""],
				           "DescripcionCaridad" => $_POST[""]);

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