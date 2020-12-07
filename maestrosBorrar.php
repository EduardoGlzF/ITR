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

							$cedula = $_POST['cedula'];

							$queryDelete=mysqli_query($conn,"DELETE FROM maestros WHERE cedula = '$cedula'");

							if($queryDelete){
								header("Location: maestros.php");
							}else{
								echo("No se ha podido eliminar");
							}
						}



						if (empty($_REQUEST['cedula'])){

							header("Location: maestros.php");
						}else{

							include("Conexiones/conBd.php");
							$cedula=$_REQUEST['cedula'];
							$query=mysqli_query($conn,"SELECT cedula, nombre FROM maestros WHERE cedula='$cedula'");

							$result=mysqli_num_rows($query);

							if($result>0){
								while($data = mysqli_fetch_array($query)){
								$cedula=$data['cedula'];
								$nombre=$data['nombre'];
								}
							}else{
								header("Location maestros.php");
							}
						}

				?>		

			<section id="container">
				<div class="dataDelete">
				<h1>Eliminar usuario</h1>
				<br>
				<h2>¿Desea eliminar el siguiente usuario</h2>
				<br>
				<p>Numero de control: <span><?php echo $cedula;?></span></p>
				<p>Nombre: <span><?php echo $nombre;?></span></p>


				<form method="post" action="">
					<input type="hidden" name="cedula" value="<?php echo $cedula;?>">
					<a href="maestros.php" class="btnCancel">Cancelar</a>
					<input type ="submit" value="Aceptar" class="btnOk">	

				</form>
				</div>

			</section>
	 
	<!-- InstanceEndEditable -->

	
</body>
<!-- InstanceEnd --></html>
