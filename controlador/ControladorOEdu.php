<?php
	include_once 'modelo/ConectaBD.php';
	include_once 'modelo/OEduBO.php';
	//include_once 'modelo/IniciarTabla.php';
	//include_once 'modelo/DesplegarOferta.php';
		
		$tabla = new OEduBO;
		$tabla->despliega();

?>