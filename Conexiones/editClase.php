 <?php 
	
		if(!empty($_POST)){
		
		$alert='';
	if(empty($_POST['idClase'])||empty($_POST['maestro'])||empty($_POST['materia'])||empty($_POST['sala'])||empty($_POST['hrInicio'])||empty($_POST['hrFinaliza']))
	{
		$alert='<p class="msg_error"> Llenar campos faltantes</p>';
		
	}else{
			include('Conexiones/conBD.php');
			
			//Recibir valores e instanciar variables
			$idClase= $_POST['idClase'];
			$maestro= $_POST['maestro'];
			$materia= $_POST['materia'];
			$sala=$_POST['sala'];
			$hrInicio=$_POST['hrInicio'];
			$hrFinaliza=$_POST['hrFinaliza'];
			
			
			
					$query_insert = mysqli_query($conn, "UPDATE clases SET idClase='$idClase', cedula='$cedula', materia= '$materia', sala='$sala', hrInicio='$hrInicio', hrFinaliza='$hrFinaliza' WHERE idClase = '$idClase' ");
				
					
				if($query_insert){
					header('Location: ./clases.php');				
				}else{
					$alert='<p class="msg_error">Error al registrar</p>';
									}
					}
	}
//Buscar si alumno existe
		if(empty($_GET['idClase'])){
			header('Location: ./clases.php');
		}
//Extraer datos de alumnos desde la BD
		include('Conexiones/conBD.php');
		$idClase = $_GET['idClase'];
		$sql= mysqli_query($conn,"SELECT * FROM clases WHERE idClase = '$idClase'");

		$result_sql=mysqli_num_rows($sql);

		if($result_sql==0){
			header('Location: ./clases.php');
		}else{
//Almacenar valores del array de consulta en variables 			
			while($data=mysqli_fetch_array($sql)){
				
				$idClase = $data['idClase'];
				$cedula = $data['cedula'];
				$materia= $data['materia'];
				$sala=$data['sala'];
				$hrInicio=$data['hrInicio'];
				$hrFinaliza=$data['hrFinaliza'];
			}
		}
	?>