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
$idParticipante=$participante_logica->insertarParticipante($participante_datos);


if ($_POST['companion']=='yes') {

	//Obtenemos los datos de la persona
	$persona2_datos = new Persona();

	$persona2_datos->name = $_POST['nameCompanion'];
	$persona2_datos->surname = $_POST['surnameCompanion'];
	$persona2_datos->email = $_POST['emailCompanion'];
	$persona2_datos->gender = $_POST['genderCompanion'];
	$persona2_datos->emergencyContact = $_POST['emergencyContactCompanion'];
	$persona2_datos->country = $_POST['countryCompanion'];
	$persona2_datos->state = $_POST['stateCompanion'];		
	$persona2_datos->city = $_POST['cityCompanion'];		
	$persona2_datos->zip = $_POST['zipCompanion'];		
	$persona2_datos->address = $_POST['addressCompanion'];		
	$persona2_datos->address2 = $_POST['address2Companion'];
	$persona2_datos->extras = $_POST['extrasCompanion'];
	
	//Guardamos los datos de la persona
	$persona2_logica = new PersonaBO();
	$idPersona2=$persona2_logica->insertarPersona($persona2_datos);

	//Obtenemos los datos del telefono
	$telefono2_datosCasa = new Telefono($idPersona2);
	$telefono2_datosCasa->lada=$_POST["LandLineCCCompanion"];
	$telefono2_datosCasa->numero=$_POST["LandLineCompanion"];
	$telefono2_datosCasa->tipo="Casa";

	$telefono2_datosCel = new Telefono($idPersona2);
	$telefono2_datosCel->lada=$_POST["cellphoneCCCompanion"];
	$telefono2_datosCel->numero=$_POST["cellphoneCompanion"];
	$telefono2_datosCel->tipo="Celular";

	$telefono2_datosEmergencia = new Telefono($idPersona2);
	$telefono2_datosEmergencia->lada=$_POST["emergencyPhoneCCCompanion"];
	$telefono2_datosEmergencia->numero=$_POST["emergencyPhoneCompanion"];
	$telefono2_datosEmergencia->tipo="Emergencia";

	$telefonos2 = array($telefono2_datosCasa,$telefono2_datosCel, $telefono2_datosEmergencia);

	$telefono_logica = new TelefonoBO();
	//Guardamos los datos del telefono
	$telefono_logica->insertarTelefono($telefonos2);

	//Obtenemos los datos del acompanante
	$acompanante_datos = new Acompanante($idPersona2,$idParticipante);
	$acompanante_logica = new AcompananteBO();
	//Guardamos los datos del acompanante
	$acompanante_logica->insertarAcompanante($acompanante_datos);

}

?>