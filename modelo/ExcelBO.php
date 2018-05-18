<?php
	include_once '../modelo/ConectaBD.php';
	class ExcelBO
	{
		//Constructor
		public function __construct()
		{

		}
		//Metodos
		public function generarExcel($ArcivoExcel)
		{	
			//Abrir Cookie de sesion
			//session_start();
			
			//Conectar a la BD
			$bdconectada = new ConectaBD();
			$bdconectada->conectar();
			
			//Guardar en vitacora
			$usr = $bdconectada->escapar_datos('1');
			$query = 'INSERT INTO action_log (Accion, User_ID) VALUES ("Descargar BD", "'.$usr.'")';
			$bdconectada->escribir($query);
			
			//Mandar a traer la base de datos
			$query = 'SELECT persona.id, participante.prefijo, persona.nombre, persona.apellido, participante.institucion, participante.posicion, persona.sexo, participante.talla, pais.nombre, persona.estado, persona.ciudad, persona.CP, persona.direccion1, persona.direccion2, persona.email, participante.twitter, participante.linkedIn, persona.contacto_emergencia, persona.comentario, participante.hospedaje FROM participante, persona, pais WHERE pais.id = persona.pais_fk AND participante.id_persona = persona.id';
			$query = $bdconectada->escribir($query);
			
			$ArcivoExcel->crear_hoja (1,'Acompañantes');
			
			//Escribir encabezados en el archivo Excel
			$ArcivoExcel->seleccionar_hoja (0);
			$ArcivoExcel->escribir_dato('A1', 'Prefijo');
			$ArcivoExcel->escribir_dato('B1', 'Nombre');
			$ArcivoExcel->escribir_dato('C1', 'Apellido(s)');
			$ArcivoExcel->escribir_dato('D1', 'Organización/Institución');
			$ArcivoExcel->escribir_dato('E1', 'Posición');
			$ArcivoExcel->escribir_dato('F1', 'Genero');
			$ArcivoExcel->escribir_dato('G1', 'Talla');
			$ArcivoExcel->escribir_dato('H1', 'País');
			$ArcivoExcel->escribir_dato('I1', 'Estado');
			$ArcivoExcel->escribir_dato('J1', 'Ciudad');
			$ArcivoExcel->escribir_dato('K1', 'C.P.');
			$ArcivoExcel->escribir_dato('L1', 'Dirección');
			$ArcivoExcel->escribir_dato('M1', 'Dirección2');
			$ArcivoExcel->escribir_dato('N1', 'LADA');
			$ArcivoExcel->escribir_dato('O1', 'Celular');
			$ArcivoExcel->escribir_dato('P1', 'LADA');
			$ArcivoExcel->escribir_dato('Q1', 'Télefono');
			$ArcivoExcel->escribir_dato('R1', 'E-mail');
			$ArcivoExcel->escribir_dato('S1', 'Hospedaje');
			$ArcivoExcel->escribir_dato('T1', 'Twitter');
			$ArcivoExcel->escribir_dato('U1', 'LinkedIn');
			$ArcivoExcel->escribir_dato('V1', 'LADA');
			$ArcivoExcel->escribir_dato('W1', 'Télefono de emergencia');
			$ArcivoExcel->escribir_dato('X1', 'Contacto de emergencia');
			$ArcivoExcel->escribir_dato('Y1', 'Comentarios');
			
			$ArcivoExcel->seleccionar_hoja (1);
			$ArcivoExcel->escribir_dato('A1', 'Nombre');
			$ArcivoExcel->escribir_dato('B1', 'Apellido(s)');
			$ArcivoExcel->escribir_dato('C1', 'Genero');
			$ArcivoExcel->escribir_dato('D1', 'País');
			$ArcivoExcel->escribir_dato('E1', 'Estado');
			$ArcivoExcel->escribir_dato('F1', 'Ciudad');
			$ArcivoExcel->escribir_dato('G1', 'C.P.');
			$ArcivoExcel->escribir_dato('H1', 'Dirección');
			$ArcivoExcel->escribir_dato('I1', 'Dirección2');
			$ArcivoExcel->escribir_dato('J1', 'E-mail');
			$ArcivoExcel->escribir_dato('K1', 'LADA');
			$ArcivoExcel->escribir_dato('L1', 'Celular');
			$ArcivoExcel->escribir_dato('M1', 'LADA');
			$ArcivoExcel->escribir_dato('N1', 'Télefono');
			$ArcivoExcel->escribir_dato('O1', 'LADA');
			$ArcivoExcel->escribir_dato('P1', 'Télefono de emergencia');
			$ArcivoExcel->escribir_dato('Q1', 'Contacto de emergencia');
			$ArcivoExcel->escribir_dato('R1', 'Comentarios');
			$ArcivoExcel->escribir_dato('S1', 'Acompaña a:');
				
			
		
			//Escribir la informacion en el archivo Excel
			$i = 2;
			while ($fila = mysqli_fetch_row($query)) {
				$ArcivoExcel->seleccionar_hoja (0);
				
				$phoneQuery = "SELECT lada, numero FROM telefono WHERE id_persona = ".$fila[0]." ORDER BY tipo ASC";
				$phoneQuery = $bdconectada->escribir($phoneQuery);
				
				$ArcivoExcel->escribir_dato('A'.$i, $fila[1]);
				$ArcivoExcel->escribir_dato('B'.$i, $fila[2]);
				$ArcivoExcel->escribir_dato('C'.$i, $fila[3]);
				$ArcivoExcel->escribir_dato('D'.$i, $fila[4]);
				$ArcivoExcel->escribir_dato('E'.$i, $fila[5]);
				$ArcivoExcel->escribir_dato('F'.$i, $fila[6]);
				$ArcivoExcel->escribir_dato('G'.$i, $fila[7]);
				$ArcivoExcel->escribir_dato('H'.$i, $fila[8]);
				$ArcivoExcel->escribir_dato('I'.$i, $fila[9]);
				$ArcivoExcel->escribir_dato('J'.$i, $fila[10]);
				$ArcivoExcel->escribir_dato('K'.$i, $fila[11]);
				$ArcivoExcel->escribir_dato('L'.$i, $fila[12]);
				$ArcivoExcel->escribir_dato('M'.$i, $fila[13]);
				
				$phones = mysqli_fetch_row($phoneQuery);
				$ArcivoExcel->escribir_dato('P'.$i, "(".$phones[0].")");
				$ArcivoExcel->escribir_dato('Q'.$i, "(".$phones[1].")");
				
				$phones = mysqli_fetch_row($phoneQuery);
				$ArcivoExcel->escribir_dato('N'.$i, "(".$phones[0].")");
				$ArcivoExcel->escribir_dato('O'.$i, "(".$phones[1].")");
				
				$ArcivoExcel->escribir_dato('R'.$i, $fila[14]);
				$ArcivoExcel->escribir_dato('S'.$i, $fila[19]);
				$ArcivoExcel->escribir_dato('T'.$i, $fila[15]);
				$ArcivoExcel->escribir_dato('U'.$i, $fila[16]);
				
				$phones = mysqli_fetch_row($phoneQuery);
				$ArcivoExcel->escribir_dato('V'.$i, "(".$phones[0].")");
				$ArcivoExcel->escribir_dato('W'.$i, "(".$phones[1].")");
				
				$ArcivoExcel->escribir_dato('X'.$i, $fila[17]);
				$ArcivoExcel->escribir_dato('Y'.$i, $fila[18]);
				
				$i ++;
			}
			
			mysqli_free_result($query);
			mysqli_free_result($phoneQuery);
			$query = 'SELECT persona.id, persona.nombre, persona.apellido, persona.sexo, pais.nombre, persona.estado, persona.ciudad, persona.CP, persona.direccion1, persona.direccion2, persona.email, persona.contacto_emergencia, persona.comentario, p2.nombre, p2.apellido FROM acompanante, persona, pais, participante JOIN persona p2 WHERE pais.id = persona.pais_fk AND acompanante.id_persona = persona.id AND acompanante.id_participante = participante.id AND participante.id_persona = p2.id';
			$query = $bdconectada->escribir($query);
			
						//Escribir la informacion en el archivo Excel
			$i = 2;
			while ($fila = mysqli_fetch_row($query)) {
				$ArcivoExcel->seleccionar_hoja (1);
				
				$phoneQuery = "SELECT lada, numero FROM telefono WHERE id_persona = ".$fila[0]." ORDER BY tipo ASC";
				$phoneQuery = $bdconectada->escribir($phoneQuery);
				
				$ArcivoExcel->escribir_dato('A'.$i, $fila[1]);
				$ArcivoExcel->escribir_dato('B'.$i, $fila[2]);
				$ArcivoExcel->escribir_dato('C'.$i, $fila[3]);
				$ArcivoExcel->escribir_dato('D'.$i, $fila[4]);
				$ArcivoExcel->escribir_dato('E'.$i, $fila[5]);
				$ArcivoExcel->escribir_dato('F'.$i, $fila[6]);
				$ArcivoExcel->escribir_dato('G'.$i, $fila[7]);
				$ArcivoExcel->escribir_dato('H'.$i, $fila[8]);
				$ArcivoExcel->escribir_dato('I'.$i, $fila[9]);
				$ArcivoExcel->escribir_dato('J'.$i, $fila[10]);
				
				$phones = mysqli_fetch_row($phoneQuery);
				$ArcivoExcel->escribir_dato('M'.$i, '('.$phones[0].')');
				$ArcivoExcel->escribir_dato('N'.$i, '('.$phones[1].')');
				
				$phones = mysqli_fetch_row($phoneQuery);
				$ArcivoExcel->escribir_dato('K'.$i, '('.$phones[0].')');
				$ArcivoExcel->escribir_dato('L'.$i, '('.$phones[1].')');
				
				$phones = mysqli_fetch_row($phoneQuery);
				$ArcivoExcel->escribir_dato('O'.$i, '('.$phones[0].')');
				$ArcivoExcel->escribir_dato('P'.$i, '('.$phones[1].')');
				
				$ArcivoExcel->escribir_dato('Q'.$i, $fila[11]);
				$ArcivoExcel->escribir_dato('R'.$i, $fila[12]);
				$ArcivoExcel->escribir_dato('S'.$i, $fila[13]." ".$fila[14]);
				
				
				$i ++;
			}
			
			//Ajustar el ancho de las columnas de Excel
			$ArcivoExcel->seleccionar_hoja (0);
			$ArcivoExcel->auto_ajustar_columna ('A');
			$ArcivoExcel->auto_ajustar_columna ('B');
			$ArcivoExcel->auto_ajustar_columna ('C');
			$ArcivoExcel->auto_ajustar_columna ('D');
			$ArcivoExcel->auto_ajustar_columna ('E');
			$ArcivoExcel->auto_ajustar_columna ('F');
			$ArcivoExcel->auto_ajustar_columna ('G');
			$ArcivoExcel->auto_ajustar_columna ('H');
			$ArcivoExcel->auto_ajustar_columna ('I');
			$ArcivoExcel->auto_ajustar_columna ('J');
			$ArcivoExcel->auto_ajustar_columna ('K');
			$ArcivoExcel->auto_ajustar_columna ('L');
			$ArcivoExcel->auto_ajustar_columna ('M');
			$ArcivoExcel->auto_ajustar_columna ('N');
			$ArcivoExcel->auto_ajustar_columna ('O');
			$ArcivoExcel->auto_ajustar_columna ('P');
			$ArcivoExcel->auto_ajustar_columna ('Q');
			$ArcivoExcel->auto_ajustar_columna ('R');
			$ArcivoExcel->auto_ajustar_columna ('S');
			$ArcivoExcel->auto_ajustar_columna ('T');
			$ArcivoExcel->auto_ajustar_columna ('U');
			$ArcivoExcel->auto_ajustar_columna ('V');
			$ArcivoExcel->auto_ajustar_columna ('W');
			$ArcivoExcel->auto_ajustar_columna ('X');
			
			$ArcivoExcel->seleccionar_hoja (1);
			$ArcivoExcel->auto_ajustar_columna ('A');
			$ArcivoExcel->auto_ajustar_columna ('B');
			$ArcivoExcel->auto_ajustar_columna ('C');
			$ArcivoExcel->auto_ajustar_columna ('D');
			$ArcivoExcel->auto_ajustar_columna ('E');
			$ArcivoExcel->auto_ajustar_columna ('F');
			$ArcivoExcel->auto_ajustar_columna ('G');
			$ArcivoExcel->auto_ajustar_columna ('H');
			$ArcivoExcel->auto_ajustar_columna ('I');
			$ArcivoExcel->auto_ajustar_columna ('J');
			$ArcivoExcel->auto_ajustar_columna ('K');
			$ArcivoExcel->auto_ajustar_columna ('L');
			$ArcivoExcel->auto_ajustar_columna ('M');
			$ArcivoExcel->auto_ajustar_columna ('N');
			$ArcivoExcel->auto_ajustar_columna ('O');
			$ArcivoExcel->auto_ajustar_columna ('P');
			$ArcivoExcel->auto_ajustar_columna ('Q');
			$ArcivoExcel->auto_ajustar_columna ('R');
			$ArcivoExcel->auto_ajustar_columna ('S');
			$ArcivoExcel->seleccionar_hoja (0);
			
			//Guardar Archivo de Excel
			$ArcivoExcel->guardar_archivo('../ialu.xlsx');
			
			/* liberar el conjunto de resultados */
			mysqli_free_result($query);
			mysqli_free_result($phoneQuery);
		
			//Cerrat BD
			$bdconectada->desconectar();
			
		}
	}

?>
