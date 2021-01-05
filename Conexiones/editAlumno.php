 <?php 
	

		if(!empty($_POST)){
		
		$alert='';
	if(empty($_POST['numCtrl'])||empty($_POST['nombre'])||empty($_POST['telefono'])||empty($_POST['email'])||empty($_POST['semestre']))
	{
		$alert='<p class="msg_error"> Llenar campos faltantes</p>';
		
	}else{
			include('Conexiones/conBD.php');
			
			//Recibir valores e instanciar variables
			$numCtrl= $_POST['numCtrl'];
			$nombre= $_POST['nombre'];
			$carrera= $_POST['carrera'];
			$telefono=$_POST['telefono'];
			$email=$_POST['email'];
			$semestre=$_POST['semestre'];
			$edad=$_POST['edad'];
			
			/*Validar que no exista el usuario
			$query= mysqli_query($conn,"SELECT * FROM alumnos WHERE numCtrl ='$numCtrl'");
			$res=mysqli_fetch_array($query);
			
			
			if($res>0){
				$alert='<p class="msg_error">El usuario ya existe</p>';
			}else{*/
				
		
				
			$query_insert = mysqli_query($conn, "UPDATE alumnos SET numCtrl='$numCtrl', nombre='$nombre', carrera='$carrera',telefono='$telefono', email= '$email', semestre='$semestre', edad='$edad' WHERE numCtrl = '$numCtrl' ");
		
				if($query_insert){
					header('Location: ./alumnos.php');				
				}else{
					$alert='<p class="msg_error">Error al registrar</p>';
				
						}
		}
	}
//Buscar si alumno existe

		if(empty($_GET['numCtrl'])){
			header('Location: ./alumnos.php');
		}
//Extraer datos de alumnos desde la BD
		include('Conexiones/conBD.php');
		$numCtrl = $_GET['numCtrl'];
		$sql= mysqli_query($conn,"SELECT * FROM alumnos WHERE numCtrl = '$numCtrl'");

		$result_sql=mysqli_num_rows($sql);

		if($result_sql==0){
			header('Location: ./alumnos.php');
		}else{
//Almacenar valores del array de consulta en variables 			
			while($data=mysqli_fetch_array($sql)){
				
				$numCtrl = $data['numCtrl'];
				$nombre = $data['nombre'];
				$carrera= $data['carrera'];
				$telefono=$data['telefono'];
				$email=$data['email'];
				$semestre=$data['semestre'];
				$edad=$data['edad'];
				
				
			}
		}

	?>