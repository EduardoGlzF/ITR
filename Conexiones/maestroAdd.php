 <?php 
	
		if(!empty($_POST)){
		
		$alert='';
	if(empty($_POST['cedula'])||empty($_POST['nombre'])||empty($_POST['email'])||empty($_POST['user'])||empty($_POST['pass']))
	{
		$alert='<p class="msg_error"> Llenar campos faltantes</p>';
		
	}else{
			include('Conexiones/conBD.php');
			
			//Recibir valores e instanciar variables
			$cedula= $_POST['cedula'];
			$nombre= $_POST['nombre'];			
			$email=$_POST['email'];
			$user=$_POST['user'];
			$pass=md5($_POST['pass']);//Clave encriptada en md5
			
			
			//Validar que no exista el usuario
			$query= mysqli_query($conn,"SELECT * FROM maestros WHERE cedula ='$cedula'");
			$res=mysqli_fetch_array($query);
			
			
			if($res>0){
				$alert='<p class="msg_error">El usuario ya existe</p>';
			}else{
				
				$query_insert = mysqli_query($conn, "INSERT INTO maestros (cedula,nombre,email,user,password)VALUES('$cedula','$nombre','$email','$user','$pass')");
				
				
				
				if($query_insert){
					$alert='<p class="msg_save"> Usuario creado</p>';
				}else{
					$alert='<p class="msg_error">Error al registrar</p>';
				}
			}
			
		}
	}
	
	?>