<?php require '../Conexiones/conBD.php';  ?>
<?php
	include '../plan_clases.php';
	
	
	$sql = "SELECT cla.idClase, ma.nombre, cla.materia, cla.sala, cla.hrInicio, cla.hrFinaliza FROM clases as cla, maestros as ma WHERE ma.cedula=cla.cedula";
	$resultado =  $conn->query($sql);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(10,6,'Id',1,0,'C',1);
	$pdf->Cell(50,6,'Maestro',1,0,'C',1);
	$pdf->Cell(62,6,'Materia',1,0,'C',1);
	$pdf->Cell(15,6,'Sala',1,0,'C',1);
	$pdf->Cell(25,6,'Inicio',1,0,'C',1);
	$pdf->Cell(25,6,'Finaliza',1,1,'C',1);
	
	
	
	
	$pdf->SetFont('Arial','',6);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(10,6,$row['idClase'],1,0,'C');
		$pdf->Cell(50,6,$row['nombre'],1,0,'C');					
		$pdf->Cell(62,6,$row['materia'],1,0,'C');
		$pdf->Cell(15,6,$row['sala'],1,0,'C');
		$pdf->Cell(25,6,$row['hrInicio'],1,0,'C');
		
		$pdf->Cell(25,6,$row['hrFinaliza'],1,1,'C');
	}
	$pdf->Output();
?>