<?php 
	
		if(!empty($_POST)){
		
		$alert='';
	if(empty($_POST['id'])||empty($_POST['ubicacion']))
	{
		$alert='<p class="msg_error"> Llenar campos faltantes</p>';
		
	}else{
			include('Conexiones/conBD.php');
			
			//Recibir valores e instanciar variables
			$id= $_POST['id'];
			$ubicacion= $_POST['ubicacion'];
			
			
			//Validar que no exista el usuario
			$query= mysqli_query($conn,"SELECT * FROM sala WHERE id ='$id'");
			$res=mysqli_fetch_array($query);
			
			
			if($res>0){
				$alert='<p class="msg_error">El usuario ya existe</p>';
			}else{
				$query_insert=mysqli_query($conn,"INSERT INTO sala(id,ubicacion)VALUES('$id','$ubicacion')");
				
				if($query_insert){
					$alert='<p class="msg_save"> Usuario creado</p>';
				}else{
					$alert='<p class="msg_error">Error al registrar</p>';
				}
			}
			
		}
	}
	



//Buscar si alumno existe

		if(empty($_GET['id'])){
			header('Location: ../salasEdit.php');
		}
		


	?>