<?php

	$file = $_GET['file'];
	//$archivoLogica->descarga($file);
	if(file_exists($file))
	{ 
		//Obtenemos la extension del archivo
		$ext = substr($file,-3);

		//Separamos la URL por /
		$arreglo = explode("/", $file);
		//Obtenemos el Nombre del archivo
		$filename=$arreglo[sizeof($arreglo)-1];

		if($ext=='jpg' || $ext=='png' || $ext=='pdf' || $ext=='zip' || $ext=='ocx' || $ext=='ppt') //ocx se refiere a docx de Word
		{  
			header('Content-type: octet/stream');
			header('Content-disposition: attachment; filename='.$filename.';');
			header('Content-Length: '.filesize($file));
			readfile($file);
			exit; 
		}
		else
		{
			echo 'Extencion no declarada';
		}
	}
	else
	{ 
		echo 'Archivo no encontrado';
	}


 ?>