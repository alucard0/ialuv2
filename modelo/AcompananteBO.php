<?php
/**
* 	@author Amilkhael Chávez Delgado;
*	Documento: Clase que modela la tabla Oferta Educativa
*/
include_once '../modelo/ConectaBD.php';
	class AcompananteBO
	{
		//Constructor
		public function __construct()
		{

			
		}
		//Metodos
		public function insertarAcompanante($acompanante_datos){
			$bdconectada = new ConectaBD();
			$bdconectada->conectar();

			$query='INSERT INTO acompanante (id_persona, id_participante) VALUES('.$acompanante_datos->idPersona.','.$acompanante_datos->idParticipante.')';

			$bdconectada->escribir($query);

			$bdconectada->desconectar();
		}
	}


?>
