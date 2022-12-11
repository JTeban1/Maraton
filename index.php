<?php


require_once "controllers/plantilla.controlador.php";


//tabla caridad
require_once "controllers/caridadcontroller.php";
require_once "models/modelo.caridad.php";


//tabla corredor
require_once "controllers/corredorcontroller.php";
require_once "models/modelo.corredor.php";

//tabla estado Registro
require_once "controllers/estadoregistrocontroller.php";
require_once "models/modelo.estadoregistro.php";


//tabla evento
require_once "controllers/eventocontroller.php";
require_once "models/modelo.evento.php";

//tabla genero
require_once "controllers/generocontroller.php";
require_once "models/modelo.genero.php";

//tabla hoja de tiempo
require_once "controllers/hojatiempocontroller.php";
require_once "models/modelo.hojatiempo.php";

//tabla Kit Competicion 
require_once "controllers/kitcompeticioncontroller.php";
require_once "models/modelo.kitcompeticion.php";

//tabla Maraton
require_once "controllers/maratoncontroller.php";
require_once "models/modelo.maraton.php";


//tabla Pais
require_once "controllers/paiscontroller.php";
require_once "models/modelo.pais.php";

//tabla patrocinio
require_once "controllers/patrociniocontroller.php";
require_once "models/modelo.patrocinio.php";

//tabla Personal
require_once "controllers/personalcontroller.php";
require_once "models/modelo.personal.php";


//tabla Posicion
require_once "controllers/posicioncontroller.php";
require_once "models/modelo.posicion.php";

//tabla Registro
require_once "controllers/registrocontroller.php";
require_once "models/modelo.registro.php";

//tabla Registro Evento
require_once "controllers/registroeventocontroller.php";
require_once "models/modelo.registroevento.php";


//tabla Rol
require_once "controllers/rolcontroller.php";
require_once "models/modelo.rol.php";


//tabla Tipo Evento
require_once "controllers/tipoeventocontroller.php";
require_once "models/modelo.tipoevento.php";


//tabla Usuario
require_once "controllers/usuariocontroller.php";
require_once "models/modelo.usuario.php";


//tabla Voluntario
require_once "controllers/voluntariocontroller.php";
require_once "models/modelo.voluntario.php";


//para ver si esta la conexion
require_once "config/conexion.php";

$conexion = Conexion::conectar();
echo '<pre'; print_r($conexion); echo "</pre>";


$plantilla = new ControladorPlantilla();
$plantilla -> ctrtraerplantilla();
