<?php
/**
* 	@author Amilkhael Chávez Delgado;
*	Documento: Clase que modela la tabla Oferta Educativa
*/
include_once '../modelo/ConectaBD.php';
	class PersonaBO
	{
		//Constructor
		public function __construct()
		{

		}
		//Metodos
		public function insertarPersona($datos_Persona){
			$bdconectada = new ConectaBD();
			$bdconectada->conectar();
			$idPersona=0;


			$datos_Persona->name = $bdconectada->escapar_datos ($datos_Persona->name);
			$datos_Persona->surname = $bdconectada->escapar_datos ($datos_Persona->surname);
			$datos_Persona->email = $bdconectada->escapar_datos ($datos_Persona->email);
			$datos_Persona->gender = $bdconectada->escapar_datos ($datos_Persona->gender);
			$datos_Persona->emergencyContact = $bdconectada->escapar_datos ($datos_Persona->emergencyContact);

			$datos_Persona->country = $bdconectada->escapar_datos ($datos_Persona->country);
			$datos_Persona->zip = $bdconectada->escapar_datos ($datos_Persona->zip);
			$datos_Persona->state = $bdconectada->escapar_datos ($datos_Persona->state);
			$datos_Persona->city = $bdconectada->escapar_datos ($datos_Persona->city);
			$datos_Persona->address = $bdconectada->escapar_datos ($datos_Persona->address);
			$datos_Persona->address2 = $bdconectada->escapar_datos ($datos_Persona->address2);
			$datos_Persona->extras = $bdconectada->escapar_datos ($datos_Persona->extras);


			$query='INSERT INTO persona (id,nombre,apellido,email,contacto_emergencia,sexo,direccion1,direccion2,ciudad,estado,cp,pais_fk,comentario)VALUES(null,"'.$datos_Persona->name.'","'.$datos_Persona->surname.'","'.$datos_Persona->email.'","'.$datos_Persona->emergencyContact.'","'.$datos_Persona->gender.'","'.$datos_Persona->address.'","'.$datos_Persona->address2.'","'.$datos_Persona->city.'","'.$datos_Persona->state.'","'.$datos_Persona->zip.'",(SELECT id FROM pais WHERE codigo = "'.$datos_Persona->country.'"),"'.$datos_Persona->extras.'")';
			$bdconectada->escribir($query);

			//obtenemos el ID del usuario que se agrego
			$query="SELECT last_insert_id() as last_id from persona";
			$result=$bdconectada->escribir($query);
			
			if ($result->num_rows > 0) {
	   			$row = $result->fetch_assoc();
				$idPersona=$row["last_id"];
			}



			$bdconectada->desconectar();

			return $idPersona;
		}

	}


?>