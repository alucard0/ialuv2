<?php
	include_once '../modelo/LoginBO.php';
		
	$login_logica = new LoginBO();
	$estatus=$login_logica->acceder($_POST);
	
echo '<p class="instrucciones">Error: Usuario y/o Contraseña Inválido(s)</p>';
	//Boton Presionado
	if ($estatus==0){
			
		echo '<p class="instrucciones">Error: Usuario y/o Contraseña Inválido(s)</p>';
	}
	else {
			
		header('Location: ../admin.php');
		exit;
	}
?>