<?php
/**
* 	@author Amilkhael Chávez Delgado;
*	Documento: Clase que modela la lógica de negocio de Aspirante
*/
include_once '../modelo/ConectaBD.php';

	class ParticipanteBO
	{

		//Constructor
		public function __construct()
		{

		}
		//Metodos
		public function insertarParticipante($datos_aspirante)
		{
			$bdconectada = new ConectaBD();
			$bdconectada->conectar();
			
			$datos_aspirante->prefix = $bdconectada->escapar_datos ($datos_aspirante->prefix);
			$datos_aspirante->name = $bdconectada->escapar_datos ($datos_aspirante->name);
			$datos_aspirante->surname = $bdconectada->escapar_datos ($datos_aspirante->surname);
			$datos_aspirante->institucion = $bdconectada->escapar_datos ($datos_aspirante->institucion);
			$datos_aspirante->position = $bdconectada->escapar_datos ($datos_aspirante->position);
			$datos_aspirante->email = $bdconectada->escapar_datos ($datos_aspirante->email);
			$datos_aspirante->gender = $bdconectada->escapar_datos ($datos_aspirante->gender);
			$datos_aspirante->size = $bdconectada->escapar_datos ($datos_aspirante->size);
			$datos_aspirante->LandLineCC = $bdconectada->escapar_datos ($datos_aspirante->LandLineCC);
			$datos_aspirante->LandLine = $bdconectada->escapar_datos ($datos_aspirante->LandLine);
			$datos_aspirante->cellphoneCC = $bdconectada->escapar_datos ($datos_aspirante->cellphoneCC);
			$datos_aspirante->cellphone = $bdconectada->escapar_datos ($datos_aspirante->cellphone);
			$datos_aspirante->emergencyContact = $bdconectada->escapar_datos ($datos_aspirante->emergencyContact);
			$datos_aspirante->emergencyPhoneCC = $bdconectada->escapar_datos ($datos_aspirante->emergencyPhoneCC);
			$datos_aspirante->emergencyPhone = $bdconectada->escapar_datos ($datos_aspirante->emergencyPhone);
			$datos_aspirante->country = $bdconectada->escapar_datos ($datos_aspirante->country);
			$datos_aspirante->zip = $bdconectada->escapar_datos ($datos_aspirante->zip);
			$datos_aspirante->state = $bdconectada->escapar_datos ($datos_aspirante->state);
			$datos_aspirante->city = $bdconectada->escapar_datos ($datos_aspirante->city);
			$datos_aspirante->address = $bdconectada->escapar_datos ($datos_aspirante->address);
			$datos_aspirante->address2 = $bdconectada->escapar_datos ($datos_aspirante->address2);
			$datos_aspirante->twitter = $bdconectada->escapar_datos ($datos_aspirante->twitter);
			$datos_aspirante->LinkedIn = $bdconectada->escapar_datos ($datos_aspirante->LinkedIn);
			$datos_aspirante->extras = $bdconectada->escapar_datos ($datos_aspirante->extras);
	
			$query = 'INSERT INTO telefono (lada, numero) SELECT * FROM (SELECT "'.$datos_aspirante->LandLineCC.'", "'.$datos_aspirante->LandLine.'") AS tmp WHERE NOT EXISTS ( SELECT lada, numero FROM telefono WHERE lada = "'.$datos_aspirante->LandLineCC.'" AND numero = "'.$datos_aspirante->LandLine.'") LIMIT 1';	
			echo "<script>console.log( 'Debug Objects: " . $query . "' );</script>";
			$bdconectada->escribir($query);
			
			$query = 'INSERT INTO telefono (lada, numero) SELECT * FROM (SELECT "'.$datos_aspirante->cellphoneCC.'", "'.$datos_aspirante->cellphone.'") AS tmp WHERE NOT EXISTS ( SELECT lada, numero FROM telefono WHERE lada = "'.$datos_aspirante->cellphoneCC.'" AND numero = "'.$datos_aspirante->cellphone.'") LIMIT 1';	
			echo "<script>console.log( 'Debug Objects: " . $query . "' );</script>";
			$bdconectada->escribir($query);
			
			$query = 'INSERT INTO telefono (lada, numero) SELECT * FROM (SELECT "'.$datos_aspirante->emergencyPhoneCC.'", "'.$datos_aspirante->emergencyPhone.'") AS tmp WHERE NOT EXISTS ( SELECT lada, numero FROM telefono WHERE lada = "'.$datos_aspirante->emergencyPhoneCC.'" AND numero = "'.$datos_aspirante->emergencyPhone.'") LIMIT 1';	
			echo "<script>console.log( 'Debug Objects: " . $query . "' );</script>";
			$bdconectada->escribir($query);
			
			$query = 'INSERT INTO participante (prefijo, nombre, apellido, telefono_fk, institucion, celular_fk, email, contacto_emergencia, sexo, talla, telefono_emergencia_fk, ciudad, estado, CP, direccion1, direccion2, twitter, linkedIn, pais_fk, Posicion, commentario) VALUES ("'.$datos_aspirante->prefix.'","'.$datos_aspirante->name.'","'.$datos_aspirante->surname.'",(SELECT id FROM telefono WHERE lada = "'.$datos_aspirante->LandLineCC.'" AND numero = "'.$datos_aspirante->LandLine.'"),"'.$datos_aspirante->institucion.'",(SELECT id FROM telefono WHERE lada = "'.$datos_aspirante->cellphoneCC.'" AND numero = "'.$datos_aspirante->cellphone.'"),"'.$datos_aspirante->email.'","'.$datos_aspirante->emergencyContact.'","'.$datos_aspirante->gender.'","'.$datos_aspirante->size.'",(SELECT id FROM telefono WHERE lada = "'.$datos_aspirante->emergencyPhoneCC.'" AND numero = "'.$datos_aspirante->emergencyPhone.'"),"'.$datos_aspirante->city.'","'.$datos_aspirante->state.'","'.$datos_aspirante->zip.'","'.$datos_aspirante->address.'","'.$datos_aspirante->address2.'","'.$datos_aspirante->twitter.'","'.$datos_aspirante->LinkedIn.'",(SELECT id FROM pais WHERE codigo = "'.$datos_aspirante->country.'"),"'.$datos_aspirante->position.'","'.$datos_aspirante->extras.'")';
			echo "<script>console.log( 'Debug Objects: " . $query . "' );</script>";
			$bdconectada->escribir($query);
			$bdconectada->desconectar();
		}
		//Guardar registro de aspirante

		//Eliminar registros de aspirantes
	}


?>
