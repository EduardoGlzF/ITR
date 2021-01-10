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
			<br>
			<h1>Lista de maestros</h1>
			<br>
			<!--Boton para agregar usuarios -->
			<a href="/maestrosReg.php" class="btn_new">Agregar usuario</a>
			<br>
			
		<div class="tableCont">	
			<table>
				<!--encabezados de tabla-->
				<tr>
					<th class="sticky">Cedula</th>
					<th class="sticky">Nombre</th>
					<th class="sticky">Email</th>
					<th class="sticky">User</th>
					<th class="sticky">Acciones</th>
					
				</tr>
			<?php
				//Conexion a la BD y consulta de alumnos
				require 'Conexiones/conBD.php'; 
				
				$query = mysqli_query($conn, "SELECT * FROM maestros");
				
				$result = mysqli_num_rows($query);
				if($result>0){
					while($data=mysqli_fetch_array($query)){	
	
			 ?>
				<!-- Estructura de tabla-->
				<tr>
					<td><?php echo $data["cedula"];?></td>
					<td><?php echo $data["nombre"];?></td>
					<td><?php echo $data["email"];?></td>
					<td><?php echo $data["user"];?></td>
					
					
					<td>
					<a class="link_edit" href="maestrosEdit.php?cedula=<?php echo $data["cedula"];?>">Editar</a> | 
						 
					<a class="link_delete" href="maestrosBorrar.php?cedula=<?php echo $data["cedula"];?>">Eliminar</a>

					</td>
					
				</tr>
	<?php
			}
				}
				?>
				
			</table>
		 </div>		
		</section>
	
	
	
	<!-- InstanceEndEditable -->

	
</body>
<!-- InstanceEnd --></html>
