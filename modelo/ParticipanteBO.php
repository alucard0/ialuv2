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
		public function insertarParticipante($datos_participante)
		{
			$bdconectada = new ConectaBD();
			$bdconectada->conectar();
			$idParticipante=0;
			
			$datos_participante->prefix = $bdconectada->escapar_datos ($datos_participante->prefix);
			$datos_participante->institucion = $bdconectada->escapar_datos ($datos_participante->institucion);
			$datos_participante->position = $bdconectada->escapar_datos ($datos_participante->position);
			$datos_participante->size = $bdconectada->escapar_datos ($datos_participante->size);
			$datos_participante->twitter = $bdconectada->escapar_datos ($datos_participante->twitter);
			$datos_participante->linkedin = $bdconectada->escapar_datos ($datos_participante->linkedin);
			$datos_participante->hospedaje  = $bdconectada->escapar_datos ($datos_participante->hospedaje);

			$query='INSERT INTO participante (id,id_persona,institucion,talla,twitter,linkedin,posicion,prefijo,hospedaje) VALUES(null,'.$datos_participante->idPersona.',"'.$datos_participante->institucion.'","'.$datos_participante->size.'","'.$datos_participante->twitter.'","'.$datos_participante->linkedin.'","'.$datos_participante->position.'","'.$datos_participante->prefix.'","'.$datos_participante->hospedaje.'");';
			$bdconectada->escribir($query);
			
			//obtenemos el ID del usuario que se agrego
			$query="SELECT last_insert_id() as last_id from participante";
			$result=$bdconectada->escribir($query);
			
			if ($result->num_rows > 0) {
	   			$row = $result->fetch_assoc();
				$idParticipante=$row["last_id"];
			}



			$bdconectada->desconectar();

			return $idParticipante;
		}
		//Guardar registro de aspirante

		//Eliminar registros de aspirantes
	}


?>
