 <?php 
	
		if(!empty($_POST)){
		
		$alert='';
	if(empty($_POST['clase'])||empty($_POST['maestro'])||empty($_POST['materia'])||empty($_POST['sala'])||empty($_POST['hrInicio'])||empty($_POST['hrFinaliza']))
	{
		$alert='<p class="msg_error"> Llenar campos faltantes</p>';
		
	}else{
			include('Conexiones/conBD.php');
			
			//Recibir valores e instanciar variables
			$idClase= $_POST['clase'];
			$maestro= $_POST['maestro'];
			$materia= $_POST['materia'];
			$sala=$_POST['sala'];
			$hrInicio=$_POST['hrInicio'];
			$hrFinaliza=$_POST['hrFinaliza'];
			
			
			//Validar que no exista el usuario
			$query= mysqli_query($conn,"SELECT * FROM clases WHERE idClase ='$clase'");
			$res=mysqli_fetch_array($query);
			
			
			if($res>0){
				$alert='<p class="msg_error">El usuario ya existe</p>';
			}else{
				$query_insert=mysqli_query($conn,"INSERT INTO clases(idClase,cedula,materia, sala,hrInicio,hrFinaliza)VALUES('$clase','$maestro','$materia','$sala','$hrInicio','$hrFinaliza')");
				
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
			header('Location: ../alumnosEdit.php');
		}
		


	?>