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
		<link rel="stylesheet" href="Estilos/tablas.css"><!--Estilos de tabla-->

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
					<li><a href="#">Maestros</a></li>
					<li><a href="#">Clases</a></li>
					<li><a href="#">Asistencias</a></li>
					<li><a href="#">Salas</a></li>
					<li><a href="#">Inventarios</a></li>
					<li><a href="#">Salir</a></li>
				</ul>
	</div>	
	<!-- InstanceBeginEditable name="body" -->
		
	<!--Tabla de alumnos-->
		<section id="container">
			<br>
			<h1>Lista de alumnos</h1>
			<br>
			<!--Boton para agregar usuarios -->
			<a href="/alumnosReg.php" class="btn_new">Agregar usuario</a>
			<br>
			
			<table>
				<!--encabezados de tabla-->
				<tr>
					<th>Numero Ctrl</th>
					<th>Nombre</th>
					<th>Carrera</th>
					<th>Teléfono</th>
					<th>Email</th>
					<th>Semestre</th>
					<th>Edad</th>
					<th>Acciones</th>
				</tr>
			<?php
				//Conexion a la BD y consulta de alumnos
				require 'Conexiones/conBD.php'; 
				
				$query = mysqli_query($conn, "SELECT * FROM alumnos");
				
				$result = mysqli_num_rows($query);
				if($result>0){
					while($data=mysqli_fetch_array($query)){	
	
			 ?>
				<!-- Estructura de tabla-->
				<tr>
					<td><?php echo $data["numCtrl"];?></td>
					<td><?php echo $data["nombre"];?></td>
					<td><?php echo $data["carrera"];?></td>
					<td><?php echo $data["telefono"];?></td>
					<td><?php echo $data["email"];?></td>
					<td><?php echo $data["semestre"];?></td>
					<td><?php echo $data["edad"];?></td>
					<td>
					<a class="link_edit" href="alumnosEdit.php?id=<?php echo $data["numCtrl"];?>">Editar</a> | 
						 
					<a class="link_delete" href="alumnosBorrar.php?id=<?php echo $data["numCtrl"];?>">Eliminar</a>

					</td>
					
				</tr>
	<?php
			}
				}
				?>
				
			</table>
				
		</section>
	
	<!-- InstanceEndEditable -->

	
</body>
<!-- InstanceEnd --></html>
