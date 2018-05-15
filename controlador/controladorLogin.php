<?php
	include_once '../modelo/LoginBO.php';
		
	$login_logica = new LoginBO();
	$login_logica->acceder($_POST);

	//Boton Presionado
	if ($estatus==0){
			
		echo '<p class="instrucciones">Error: Usuario y/o Contraseña Inválido(s)</p>';
	}
	else {
			

	}
?>