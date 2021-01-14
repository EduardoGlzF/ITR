<?php 
	require 'Conexiones/conBD.php';
	session_start();
	 
	if(!isset($_SESSION['id'])){
		header("Location: index.php");
	}

	$sql = "SELECT * FROM carreras";
	$resultado = $conn->query($sql);
?>
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
    <?php include'Conexiones/alumnoAdd.php'; ?>
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
				
				<h1 id="titulo">Registro de alumnos</h1> <!-- Encabezado-->
				<hr>
				
				<div class="alert"><?php echo isset($alert) ? $alert : ''; ?></div> 
				<!-- Formulario -->
					<form action="" method="post">
						
		<!--Texto-->	<label for="numctrl">Numero de control</label> 
		<!--Textbox-->	<input type="text" name="numctrl" id="numctrl" placeholder="Numero de control">
						
						
						<label for="nombre">Nombre</label>
						<input type="text" name="nombre" id="nombre" placeholder="Nombre completo">	
						
						<label for="carrera">Carrera</label>
						<select id="carrera" name="carrera" aria-label="carrera" required>
								<option value=""> -Selecione una carrera-</option>
								<?php foreach($resultado as $opcion1): ?>
										<option value="<?php echo $opcion1['id_carr']; ?>"><?php echo $opcion1['carrera']; ?></option>
								<?php endforeach ?>
						</select>					
						
						<label for="telefono">Teléfono</label>
						<input type="text" name="telefono" id="telefono" placeholder="Teléfono">	

						
						<label for="email">Email</label>
						<input type="text" name="email" id="email" placeholder="Email">
						
						
						<label for="semestre">Semestre</label>
						<input type="text" name="semestre" id="semestre" placeholder="Semestre">	
						
						
						
						<br>
						<br>

			<!--Boton--><input type="submit" name="send" id="send" value="Guardar" class="btnSend">
	
					</form>		
				</div>
			</section>


	<!-- InstanceEndEditable -->

	
</body>
<!-- InstanceEnd --></html>
