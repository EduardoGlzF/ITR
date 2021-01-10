<?php
//Conexion a la BD
require 'conBD.php';

session_start();

//Instanciar botones de HTML
$usuario = $_POST['user'];
$clave = $_POST['pass'];

//consulta de admins
$consulta = "SELECT * FROM admins where user = '$usuario' and password = '$clave'";
$res=mysqli_query($conn,$consulta);

$fila=mysqli_num_rows($res);
//Validar usuario y contraseña de admin
if($fila){
	$row = $res->fetch_assoc();
	$_SESSION['id'] = $row['id'];
	header("Location: ../home.php");
 }
else{
	echo("Usuario o contraseña invalidos");
}

mysqli_free_result(res);//Liberar datos
mysqli_close($conn);//Cerrar la conexion

/*$q = "SELECT COUNT (*) as contar from maestros where user = '".$usuario."' and password = '".$clave."' ";
$consulta = mysqli_query($conn,$q);
$array = mysqli_fetch_array($consulta);

if($array['contar']>0){
	echo("Validado");
}
else{
	echo("Datos invalidos");
}*/




?>