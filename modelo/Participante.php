<?php
/**
* 	@author Amilkhael Chávez Delgado;
*	Documento: Clase que modela la tabla Oferta Educativa
*/
	class Participante
	{

		//Atributos
		private $idParticipante;
		private $idPersona;
		private $prefix;
		private $institucion;
		private $position;
		private $size;
		private $twitter;
		private $linkedin;
		private $hospedaje;

		//Constructor
		public function __construct($post,$idPersona)
		{
			$this->prefix = $post['prefix'];
			$this->institucion = $post['institucion'];
			$this->position = $post['position'];
			$this->size = $post['size'];
			$this->twitter = $post['twitter'];
			$this->linkedin = $post['LinkedIn'];
			$this->idPersona = $idPersona;
			$this->hospedaje = $post['accommodation'];
		}
		//Metodos
		public function __set($name,$value){
		    if(method_exists($this, $name)){
		      $this->$name($value);
		    }
		    else{
		      /* Getter/Setter not defined so set as property of object*/
		      $this->$name = $value;
		    }
		}

		public function __get($name){
		    if(method_exists($this, $name)){
		      return $this->$name();
		    }
		    elseif(property_exists($this,$name)){
		      /* Getter/Setter not defined so return property if it exists*/
		      return $this->$name;
		    }
		    return null;
		}


	}


?>