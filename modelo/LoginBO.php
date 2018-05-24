<?php	
	include_once 'ConectaBD.php';
	class LoginBO
	{
		//Constructor
		public function __construct()
		{

		}
		//Metodos
		public function acceder($post)
		{	
						
			//Conectar a la BD
			$estatus=0;
			$bdconectada = new ConectaBD();
			$bdconectada->conectar();
			
			$usr = $bdconectada->escapar_datos ($post["user"]);
			$pass = $bdconectada->escapar_datos ($post["passwd"]);
			$pass = hash('sha256', $pass);
			
			$query = 'SELECT id FROM logins WHERE username = "'.$usr.'" AND password = "'.$pass.'"';
			
			$result= $bdconectada->consulta($query);
			if ($result->num_rows > 0) 
			{
				$row = $result->fetch_assoc();
				$estatus=1;//Login correcto
				$query = 'INSERT INTO action_log (Accion, User_ID) VALUES ("Login", "'.$row["id"].'")';
				$bdconectada->consulta($query);

				/* liberar el conjunto de resultados */
				mysqli_free_result($result);
			}
			else
			{
				$estatus=0;//Error
			}

		
			//Cerrar BD
			$bdconectada->desconectar();
			return $estatus;
		}
		public function logout{

		}
	}

?>