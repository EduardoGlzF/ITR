<?php require '../Conexiones/conBD.php';  ?>
<?php
	include '../plantilla.php';
	
	
	$sql = "SELECT * FROM alumnos";
	$resultado =  $conn->query($sql);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(35,6,'Numero de control',1,0,'C',1);
	$pdf->Cell(45,6,'Nombre',1,0,'C',1);
	$pdf->Cell(40,6,'carerra',1,0,'C',1);
	$pdf->Cell(35,6,'Numero de telefono',1,0,'C',1);
	$pdf->Cell(40,6,'Email',1,1,'C',1);
	
	
	$pdf->SetFont('Arial','',8);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(35,6,utf8_decode($row['numCtrl']),1,0,'C');
		$pdf->Cell(45,6,$row['nombre'],1,0,'C');
		$pdf->Cell(40,6,utf8_decode($row['carrera']),1,0,'C');		
		$pdf->Cell(35,6,$row['telefono'],1,0,'C');
		$pdf->Cell(40,6,utf8_decode($row['email']),1,1,'C');
	}
	$pdf->Output();
?>