  <?php 
	


	
		if(!empty($_POST)){
		
		$alert='';
	if(empty($_POST['cedula'])||empty($_POST['nombre'])||empty($_POST['email'])||empty($_POST['user'])||empty($_POST['pass']))
	{
		$alert='<p class="msg_error"> Llenar campos faltantes</p>';
		
	}else{
			include('Conexiones/conBD.php');//Relaciona con la conexiona la BD
			
			//Recibir valores e instanciar variables
			$cedula= $_POST['cedula'];
			$nombre= $_POST['nombre'];
			$email= $_POST['email'];
			$user=$_POST['user'];
			$password=md5($_POST['password']);
			
			
			//Validar que no exista el usuario
			/*$query= mysqli_query($conn,"SELECT * FROM alumnos WHERE numCtrl ='$numCtrl'");
			$res=mysqli_fetch_array($query);
			
			
			if($res>0){
				$alert='<p class="msg_error">El usuario ya existe</p>';
			}else{*/
				
		
				$query_insert = mysqli_query($conn, "UPDATE maestros SET cedula='$cedula', nombre='$nombre', email= '$email', user='$user', password='$password' WHERE cedula = '$cedula' ");
				
					
				if($query_insert){
					header('Location: ./maestros.php');				
				}else{
					$alert='<p class="msg_error">Error al registrar</p>';
				
						}
			
		}
	}



//Buscar si alumno existe

		if(empty($_GET['cedula'])){
			header('Location: ./maestros.php');
		}
//Extraer datos de alumnos desde la BD
		include('Conexiones/conBD.php');
		$cedula = $_GET['cedula'];
		$sql= mysqli_query($conn,"SELECT * FROM maestros WHERE cedula = '$cedula'");

		$result_sql=mysqli_num_rows($sql);

		if($result_sql==0){
			header('Location: ./maestros.php');
		}else{
//Almacenar valores del array de consulta en variables 			
			while($data=mysqli_fetch_array($sql)){
				
				$cedula = $data['cedula'];
				$nombre = $data['nombre'];
				$email= $data['email'];
				$user=$data['user'];
				$password=$data['password'];
				
				
			}
		}

	?>