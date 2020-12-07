 <?php 
	
		if(!empty($_POST)){
		
		$alert='';
	if(empty($_POST['id'])||empty($_POST['nombre'])||empty($_POST['descripcion'])||empty($_POST['creditos']))
	{
		$alert='<p class="msg_error"> Llenar campos faltantes</p>';
		
	}else{
			include('Conexiones/conBD.php');
			
			//Recibir valores e instanciar variables
			$id= $_POST['id'];
			$nombre= $_POST['nombre'];
			$descripcion= $_POST['descripcion'];
			$creditos=$_POST['creditos'];
			
			
			//Validar que no exista el usuario
			$query= mysqli_query($conn,"SELECT * FROM asignatura WHERE id ='$id'");
			$res=mysqli_fetch_array($query);
			
			
			if($res>0){
				$alert='<p class="msg_error">La asignatura ya existe</p>';
			}else{
				
				$query_insert = mysqli_query($conn, "INSERT INTO asignatura (id,nombre,descripcion,creditos)VALUES('$id','$nombre','$descripcion','$creditos')");
				
				/*$query_insert=mysqli_query($conn,"INSERT INTO alumnos(numCtrl,nombre,carrera,telefono,email,semestre,edad)VALUES('$numCtrl','$nombre',			'$carrera',$telefono','$email','$semestre','$edad')");*/
				
				if($query_insert){
					$alert='<p class="msg_save"> Asignatura creada</p>';
				}else{
					$alert='<p class="msg_error">Error al registrar</p>';
				}
			}
			
		}
	}
	
	?>