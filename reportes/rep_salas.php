<?php require '../Conexiones/conBD.php';  ?>
<?php
	include '../plan_salas.php';
	
	
	$sql = "SELECT * FROM sala";
	$resultado =  $conn->query($sql);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(28,6,'Id',1,0,'C',1);	
	$pdf->Cell(150,6,utf8_decode('Ubicación'),1,1,'C',1);
	
	
	
	$pdf->SetFont('Arial','',6);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(28,6,$row['id'],1,0,'C');		
		$pdf->Cell(150,6,$row['ubicacion'],1,1,'C');
	}
	$pdf->Output();
?>