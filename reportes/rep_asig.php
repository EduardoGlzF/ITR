<?php require '../Conexiones/conBD.php';  ?>
<?php
	include '../plan_asig.php';
	
	
	$sql = "SELECT * FROM asignatura";
	$resultado =  $conn->query($sql);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(28,6,'ID',1,0,'C',1);
	$pdf->Cell(50,6,'Nombre',1,0,'C',1);
	$pdf->Cell(62,6,'Descripcion',1,0,'C',1);
	$pdf->Cell(50,6,'Creditos',1,1,'C',1);
	
	
	
	$pdf->SetFont('Arial','',6);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(28,6,$row['id'],1,0,'C');
		$pdf->Cell(50,6,$row['nombre'],1,0,'C');					
		$pdf->Cell(62,6,$row['descripcion'],1,0,'C');
		$pdf->Cell(50,6,$row['creditos'],1,1,'C');
	}
	$pdf->Output();
?>