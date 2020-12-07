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
	    <?php include'Conexiones/editSala.php'; ?>
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
	
			<section id="container">
			  <div class="form_reg">	
				
				<h1 id="titulo">Actualizar sala</h1> <!-- Encabezado-->
				<hr>
				
				<div class="alert"><?php echo isset($alert) ? $alert : ''; ?></div> 
				<!-- Formulario -->
					<form action="" method="post">
						
		<!--Texto-->	<label for="id">ID de sala</label> 
		<!--Textbox-->	<input type="text" name="id" id="id" placeholder="ID de sala"
							  value="<?php echo $id?>">
						
						
						<label for="ubicacion">Ubicación</label>
						<input type="text" name="ubicacion" id="ubicacion" placeholder="Ubicación"
							    value="<?php echo $ubicacion?>">	
						
						
						<br>
						<br>

			<!--Boton--><input type="submit" name="send" id="send" value="Guardar" class="btnSend">
	
					</form>		
				</div>
			</section>
	<!-- InstanceEndEditable -->

	
</body>
<!-- InstanceEnd --></html>
