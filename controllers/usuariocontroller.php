<?php

require_once "models/modelo.usuario.php";

class ControladorUsuario{

	/*=============================================
	Registro
	=============================================*/

	static public function ctrRegistroUsuario(){

		if(isset($_POST["registroEmailusuario"])){

			$tabla = "TBL_Usuario";

			$datos = array("Email" => $_POST["registroEmailusuario"],
				           "Contrasena" => $_POST["registroContrasenausuario"],
				           "Nombres" => $_POST["registroNombreusuario"],
						   "Apellido" => $_POST["registroApellidousuario"],
						   "FK_RolID" => $_POST["registroFK_RolIDusuario"]
						);

			$respuesta = ModelosUsuario::mdlUsuario($tabla, $datos);

			return $respuesta;

		}

	}

	/*=============================================
	Seleccionar Registros
	=============================================*/

	static public function ctrSeleccionarRegistroUsuario($item, $valor){

		$tabla = "TBL_Usuario";

		$respuesta = ModelosUsuario::mdlSeleccionarUsuario($tabla, $item, $valor);

		return $respuesta;

	}


     /*=============================================
	Actualizar Registro
	=============================================*/
	static public function ctrActualizarRegistroUsuario(){

		if(isset($_POST[""])){

			if($_POST[""] != ""){			

				$password = $_POST[""];

			}else{

				$password = $_POST[""];
			}

			$tabla = "TBL_Usuario";

			$datos = array("id" => $_POST[""],
							"Email" => $_POST["actualizarEmailusuario"],
				           "Contrasena" => $_POST["actualizarContrasenausuario"],
				           "Nombres" => $_POST["actualizarNombreusuario"],
						   "Apellido" => $_POST["actualizarApellidousuario"],
						   "FK_RolID" => $_POST["actualizarFK_RolIDusuario"],);

			$respuesta = ModelosUsuario::mdlActualizarUsuario($tabla, $datos);

			return $respuesta;

		}


	}

	/*=============================================
	Eliminar Registro
	=============================================*/
	public function ctrEliminarRegistroUsuario(){

		if(isset($_POST["eliminarRegistroUsuario"])){

			$tabla = "TBL_Usuario";
			$valor = $_POST["eliminarRegistroUsuario"];

			$respuesta = ModelosUsuario::mdlEliminarUsuario($tabla, $valor);

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