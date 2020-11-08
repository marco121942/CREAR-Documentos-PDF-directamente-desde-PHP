<?php
include('reporte2.php');

$pdf =new PDF();
$pdf->AddPage();
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',18);
$pdf->Cell(120,12,'Reporte 1',0,1,'R',0);



$pdf->SetFont('Arial','',12);
for($i=1;$i<=80;$i++){
    $pdf->Cell(120,12,'Marco Antonio Sotomayor Lopez',0,1,'R',0);

}
$pdf->Output();

?>