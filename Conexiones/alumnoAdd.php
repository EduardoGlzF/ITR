 <?php 
	
		if(!empty($_POST)){
		
		$alert='';
	if(empty($_POST['numctrl'])||empty($_POST['nombre'])||empty($_POST['carrera'])||empty($_POST['telefono'])||empty($_POST['email'])||empty($_POST['semestre']))
	{
		$alert='<p class="msg_error"> Llenar campos faltantes</p>';
		
	}else{
			include('Conexiones/conBD.php');
			
			//Recibir valores e instanciar variables
			$numCtrl= $_POST['numctrl'];
			$nombre= $_POST['nombre'];
			$carrera= $_POST['carrera'];
			$telefono=$_POST['telefono'];
			$email=$_POST['email'];
			$semestre=$_POST['semestre'];
			$edad=$_POST['edad'];
			
			//Validar que no exista el usuario
			$query= mysqli_query($conn,"SELECT * FROM alumnos WHERE numCtrl ='$numCtrl'");
			$res=mysqli_fetch_array($query);
			
			
			if($res>0){
				$alert='<p class="msg_error">El usuario ya existe</p>';
			}else{
				
				$query_insert = mysqli_query($conn, "INSERT INTO alumnos (numctrl,nombre,carrera,telefono,email,semestre,edad)VALUES('$numCtrl','$nombre','$carrera','$telefono','$email','$semestre','$edad')");
				
				/*$query_insert=mysqli_query($conn,"INSERT INTO alumnos(numCtrl,nombre,carrera,telefono,email,semestre,edad)VALUES('$numCtrl','$nombre',			'$carrera',$telefono','$email','$semestre','$edad')");*/
				
				if($query_insert){
					$alert='<p class="msg_save"> Usuario creado</p>';
				}else{
					$alert='<p class="msg_error">Error al registrar</p>';
				}
			}
			
		}
	}
	
	?>