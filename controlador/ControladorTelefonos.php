<?php
	include_once 'modelo/PaisBO.php';
		
		$pais_logica = new PaisBO();
		$pais_logica->autofillTelefonos();

?>