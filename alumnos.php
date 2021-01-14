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
		
	<!--Tabla de alumnos-->
		<section id="container">
			<br>
			<h1>Lista de alumnos</h1>
			<br>
			<!--Boton para agregar usuarios -->
			<a href="./alumnosReg.php" class="btn_new">Agregar usuario</a>
			<br>
						
			<a href="./reportes/reporte1.php" class="btn_rep">Reporte</a>
			
			
		<div class="tableCont">	
			<table>
				<!--encabezados de tabla-->
				<tr>
					<th class="sticky">Numero Ctrl</th>
					<th class="sticky">Nombre</th>
					<th class="sticky">Carrera</th>
					<th class="sticky">Teléfono</th>
					<th class="sticky">Email</th>
					<th class="sticky">Semestre</th>					
					<th class="sticky">Acciones</th>
				</tr>
			<?php
				//Conexion a la BD y consulta de alumnos
				require 'Conexiones/conBD.php'; 
				
				$sql = "SELECT * FROM carreras";
				$resultado4 = $conn->query($sql);
				
				$query = mysqli_query($conn, "SELECT * FROM alumnos");
				
				$result = mysqli_num_rows($query);
				if($result>0){
					while($data=mysqli_fetch_array($query)){	
	
			 ?>
				<!-- Estructura de tabla-->
				<tr>
					<td><?php echo $data["numCtrl"];?></td>
					<td><?php echo $data["nombre"];?></td>
					<td><?php
							$idcarr1 = $data['id_carr'];
							$sql = "SELECT * FROM carreras where id_carr='$idcarr1'";
							$rescarr = $conn->query($sql);
							while($row3 = $rescarr->fetch_assoc()) {
									echo $row3['carrera'];
							}
					?></td>
					<td><?php echo $data["telefono"];?></td>
					<td><?php echo $data["email"];?></td>
					<td><?php echo $data["semestre"];?></td>					
					<td>
					<a class="link_edit" href="alumnosEdit.php?numCtrl=<?php echo $data["numCtrl"];?>">Editar</a> | 
						 
					<a class="link_delete" href="alumnosBorrar.php?id=<?php echo $data["numCtrl"];?>">Eliminar</a>

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
