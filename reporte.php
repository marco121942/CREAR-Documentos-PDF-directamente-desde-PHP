<?php
require('fpdf/fpdf.php');
//$pdf =new FPDF('P','mm',array(90,180));
$pdf =new FPDF();//ORIENTACIÒN-UNIDAD-FORMATO USADO PARA ÑAS PÁGINAS


$pdf->AddPage('L','letter',0);//orientación y tipo de documento

//L o P
//Carta-A5-A4-personalizado
//oritentación debe ser multiplo de 90.


$pdf->SetFont('Arial','B',18);//tipo de letra-color-tamaño
//se debe invocar em método setFont antes del cell.

//familia de la fuente
//Estilo de fuente(B->bold,I->italic,U->underline),o dejarlo 2n vacio ''.
//tamaño de fuente.



$pdf->Cell(120,12,'Hola mundo',1,0,'C',1);//ancho-altura de la celda-el texto que se va mostrar-borde"0-1"-"1->continuar en la misma linea-"L-R->alinear"-color

//imprime celda,secuencia de caracteres

//ancho de la celda
//alto de la celda
//contenido
//borde->0-1  ->'L'-'R'->'LR'->'D''T'->'LRDT''B'
//Donde la posiciòn debe ir->1->inicio,0->ala derecha y 2->abajo
//alinear la informaciòn->'C->centrado','L->alñineación ala izquierda','R->alineación ala derecha'
//referencia al fondo en el área delre ctangulo->1


$pdf->Output('F','ejemplo.pdf');

//función envia la información a un destino dado.
//cerra documento-guardar


//enviar el reporte  al navegador->'I'
//'D'->descargar con el parametro name"ejemplo.pdf"

//'F'->va guardar el fichero en uno local con el nombre que nosotros asignemos

//'S'->va devolver el documento como una cadena

//tercer parametro
//false o true
?>