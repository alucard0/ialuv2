<?php
include_once '../modelo/Persona.php';
include_once '../modelo/PersonaBO.php';
include_once '../modelo/Telefono.php';
include_once '../modelo/TelefonoBO.php';
include_once '../modelo/Participante.php';
include_once '../modelo/ParticipanteBO.php';
include_once '../modelo/Acompanante.php';
include_once '../modelo/AcompananteBO.php';

//Obtenemos los datos de la persona
$persona_datos = new Persona($_POST);
$persona_logica = new PersonaBO();
//Guardamos los datos de la persona
$idPersona=$persona_logica->insertarPersona($persona_datos);
//Obtenemos los datos del telefono
$telefono_datosCasa = new Telefono($idPersona);
$telefono_datosCasa->lada=$_POST["LandLineCC"];
$telefono_datosCasa->numero=$_POST["LandLine"];
$telefono_datosCasa->tipo="Casa";

$telefono_datosCel = new Telefono($idPersona);
$telefono_datosCel->lada=$_POST["cellphoneCC"];
$telefono_datosCel->numero=$_POST["cellphone"];
$telefono_datosCel->tipo="Celular";

$telefono_datosEmergencia = new Telefono($idPersona);
$telefono_datosEmergencia->lada=$_POST["emergencyPhoneCC"];
$telefono_datosEmergencia->numero=$_POST["emergencyPhone"];
$telefono_datosEmergencia->tipo="Emergencia";

$telefonos = array($telefono_datosCasa,$telefono_datosCel, $telefono_datosEmergencia);

$telefono_logica = new TelefonoBO();
//Guardamos los datos del telefono
$telefono_logica->insertarTelefono($telefonos);

//Obtenemos los datos del participante
$participante_datos = new Participante($_POST,$idPersona);
$participante_logica = new ParticipanteBO();
//Guardamos los datos del participante
$participante_logica->insertarParticipante($participante_datos);

/*
//Si existe
//Obtenemos los datos de la persona
$persona2_datos = new Persona($_POST);
$persona2_logica = new PersonaBO();
//Obtenemos los datos del acompanante
$acompanante_datos = new Acompanante($_POST);
$acompanante_logica = new AcompananteBO();
//Guardamos los datos del acompanante
$acompanante_logica->insertarAcompanante($acompanante_datos);
*/
?>