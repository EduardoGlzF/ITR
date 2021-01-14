<?php 
session_start();

	if(!isset($_SESSION['id'])){
		header("Location: index.php");
	}
?>
<!doctype html>
<html><!-- InstanceBegin template="/Templates/P_admin.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Laboratorio de redes</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
		<link rel="stylesheet" href="Estilos/menu.css">
		<script src="https://kit.fontawesome.com/a076d05399.js"></script>
		<link rel="stylesheet" href="Estilos/Formulario.css">

		 <?php include'Conexiones/editMaestro.php'; ?>
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
					<li><a href="clases.php">Clases</a></li>
					<li><a href="#">Asistencias</a></li>
					<li><a href="salas.php">Salas</a></li>
					<li><a href="#">Inventarios</a></li>
					<li><a href="salir.php">Salir</a></li>
				</ul>
	</div>	
	<!-- InstanceBeginEditable name="body" -->
	
			<section id="container">
			  <div class="form_reg">	
				
				<h1 id="titulo">Actualizar maestro</h1> <!-- Encabezado-->
				<hr>
				
				<div class="alert"><?php echo isset($alert) ? $alert : ''; ?></div> 
				<!-- Formulario -->
					<form action="" method="post">
						
		<!--Texto-->	<label for="cedula">Cedula</label> 
		<!--Textbox-->	<input type="text" name="cedula" id="cedula" placeholder="Cedula"
							  value="<?php echo $cedula?>">
						
						
						<label for="nombre">Nombre</label>
						<input type="text" name="nombre" id="nombre" placeholder="Nombre completo"
							    value="<?php echo $nombre?>">	
						
						<label for="email">Email</label>
						<input type="text" name="email" id="email" placeholder="Email"
							    value="<?php echo $email?>">						
						
						<label for="user">User</label>
						<input type="text" name="user" id="user" placeholder="User"
							    value="<?php echo $user ?>">	

						
						<label for="pass">Password</label>
						<input type="password" name="pass" id="pass" placeholder="Password"
							    value="<?php echo $password?>">
				
						<br>
						<br>

			<!--Boton--><input type="submit" name="send" id="send" value="Guardar" class="btnSend">
	
					</form>		
				</div>
			</section>
	<!-- InstanceEndEditable -->

	
</body>
<!-- InstanceEnd --></html>
