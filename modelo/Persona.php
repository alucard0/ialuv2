<?php
/**
* 	@author Amilkhael Chávez Delgado;
*	Documento: Clase que modela la tabla Oferta Educativa
*/
	class Persona
	{

		//Atributos
		
		private $idPersona;
		private $name;
		private $surname;
		private $email;
		private $gender;
		private $emergencyContact;
		private $country;
		private $state;
		private $city;
		private $zip;
		private $address;
		private $address2;
		private $extras;

		//Constructor
		public function __construct($post)
		{
			$this->name = $post['name'];
			$this->surname = $post['surname'];
			$this->email = $post['email'];
			$this->gender = $post['gender'];
			$this->emergencyContact = $post['emergencyContact'];
			$this->country = $post['country'];
			$this->state = $post['state'];		
			$this->city = $post['city'];		
			$this->zip = $post['zip'];		
			$this->address = $post['address'];		
			$this->address2 = $post['address2'];
			$this->extras = $post['extras'];
			
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