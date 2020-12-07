<!doctype html>
<html><!-- InstanceBegin template="/Templates/P_admin.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Laboratorio de redes</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
		<link rel="stylesheet" href="Estilos/menu.css">
		<link rel="stylesheet" href="Estilos/mnj.css">
	
		<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<!-- InstanceEndEditable -->
</head>
<body>
	<input type="checkbox" id="check">
	<label for="check">
		<i class="fas fa-bars" id="btnMenu"></i>
		<i class="fas fa-times" id="cancel"></i>
	</label>
	<div class="sideBar">	
				<ul>
					<li><a href="home.php" >Inicio</a></li>
					<li><a href="alumnos.php">Alumnos</a></li>
					<li><a href="maestros.php">Maestros</a></li>
					<li><a href="asignatura.php">Asignaturas</a></li>
					<li><a href="#">Clases</a></li>
					<li><a href="#">Asistencias</a></li>
					<li><a href="salas.php">Salas</a></li>
					<li><a href="#">Inventarios</a></li>
					<li><a href="#">Salir</a></li>
				</ul>
	</div>	
	<!-- InstanceBeginEditable name="body" -->
	
		<?php
				if(!empty($_POST)){
					include("Conexiones/conBd.php");

					$id = $_POST['id'];
					
					$queryDelete=mysqli_query($conn,"DELETE FROM sala WHERE id = '$id'");
					
					if($queryDelete){
						header("Location: salas.php");
					}else{
						echo("No se ha podido eliminar");
					}
				}
	
	
	
				if (empty($_REQUEST['id'])){
					
					header("Location: salas.php");
				}else{
					
					include("Conexiones/conBd.php");
					$id=$_REQUEST['id'];
					$query=mysqli_query($conn,"SELECT id, ubicacion FROM sala WHERE id='$id'");
					
					$result=mysqli_num_rows($query);
					
					if($result>0){
						while($data = mysqli_fetch_array($query)){
						$id=$data['id'];
						$ubicacion=$data['ubicacion'];
						}
					}else{
						header("Location salas.php");
					}
				}
			
		?>		
	
	<section id="container">
		<div class="dataDelete">
		<h1>Eliminar usuario</h1>
		<br>
		<h2>¿Desea eliminar el siguiente usuario</h2>
		<br>
		<p>Numero de control: <span><?php echo $id;?></span></p>
		<p>Nombre: <span><?php echo $ubicacion;?></span></p>
		
		
		<form method="post" action="">
			<input type="hidden" name="id" value="<?php echo $id;?>">
			<a href="salas.php" class="btnCancel">Cancelar</a>
			<input type ="submit" value="Aceptar" class="btnOk">	
		
		</form>
		</div>
 
	</section>
	<!-- InstanceEndEditable -->

	
</body>
<!-- InstanceEnd --></html>
