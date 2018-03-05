<?php
	include_once 'modelo/ConectaBD.php';
	
	class DesplegarPais{
		//Constructor
		public function __construct()
		{

		}
		//Metodos
		public function despliega()
		{	
			$bd = new ConectaBD;
			$bd->conectar();		
			$query = 'SELECT nombre, codigo FROM pais';
			$tipos = $bd->escribir($query);
			$bd->desconectar();
		
			while ($fila = mysqli_fetch_row($tipos)){
				echo '<option value="'.$fila[1].'">'.$fila[0]."</option>\n";
			}
		
		}
	}
?>
