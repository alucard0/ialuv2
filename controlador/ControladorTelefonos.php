<?php
	include_once 'modelo/ConectaBD.php';
	include_once 'modelo/DesplegarPais.php';
		
		$Tel = new DesplegarPais;
		$Tel->autofillTelefonos();

?>