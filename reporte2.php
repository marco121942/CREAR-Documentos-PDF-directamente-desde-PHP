<?php
require('fpdf/fpdf.php');


class PDF extends FPDF{
    function Header(){

        $this->Addlink();
        $this->Image('logo.png',10,10,55,0,'','https://github.com/marco121942');
        $this->SetFont('Arial','B',18);
        $this->Cell(80);
        $this->Cell(30,10,'Marco Antonio',0,1,'C');
        $this->SetFont('Arial','B',14);
        $this->Cell(80);
        $this->Cell(30,10,'Sotomayor Lopez',0,1,'C');
        $this->Ln(10);

    }

    function Footer(){
        $this->SetY(-18);
        $this->SetFont('Arial','I',12);
        $this->Addlink();
        $this->Cell(5,10,'https://github.com/marco121942',0,0,'L');
        $this->SetFont('Arial','I',10);
        $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().' de {nb}',0,0,'C');
    }
}
//$pdf =new PDF();
//$pdf->AddPage();
//$pdf->AliasNbPages();
//$pdf->SetFont('Arial','B',18);
//$pdf->Cell(120,12,'Hola mundo',0,1,'C',1);
//$pdf->SetFont('Arial','',12);
//for($i=1;$i<=80;$i++){
  //  $pdf->Cell(120,12,'Marco Antonio Sotomayor Lopez',0,1,'R',0);

//}
//$pdf->Output();


?>