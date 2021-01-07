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
	    <?php include'Conexiones/editClase.php'; ?>
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
						
		<!--Texto-->	<label for="idClase">Clase</label> 
		<!--Textbox-->	<input type="text" name="idClase" id="idClase" placeholder="Nombre de la clase"
							  value="<?php echo $idClase?>">
						
						
						<label for="cedula">Maestro</label>
						<input type="text" name="cedula" id="cedula" placeholder="Nombre de maestro"
							    value="<?php echo $cedula?>">	
						
						<label for="materia">Materia</label>
						<input type="text" name="materia" id="materia" placeholder="Materia"
							    value="<?php echo $materia?>">						
						
						<label for="sala">Sala</label>
						<input type="text" name="sala" id="sala" placeholder="Sala"
							    value="<?php echo $sala?>">	

						
						<label for="hrInicio">Inicia</label>
						<input type="text" name="hrInicio" id="hrInicio" placeholder="Hora de inicio"
							    value="<?php echo $hrInicio?>">
						
						
						<label for="hrFinaliza">Finaliza</label>
						<input type="text" name="hrFinaliza" id="hrFinaliza" placeholder="Hora de finalización"
							    value="<?php echo $hrFinaliza?>">	
						
						<br>
						<br>

			<!--Boton--><input type="submit" name="send" id="send" value="Guardar" class="btnSend">
	
					</form>		
				</div>
			</section>
	<!-- InstanceEndEditable -->

	
</body>
<!-- InstanceEnd --></html>
