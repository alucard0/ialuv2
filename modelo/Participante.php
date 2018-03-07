<?php
/**
* 	@author Amilkhael Chávez Delgado;
*	Documento: Clase que modela la tabla Oferta Educativa
*/
	class Participante
	{

		//Atributos
		
		private $idAspirante;
		private $prefix;
		private $name;
		private $surname;
		private $institucion;
		private $position;
		private $email;
		private $gender;
		private $size;
		private $LandLineCC;
		private $LandLine;
		private $cellphoneCC;
		private $cellphone;
		private $emergencyContact;
		private $emergencyPhoneCC;
		private $emergencyPhone;
		private $country;
		private $state;
		private $city;
		private $zip;
		private $address;
		private $address2;
		private $twitter;
		private $LinkedIn;
		private $extras;

		//Constructor
		public function __construct($post)
		{
			$this->prefix = $post['prefix'];
			$this->name = $post['name'];
			$this->surname = $post['surname'];
			$this->institucion = $post['institucion'];
			$this->position = $post['position'];
			$this->email = $post['email'];
			$this->gender = $post['gender'];
			$this->size = $post['size'];
			$this->LandLineCC = $post['LandLineCC'];
			$this->LandLine = $post['LandLine'];
			$this->cellphoneCC = $post['cellphoneCC'];
			$this->cellphone = $post['cellphone'];
			$this->emergencyContact = $post['emergencyContact'];
			$this->emergencyPhoneCC = $post['emergencyPhoneCC'];
			$this->emergencyPhone = $post['emergencyPhone'];
			$this->country = $post['country'];
			$this->state = $post['state'];		
			$this->city = $post['city'];		
			$this->zip = $post['zip'];		
			$this->address = $post['address'];		
			$this->address2 = $post['address2'];
			$this->twitter = $post['twitter'];
			$this->LinkedIn = $post['LinkedIn'];
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