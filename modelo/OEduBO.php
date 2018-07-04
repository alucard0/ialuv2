<?php
	class OEduBO
	{

		//Constructor
		public function __construct()
		{

		}
		//Metodos
		public function despliega()
		{	
			$bd = new ConectaBD;
			$bd->conectar();
					
			$query = 'SELECT institucion.nombre, participante.nombre, participante.apellidos, participante.correo FROM institucion, participante WHERE participante.institucion_fk = institucion.id ORDER BY institucion.nombre ASC, participante.nombre ASC';
			$participantes = $bd->escribir($query);
					
			echo "<div class=\"table-responsive-sm\" id=\"dir\">";
			echo "<table class=\"table\">\n";
			echo "<thead><tr><td>Institution</td><td>Name</td><td>Email</td></tr></thead>\n";
			echo "<tbody>\n";
			$i = 0;	
			while ($fila = mysqli_fetch_row($participantes)){
				if ($i%2 == 0){
					echo "<tr bgcolor=\"#e6e6e6\">";
				}
				else {
					echo "<tr>";
				}
				echo '<td> '.$fila[0].'</td>';
				echo '<td> '.$fila[1]." ".$fila[2].'</td>';
				echo '<td><a style="word-break: break-all" href="mailto:'.$fila[3].'"> '.$fila[3].'</a></td>';
				echo "</tr>\n";
				$i++;
			}		
			echo "</tbody></table>\n\n";
			echo "</div>\n";
			$bd->liberaResultado($participantes);
			
			echo "<br><br>";
			echo "<h2>Presidents</h2>";
			
			$query = 'SELECT institucion.nombre, participante.nombre, participante.apellidos, participante.correo FROM institucion, participante WHERE participante.institucion_fk = institucion.id AND participante.presidente = 1 ORDER BY institucion.nombre ASC, participante.nombre ASC';
			$participantes = $bd->escribir($query);
			echo "<div class=\"table-responsive-sm\" id=\"dir\">";		
			echo "<table class=\"table\">\n";
			echo "<thead><tr><td>Institution</td><td>Name</td><td>Email</td></tr></thead>\n";
			$i = 0;	
			while ($fila = mysqli_fetch_row($participantes)){
				if ($i%2 == 0){
					echo "<tr bgcolor=\"#e6e6e6\">";
				}
				else {
					echo "<tr>";
				}
				echo '<td> '.$fila[0].'</td>';
				echo '<td> '.$fila[1]." ".$fila[2].'</td>';
				echo '<td><a style="word-break: break-all" href="mailto:'.$fila[3].'"> '.$fila[3].'</a></td>';
				echo "</tr>\n";
				$i++;
			}		
			echo "</tbody></table>";
			echo "</div>\n";
			$bd->liberaResultado($participantes);
			
			$bd->desconectar();
			
		}
	}
?>