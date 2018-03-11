<?php
	include_once 'modelo/ConectaBD.php';
	
	class PaisBO{
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
		
		public function autofillTelefonos()
		{	
			$bd = new ConectaBD;
			$bd->conectar();		
			$query = 'SELECT lada, codigo FROM pais';
			$tipos = $bd->escribir($query);
			$bd->desconectar();
			echo "<script>\n";
			//echo "document.getElementById(\"inputCountry\").onchange = function() {myFunction()};\n";
			echo "function getval(sel) {\n";
			//echo "var sNewSel = this.boundItem(xfa.event.newText);";
			echo "switch (sel.value) {\n";
			while ($fila = mysqli_fetch_row($tipos)){
				echo 'case "'.$fila[1]."\":\n";
				echo 'inputLandLineCC.value = "'.$fila[0]."\";\n";
				echo 'inputCellphoneCC.value = "'.$fila[0]."\";\n"; 
				echo 'inputEmergencyPhoneCC.value = "'.$fila[0]."\";\n";
				echo "break;\n";
			}
			echo "}\n";
			echo "}\n";
			echo "</script>\n";
		}
	}
?>
