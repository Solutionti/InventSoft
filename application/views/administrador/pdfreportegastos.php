<?php

$totales = $total->result()[0];
$pdf=new FPDF();
$pdf->addpage();
$pdf->Image('public/img/theme/logo.png' , 10 ,9, 25 , 20,'png');
$pdf->SetFont('Times','',13);
$pdf->Ln(1);
$pdf->Cell(65,6,'', '', 0,'L', false );
$pdf->Cell(60,6,'Centro Medico Especializado', '', 0,'L', false );
$pdf->Ln(5);
$pdf->Cell(72,6,'', '', 0,'L', false );
$pdf->Cell(1,6,'Salud Madre & Mujer', '', 0,'L', false );
$pdf->Ln(5);
$pdf->Cell(60,6,'', '', 0,'L', false );
$pdf->Cell(7,6,'Av Salaverry 1402 - Urb. Bancarios', '', 0,'L', false );
$pdf->Ln(2);
$pdf->Cell(42,5,'', '', 0,'L', false );
$pdf->Cell(60,5,'_____________________________________________', '', 0,'L', false );
$pdf->SetFont('Times','b',13);
$pdf->Ln(10);
$pdf->Cell(70,6,'', '', 0,'L', false );
$pdf->Cell(60,6,'INFORME DE GASTOS', '', 0,'L', false );
$pdf->SetFont('Times','B',9);
$pdf->Ln(14);
$pdf->Cell(60,6,$totales->fecha, 1, 0,'C', false );
$pdf->Cell(134,6,'RESPONSABLE', 1, 0,'L', false );
$pdf->SetFont('Times','',9);
$pdf->Ln(6);
$pdf->Cell(60,6,'2022/01/23', 1, 0,'C', false );
$pdf->Cell(134,6,$this->session->userdata("nombre")." ".$this->session->userdata("apellido"), 1, 0,'L', false );
$pdf->SetFont('Arial', '', 11);
$pdf->Ln(9);
$pdf->Cell(1,6,'', '', 0,'L', false );
$pdf->Cell(70,6,'REPORTE DE GASTOS', '', 0,'L', false );
$pdf->SetFont('Times','B',9);
$pdf->Ln(8);
$pdf->Cell(42,6,'CODIGO', 1, 0,'L', false );
$pdf->Cell(18,6,'FECHA', 1, 0,'L', false );
$pdf->Cell(40,6,'NOMBRE', 1, 0,'L', false );
$pdf->Cell(74,6,'DESCRIPCION', 1, 0,'L', false );
$pdf->Cell(20,6,'VALOR', 1, 0,'L', false );
foreach($gasto->result() as $gastos) {
$pdf->SetFont('Times','',9);
$pdf->Ln(6);
$pdf->Cell(42,6,$gastos->codigo_gasto, 1, 0,'L', false );
$pdf->Cell(18,6,$gastos->fecha, 1, 0,'L', false );
$pdf->Cell(40,6,utf8_decode($gastos->categoria), 1, 0,'L', false );
$pdf->Cell(74,6,utf8_decode($gastos->descripcion), 1, 0,'L', false );
$pdf->Cell(20,6,$gastos->precio, 1, 0,'L', false );
$pdf->SetFont('Times','B',9);
}
$pdf->Ln(11);
$pdf->Cell(60,6,'', 0,'', false );
$pdf->Cell(94,6,'', 0,'', false );
$pdf->Cell(20,6,'TOTAL', 1, 0,'', false );
$pdf->Cell(20,6,$totales->total, 1, 0,'', false );
$pdf->SetFont('Times','b',9);
$pdf->Output();

?>
