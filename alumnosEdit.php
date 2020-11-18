<!doctype html>
<html><!-- InstanceBegin template="/Templates/P_admin.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Laboratorio de redes</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
		<link rel="stylesheet" href="Estilos/menu.css"><!--Estilos para sideBar-->
	<script src="https://kit.fontawesome.com/a076d05399.js"></script><!--Estilos de slideBar -->
	<link rel="stylesheet" href="Estilos/Formulario.css">
	    <?php include'Conexiones/editAlumno.php'; ?>

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
					<li><a href="#">Clases</a></li>
					<li><a href="#">Asistencias</a></li>
					<li><a href="#">Salas</a></li>
					<li><a href="#">Inventarios</a></li>
					<li><a href="#">Salir</a></li>
				</ul>
	</div>	
	<!-- InstanceBeginEditable name="body" -->
	
		<section id="container">
			  <div class="form_reg">	
				
				<h1 id="titulo">Actualizar alumno</h1> <!-- Encabezado-->
				<hr>
				
				<div class="alert"><?php echo isset($alert) ? $alert : ''; ?></div> 
				<!-- Formulario -->
					<form action="" method="post">
						
		<!--Texto-->	<label for="numctrl">Numero de control</label> 
		<!--Textbox-->	<input type="text" name="numctrl" id="numctrl" placeholder="Numer de control"
							  value="<?php echo $numCtrl?>">
						
						
						<label for="nombre">Nombre</label>
						<input type="text" name="nombre" id="nombre" placeholder="Nombre completo"
							    value="<?php echo $nombre?>">	
						
						<label for="carrera">Carrera</label>
						<input type="text" name="carrera" id="carrera" placeholder="Carrera"
							    value="<?php echo $carrera?>">						
						
						<label for="telefono">Teléfono</label>
						<input type="text" name="telefono" id="telefono" placeholder="Teléfono"
							    value="<?php echo $telefono ?>">	

						
						<label for="email">Email</label>
						<input type="text" name="email" id="email" placeholder="Email"
							    value="<?php echo $email?>">
						
						
						<label for="semestre">Semestre</label>
						<input type="text" name="semestre" id="semestre" placeholder="Semestre"
							    value="<?php echo $semestre?>">	
						
						
						<label for="edad">Edad</label>
						<input type="text" name="edad" id="edad" placeholder="Edad"
							    value="<?php echo $edad?>">
						<br>
						<br>

			<!--Boton--><input type="submit" name="send" id="send" value="Guardar" class="btnSend">
	
					</form>		
				</div>
			</section>
	
	
	<!-- InstanceEndEditable -->

	
</body>
<!-- InstanceEnd --></html>
