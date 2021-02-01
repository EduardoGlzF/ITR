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
			<h1>Lista de clases</h1>
			<br>
			<!--Boton para agregar usuarios -->
			<a href="/alumnosReg.php" class="btn_new">Agregar clase</a>
			<br>
						
			<a href="reportes/rep_clases.php" class="btn_rep">Reporte</a>
			
			
		<div class="tableCont">	
			<table>
				<!--encabezados de tabla-->
				<tr>
					<th class="sticky">Id</th>
					<th class="sticky">Maestro</th>
					<th class="sticky">Materia</th>
					<th class="sticky">Sala</th>
					<th class="sticky">Inicio</th>
					<th class="sticky">Finaliza</th>
					<th class="sticky">Acciones</th>

				
				</tr>
			<?php
				//Conexion a la BD y consulta de alumnos
				require 'Conexiones/conBD.php'; 
				
				$query = mysqli_query($conn, "SELECT cla.idClase, ma.nombre, cla.materia, cla.sala, cla.hrInicio, cla.hrFinaliza FROM clases as cla, maestros as ma WHERE ma.cedula=cla.cedula");
				
				$result = mysqli_num_rows($query);
				if($result>0){
					while($data=mysqli_fetch_array($query)){	
	
			 ?>
				<!-- Estructura de tabla-->
				<tr>
					<td><?php echo $data["idClase"];?></td>
					<td><?php echo $data["nombre"];?></td>
					<td><?php echo $data["materia"];?></td>
					<td><?php echo $data["sala"];?></td>
					<td><?php echo $data["hrInicio"];?></td>
					<td><?php echo $data["hrFinaliza"];?></td>
					<td>
					<a class="link_edit" href="clasesEdit.php?idClase=<?php echo $data["idClase"];?>">Editar</a> | 
						 
					<a class="link_delete" href="clasesBorrar.php?idClase=<?php echo $data["idClase"];?>">Eliminar</a>

					</td>
					
				</tr>
	<?php
			}
				}
				?>
				
			</table>
		 </div>		
	
	<!-- InstanceEndEditable -->

	
</body>
<!-- InstanceEnd --></html>
