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
			
			$datos_participante->prefix = $bdconectada->escapar_datos ($datos_participante->prefix);
			$datos_participante->institucion = $bdconectada->escapar_datos ($datos_participante->institucion);
			$datos_participante->position = $bdconectada->escapar_datos ($datos_participante->position);
			$datos_participante->size = $bdconectada->escapar_datos ($datos_participante->size);
			$datos_participante->twitter = $bdconectada->escapar_datos ($datos_participante->twitter);
			$datos_participante->linkedin = $bdconectada->escapar_datos ($datos_participante->linkedin);

			$query='INSERT INTO participante (id,id_persona,institucion,talla,twitter,linkedin,posicion,prefijo) VALUES(null,'.$datos_participante->idPersona.',"'.$datos_participante->institucion.'","'.$datos_participante->size.'","'.$datos_participante->twitter.'","'.$datos_participante->linkedin.'","'.$datos_participante->position.'","'.$datos_participante->prefix.'");';
			$bdconectada->escribir($query);
			
			$bdconectada->desconectar();
		}
		//Guardar registro de aspirante

		//Eliminar registros de aspirantes
	}


?>
