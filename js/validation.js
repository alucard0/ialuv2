jQuery.validator.setDefaults({
	debug: true,
	success: "valid"
});

//Validador de solo letras (Incluye caracteres especiales de otros idiomas)
$.validator.addMethod( "lettersonly", function( value, element ) {
return this.optional( element ) || /^[a-z.áéíóúñâêîôûäëïöüàèìòùçæøåğş']+$/i.test( value );
}, "Letters only please" );

//Redefinicion Del Validador de e-mail
$.validator.methods.email = function( value, element ) {
  return this.optional( element ) || /^[a-z 0-9.áéíóúñâêîôûäëïöüàèìòùçæøåğş'*+-/=?_{|}~]+@[a-z 0-9.áéíóúñâêîôûäëïöüàèìòùçæøåğş'*+-/=?_{|}~]+.[a-z 0-9]+$/i.test( value );
}

$( "#Registration" ).validate({
  rules: {
	inputName: {
		required: true,
		lettersonly: false
	},
	inputLastName: {
		required: true,
		lettersonly: false
	},
    inputEmail: {
    	required: true,
		email: true
    },
	inputInstitution: {
		required: true
    },
	inputPosition: {
		required: true
	},
	inputLandLine: {
		required: true
	},
	inputCellphone: {
		required: true
	},
	inputEmergencyContact: {
		required: true
	},
	inputEmergencyPhone: {
		required: true
	},
	inputCountry: {
		required: true
	},
	inputState: {
		required: true
	},
	inputZip: {
		required: true
	},
	inputAddress: {
		required: true
	},
	inputGender:  {
		required: true
	},
	inputSize:  {
		required: true
	}
  },
	messages: {
		inputName:{
			required: "Required Field",
			lettersonly: "Invalid character"
		},
		inputLastName:{
			required: "Required Field",
			lettersonly: "Invalid character" 
		},
		inputEmail:{
			required: "Required Field",
			email: "Invalid email"
		},
		inputInstitution: {
			required: "Required Field"
		},
		inputPosition: {
			required: "Required Field"
		},
		inputLandLine: {
			required: "Required Field"
		},
		inputCellphone: {
			required: "Required Field"
		},
		inputEmergencyContact: {
			required: "Required Field"
		},
		inputEmergencyPhone: {
			required: "Required Field"
		},
		inputCountry: {
			required: "Required Field"
		},
		inputState: {
			required: "Required Field"
		},
		inputZip: {
			required: "Required Field"
		},
		inputAddress: {
			required: "Required Field"
		},
		inputGender:  {
			required: "Required Field"
		},
		inputSize:  {
			required: "Required Field"
		}
	}
});

$(document).ready(function() {
    $('.js-example-basic-single').select2({
	theme: "classic"
	});
});

/*Funcion para Registrar al Aspirante*/
jQuery(function($){
  $('#btnSend').on('click', function (ev) {
    /*Obtener los valores del formulario*/
	var prefix=$("#inputPrefix").val(); /*Obligatorio*/ 
    //console.log(prefix);
    var name=$("#inputName").val(); /*Obligatorio*/ 
    //console.log(name);
    var surname=$("#inputLastName").val();
   //console.log(surname); 
	
	var institucion=$("#inputInstitution").val();
	//console.log(institucion); 
	var position=$("#inputPosition").val();
	//console.log(position);
		
	var email=$("#inputEmail").val();
	//console.log(email); 
	var gender=$("#inputGender").val();
	//console.log(gender);
	var size=$("#inputSize").val();
	//console.log(size);
	
	var LandLineCC=$("#inputLandLineCC").val();
	//console.log(LandLineCC); 
	var LandLine=$("#inputLandLine").val();
	//console.log(LandLine);
	
	var cellphoneCC=$("#inputCellphoneCC").val();
	//console.log(cellphoneCC); 
	var cellphone=$("#inputCellphone").val();
	//console.log(cellphone);
	
	var emergencyContact=$("#inputEmergencyContact").val();
	//console.log(emergencyContact);
	var emergencyPhoneCC=$("#inputEmergencyPhoneCC").val();
	//console.log(emergencyPhoneCC); 
	var emergencyPhone=$("#inputEmergencyPhone").val();
	//console.log(emergencyPhone);
	
	var country=$("#inputCountry").val();
	//console.log(country);
	var state=$("#inputState").val();
	//console.log(state); 
	var city=$("#inputCity").val();
	//console.log(city);
	var zip=$("#inputZip").val();
	//console.log(zip);
	var address=$("#inputAddress").val();
	//console.log(address); 
	var address2=$("#inputAddress2").val();
	//console.log(address2);
	
	var twitter=$("#inputTwitter").val();
	//console.log(twitter); 
	var LinkedIn=$("#inputLinkedIn").val();
	//console.log(LinkedIn);
	
	var extras=$("#exampleFormControlTextarea1").val();
	//console.log(extras);
	
	
	
    if($('#Registration').valid())
    {
	  $('#btnSend').disabled = true;
      $.ajax({
        url: "controlador/controladorRegistro.php",
        type: "POST",
		//dataType: 'json',
        data: {"prefix":prefix,
        "name":name,
        "surname":surname,
        "institucion":institucion,
        "position":position,
        "email":email,
        "gender":gender,
        "size":size,
        "LandLineCC":LandLineCC,
        "LandLine":LandLine,
        "cellphoneCC":cellphoneCC,
        "cellphone":cellphone,
        "emergencyContact":emergencyContact,
        "emergencyPhoneCC":emergencyPhoneCC,
        "emergencyPhone":emergencyPhone,
        "country":country,
        "state":state,
        "city":city,
        "zip":zip,
        "address":address,
        "address2":address2,
        "twitter":twitter,
        "LinkedIn":LinkedIn,
        "extras":extras},
        success: function (data) {
          /*Mostrar mensaje de enviado*/
			//console.log('Success');
			document.getElementById("Registration").reset();
			$("#Ventana_Exito").modal('toggle');
			$('#btnSend').disabled = false;
			
        },
		error: function (data) {
			console.log('Error');
		}
      });
    }
  });
});

