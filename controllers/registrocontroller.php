<?php

class ControladorRegis{

	/*=============================================
	Registro
	=============================================*/

	static public function ctrRegistroRegis(){

		if(isset($_POST[""])){

			$tabla = "TBL_Registro";

			$datos = array("FechaRegistro" => $_POST[""],
							"Costo" => $_POST[""],
							"ObjetivoPatrocinio" => $_POST[""],
							"FK_CorredorID" => $_POST[""],
							"FK_KitID" => $_POST[""],
							"FK_EstadoRegistroID" => $_POST[""],
							"FK_CaridadID"=> $_POST[""]);

			$respuesta = //ModeloFormularios::mdlRegistro($tabla, $datos);

			return $respuesta;

		}

	}

	/*=============================================
	Seleccionar Registros
	=============================================*/

	static public function ctrSeleccionarRegistroRegis($item, $valor){

		$tabla = "TBL_Registro";

		$respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);

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
							"FechaRegistro" => $_POST[""],
				           "Costo" => $_POST[""],
						   "ObjetivoPatrocinio" => $_POST[""],
						   "FK_CorredorID" => $_POST[""],
						   "FK_KitID" => $_POST[""],
						   "FK_EstadoRegistroID" => $_POST[""],
				           "FK_CaridadID"=> $_POST[""]);

			$respuesta = ModeloFormularios::mdlActualizarRegistro($tabla, $datos);

			return $respuesta;

		}


	}

	/*=============================================
	Eliminar Registro
	=============================================*/
	public function ctrEliminarRegistroRegis(){

		if(isset($_POST[""])){

			$tabla = "TBL_Registro";
			$valor = $_POST[""];

			$respuesta = ModeloFormularios::mdlEliminarRegistro($tabla, $valor);

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