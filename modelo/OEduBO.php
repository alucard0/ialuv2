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
					
			echo "<center><table border=\"1\">\n";
			echo "<tr><td>Institution</td><td>Name</td><td>Email</td></tr>";
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
				echo '<td><a href="mailto:'.$fila[3].'"> '.$fila[3].'</a></td>';
				echo "</tr>\n";
				$i++;
			}		
			echo "</table></center>\n\n";
			$bd->liberaResultado($participantes);
			
			echo "<br><br>";
			echo "<h2>Presidents</h2>";
			
			$query = 'SELECT institucion.nombre, participante.nombre, participante.apellidos, participante.correo FROM institucion, participante WHERE participante.institucion_fk = institucion.id AND participante.presidente = 1 ORDER BY institucion.nombre ASC, participante.nombre ASC';
			$participantes = $bd->escribir($query);
					
			echo "<center><table border=\"1\">\n";
			echo "<tr><td>Institution</td><td>Name</td><td>Email</td></tr>";
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
				echo '<td><a href="mailto:'.$fila[3].'"> '.$fila[3].'</a></td>';
				echo "</tr>\n";
				$i++;
			}		
			echo "</table></center>";
			$bd->liberaResultado($participantes);
			
			$bd->desconectar();
			
		}
	}
?>