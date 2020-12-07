 <?php 
	


	
		if(!empty($_POST)){
		
		$alert='';
	if(empty($_POST['id'])||empty($_POST['nombre'])||empty($_POST['descripcion'])||empty($_POST['creditos']))
	{
		$alert='<p class="msg_error"> Llenar campos faltantes</p>';
		
	}else{
			include('Conexiones/conBD.php');//Relaciona con la conexiona la BD
			
			//Recibir valores e instanciar variables
			$id= $_POST['id'];
			$nombre= $_POST['nombre'];
			$descripcion= $_POST['descripcion'];
			$creditos=$_POST['creditos'];
		
			
			
			//Validar que no exista el usuario
			/*$query= mysqli_query($conn,"SELECT * FROM alumnos WHERE numCtrl ='$numCtrl'");
			$res=mysqli_fetch_array($query);
			
			
			if($res>0){
				$alert='<p class="msg_error">El usuario ya existe</p>';
			}else{*/
				
		
				$query_insert = mysqli_query($conn, "UPDATE asignatura SET id='$id', nombre='$nombre', descripcion= '$descripcion', creditos='$creditos'");
				
					
				if($query_insert){
					header('Location: ./asignatura.php');				
				}else{
					$alert='<p class="msg_error">Error al registrar</p>';
				
						}
			
		}
	}



//Buscar si alumno existe

		if(empty($_GET['id'])){
			header('Location: ./asignatura.php');
		}
//Extraer datos de alumnos desde la BD
		include('Conexiones/conBD.php');
		$id = $_GET['id'];
		$sql= mysqli_query($conn,"SELECT * FROM asignatura WHERE id = '$id'");

		$result_sql=mysqli_num_rows($sql);

		if($result_sql==0){
			header('Location: ./asignatura.php');
		}else{
//Almacenar valores del array de consulta en variables 			
			while($data=mysqli_fetch_array($sql)){
				
				$id = $data['id'];
				$nombre = $data['nombre'];
				$descripcion= $data['descripcion'];
				$creditos=$data['creditos'];
				
				
				
			}
		}

	?>