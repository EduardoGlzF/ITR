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
			
			
				
				$query_insert = mysqli_query($conn, "UPDATE sala SET id='$id', ubicacion='$ubicacion' WHERE id = '$id' ");
		
		if($query_insert){
					header('Location: ./salas.php');				
				}else{
					$alert='<p class="msg_error">Error al registrar</p>';
									}
					}
	}
//Buscar si alumno existe
		if(empty($_GET['id'])){
 
			header('Location: ./salas.php');
		}
//Extraer datos de alumnos desde la BD
		include('Conexiones/conBD.php');
		$id = $_GET['id'];
		$sql= mysqli_query($conn,"SELECT * FROM sala WHERE id = '$id'");

		$result_sql=mysqli_num_rows($sql);

		if($result_sql==0){
			header('Location: ./salas.php');
		}else{
//Almacenar valores del array de consulta en variables 			
			while($data=mysqli_fetch_array($sql)){
				
				$id = $data['id'];
				$ubicacion = $data['ubicacion'];
				
			}
		}
	?>
	?>