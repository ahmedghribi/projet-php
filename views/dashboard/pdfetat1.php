<?php
$pdf->AliasNbPages(); 
$pdf->AddPage(); 
$pdf->SetFont('Times','',12);
 
$pdf->Cell(50); 
$pdf->Cell(100,10,"Etat des inscrits par pays",1,0,'C'); 
$pdf->Ln(20); 

$pdf->Cell(30,7,'nom',1,0,'C');
$pdf->Cell(30,7,'prenom',1,0,'C');
$pdf->Cell(50,7,'email',1,0,'C');
$pdf->Cell(30,7,'tel',1,0,'C');
$pdf->Cell(30,7,'pays',1,0,'C');

$pdf->Ln();

foreach($result as $inscrit){
$pdf->Cell(30,7,$inscrit->nom,1,0,'C');
$pdf->Cell(30,7,$inscrit->prenom,1,0,'C');
$pdf->Cell(50,7,$inscrit->email,1,0,'C');
$pdf->Cell(30,7,$inscrit->tel,1,0,'C');
$pdf->Cell(30,7,$inscrit->pays,1,0,'C');
$pdf->Ln();
}
?>
