<?php
/**
* 	@author Amilkhael Chávez Delgado;
*	Documento: Clase que modela la tabla Oferta Educativa
*/
include_once '../modelo/ConectaBD.php';
	class TelefonoBO
	{	
		//Constructor
		public function __construct()
		{

		}
		//Metodos
		public function insertarTelefono($telefonos)
		{
			$bdconectada = new ConectaBD();
			$bdconectada->conectar();
			foreach ($telefonos as $tel) {
			    
				$query='INSERT INTO telefono (id,lada,numero,id_persona,tipo) VALUES(null,"'.$tel->lada.'","'.$tel->numero.'",'.$tel->idPersona.',"'.$tel->tipo.'")';
				//echo $query;
				$bdconectada->escribir($query);
			}
			$bdconectada->desconectar();
		}
	}


?>