<?php
	include_once 'modelo/ConectaBD.php';
	include_once 'modelo/DesplegarPais.php';
		
		$pais = new DesplegarPais;
		$pais->despliega();

?>