<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reportes extends CI_Controller {
    
    public function __construct() {
        parent:: __construct();
        $this->load->model("Reportes_model");
    }

    public function ReporteDia($fecha_inicial, $fecha_final, $usuario) {

      $transaccion = $this->Reportes_model->transaccionesVentaDia($fecha_inicial, $fecha_final, $usuario);
      $sumatoria = $this->Reportes_model->sumatoriaVentaDia($fecha_inicial, $fecha_final, $usuario);
      $gastos = $this->Reportes_model->sumatoriaGastos($fecha_inicial, $fecha_final, $usuario);
      $sumatoriaact =  $sumatoria->result()[0];
      $gastoact =  $gastos->result()[0];
      $this->load->library("pdf");
      $pdfAct = new Pdf();
      $pdf=new FPDF();
      $pdf->addpage();
      // $pdf->Image('public/img/theme/logo.jpeg' , 20,5, 20 , 17,'jpeg');
      $pdf->Image('public/img/theme/logo.png' , 10 ,10, 15 , 15,'png');
      $pdf->Ln(2);
      $pdf->SetFont('Times','',9);
      $pdf->Cell(80,5,'', '', 0,'L', false );
      $pdf->Cell(1,5,'CAFETERIA BUEN VIAJE', '', 0,'L', false );
      $pdf->SetFont('Times','',8);
      $pdf->Ln(5);
      $pdf->Cell(83,5,'', '', 0,'L', false );
      $pdf->Cell(7,5,'TERMINAL LOCAL - 151', '', 0,'L', false );
      $pdf->Ln(2);
      $pdf->Cell(70,5,'', '', 0,'L', false );
      $pdf->Cell(10,5,'__________________________________________', '', 0,'L', false );
      $pdf->SetFont('Times','',9);
      $pdf->Ln(9);
      $pdf->Cell(34,5,'FECHA DEL REPORTE:', '', 0,'L', false );
      $pdf->Cell(18,5,$fecha_final, '', 0,'L', false );
      $pdf->Ln(5);
      $pdf->SetFont('Times','',8);
      $pdf->Cell(12,5,'HORA:', '', 0,'L', false );
      $pdf->Cell(4,5,date("H: i A"), '', 0,'L', false );
      $pdf->Ln(5);
      $pdf->SetFont('Times','',8);
      $pdf->Cell(18,5,'VENDEDOR:', '', 0,'L', false );
      $pdf->Cell(4,5,$this->session->userdata("nombre"), '', 0,'L', false );
      $pdf->Ln(11);
      $pdf->SetFont('Times','b',10);
      $pdf->Cell(18,5,'REPORTE DE VENTA DIARIA POR USUARIO', '', 0,'L', false );
      $pdf->Ln(11);
      $pdf->SetFont('Times','b',9);
      $pdf->Cell(25,5,'CODIGO', 'LTBR', 0,'L', false );
      $pdf->Cell(50,5,'NOMBRE', 'TBR', 0,'L', false );
      $pdf->Cell(30,5,"VENTA", 'TBR', 0,'L', false );
      $pdf->Cell(25,5,"FECHA", 'TBR', 0,'L', false );
      $pdf->Cell(25,5,"HORA", 'TBR', 0,'L', false );
      $pdf->Cell(20,5,"PRECIO", 'TBR', 0,'L', false );
      $pdf->Cell(18,5,"STOCK", 'TBR', 0,'L', false );
      foreach($transaccion->result() as $reportedia){
      $pdf->Ln(6);
      $pdf->SetFont('Times','',9);
      $pdf->Cell(25,5,$reportedia->codigo_producto, '', 0,'L', false );
      $pdf->Cell(50,5,$reportedia->nombre, '', 0,'L', false );
      $pdf->Cell(30,5,$reportedia->codigo_venta, '', 0,'L', false );
      $pdf->Cell(25,5,$reportedia->fecha, '', 0,'L', false );
      $pdf->Cell(25,5,$reportedia->hora, '', 0,'L', false );
      $pdf->Cell(25,5,"$".$reportedia->precio, '', 0,'L', false );
      $pdf->Cell(18,5,$reportedia->stock, '', 0,'L', false );
      }
      $pdf->Ln(8);
      $pdf->SetFont('Times','b',9);
      $pdf->Cell(25,5,'', '', 0,'L', false );
      $pdf->Cell(50,5,'', '', 0,'L', false );
      $pdf->Cell(30,5,"", '', 0,'L', false );
      $pdf->Cell(25,5,"", '', 0,'L', false );
      $pdf->Cell(25,5,"TOTA", 'LTBR', 0,'L', false );
      $pdf->Cell(20,5,"$".$sumatoriaact->totalventa, 'TBR', 0,'L', false );
      $pdf->Cell(18,5,"", '', 0,'L', false );
      $pdf->Ln(8);
      $pdf->SetFont('Times','b',9);
      $pdf->Cell(25,5,'', '', 0,'L', false );
      $pdf->Cell(50,5,'', '', 0,'L', false );
      $pdf->Cell(30,5,"", '', 0,'L', false );
      $pdf->Cell(25,5,"", '', 0,'L', false );
      $pdf->Cell(25,5,"GASTOS", 'LTBR', 0,'L', false );
      $pdf->Cell(20,5,"$".$gastoact->gasto, 'TBR', 0,'L', false );
      $pdf->Cell(22,5,"", '', 0,'L', false );
      $pdf->Output();
    }

    public function ReporteVentaCategoria($fecha_inicial, $fecha_final, $categoria) {

      $transaccion = $this->Reportes_model->ReporteVentaCategoria($fecha_inicial, $fecha_final, $categoria);
      $sumatoria = $this->Reportes_model->sumatoriaVentaCategoria($fecha_inicial, $fecha_final, $categoria);
      $sumatoriaact = $sumatoria->result()[0];
      $this->load->library("pdf");
      $pdfAct = new Pdf();
      $pdf=new FPDF();
      $pdf->addpage();
      // $pdf->Image('public/img/theme/logo.jpeg' , 20,5, 20 , 17,'jpeg');
      //$pdf->Image('public/img/theme/zonac.png' , 35 ,5, 15 , 15,'png');
      $pdf->Ln(2);
      $pdf->SetFont('Times','',9);
      $pdf->Cell(80,5,'', '', 0,'L', false );
      $pdf->Cell(1,5,'CAFETERIA BUEN VIAJE', '', 0,'L', false );
      $pdf->SetFont('Times','',8);
      $pdf->Ln(5);
      $pdf->Cell(83,5,'', '', 0,'L', false );
      $pdf->Cell(7,5,'TERMINAL LOCAL - 151', '', 0,'L', false );
      $pdf->Ln(2);
      $pdf->Cell(70,5,'', '', 0,'L', false );
      $pdf->Cell(10,5,'_______________________________________', '', 0,'L', false );
      $pdf->SetFont('Times','',9);
      $pdf->Ln(9);
      $pdf->Cell(34,5,'FECHA DEL REPORTE:', '', 0,'L', false );
      $pdf->Cell(18,5,$fecha_final, '', 0,'L', false );
      $pdf->Ln(5);
      $pdf->SetFont('Times','',8);
      $pdf->Cell(12,5,'HORA:', '', 0,'L', false );
      $pdf->Cell(4,5,date("H: i A"), '', 0,'L', false );
      $pdf->Ln(5);
      $pdf->SetFont('Times','',8);
      $pdf->Cell(18,5,'VENDEDOR:', '', 0,'L', false );
      $pdf->Cell(4,5,$this->session->userdata("nombre"). ' '. $this->session->userdata("apellido") , '', 0,'L', false );
      $pdf->Ln(11);
      $pdf->SetFont('Times','b',10);
      $pdf->Cell(18,5,'REPORTE DE VENTA POR CATEGORIA', '', 0,'L', false );
      $pdf->Ln(11);
      $pdf->SetFont('Times','b',9);
      $pdf->Cell(25,5,'CODIGO', 'LTBR', 0,'L', false );
      $pdf->Cell(50,5,'NOMBRE', 'TBR', 0,'L', false );
      $pdf->Cell(30,5,"VENTA", 'TBR', 0,'L', false );
      $pdf->Cell(25,5,"FECHA", 'TBR', 0,'L', false );
      $pdf->Cell(25,5,"HORA", 'TBR', 0,'L', false );
      $pdf->Cell(22,5,"CATEGORIA", 'TBR', 0,'L', false );
      $pdf->Cell(20,5,"PRECIO", 'TBR', 0,'L', false );
      foreach($transaccion->result() as $ventacategoria){
      $pdf->Ln(6);
      $pdf->SetFont('Times','',9);
      $pdf->Cell(25,5,$ventacategoria->codigo_producto, '', 0,'L', false );
      $pdf->Cell(50,5,$ventacategoria->nombre, '', 0,'L', false );
      $pdf->Cell(30,5,$ventacategoria->codigo_venta, '', 0,'L', false );
      $pdf->Cell(25,5,$ventacategoria->fecha, '', 0,'L', false );
      $pdf->Cell(25,5,$ventacategoria->hora, '', 0,'L', false );
      $pdf->Cell(25,5,"$".$ventacategoria->precio, '', 0,'L', false );
      $pdf->Cell(18,5,$ventacategoria->categoria, '', 0,'L', false );
      }
      $pdf->Ln(8);
      $pdf->SetFont('Times','b',9);
      $pdf->Cell(25,5,'', '', 0,'L', false );
      $pdf->Cell(50,5,'', '', 0,'L', false );
      $pdf->Cell(30,5,"", '', 0,'L', false );
      $pdf->Cell(25,5,"", '', 0,'L', false );
      $pdf->Cell(25,5,"TOTAL", 'LTBR', 0,'L', false );
      $pdf->Cell(20,5,"$".$sumatoriaact->total, 'TBR', 0,'L', false );
      $pdf->Cell(22,5,"", '', 0,'L', false );
      
      $pdf->Output();
    }

    public function reportekardex($fecha_inicial, $fecha_final) {

      $transaccion = $this->Reportes_model->reportekardex($fecha_inicial, $fecha_final);
      
      $this->load->library("pdf");
      $pdfAct = new Pdf();
      $pdf=new FPDF();
      $pdf->addpage();
      // $pdf->Image('public/img/theme/logo.jpeg' , 20,5, 20 , 17,'jpeg');
      //$pdf->Image('public/img/theme/zonac.png' , 35 ,5, 15 , 15,'png');
      $pdf->Ln(2);
      $pdf->SetFont('Times','',9);
      $pdf->Cell(80,5,'', '', 0,'L', false );
      $pdf->Cell(1,5,'CAFETERIA BUEN VIAJE', '', 0,'L', false );
      $pdf->SetFont('Times','',8);
      $pdf->Ln(5);
      $pdf->Cell(83,5,'', '', 0,'L', false );
      $pdf->Cell(7,5,'TERMINAL LOCAL - 151', '', 0,'L', false );
      $pdf->Ln(2);
      $pdf->Cell(70,5,'', '', 0,'L', false );
      $pdf->Cell(10,5,'_______________________________________', '', 0,'L', false );
      $pdf->SetFont('Times','',9);
      $pdf->Ln(9);
      $pdf->Cell(34,5,'FECHA DEL REPORTE:', '', 0,'L', false );
      $pdf->Cell(18,5,"", '', 0,'L', false );
      $pdf->Ln(5);
      $pdf->SetFont('Times','',8);
      $pdf->Cell(12,5,'HORA:', '', 0,'L', false );
      $pdf->Cell(4,5,date("H: i A"), '', 0,'L', false );
      $pdf->Ln(5);
      $pdf->SetFont('Times','',8);
      $pdf->Cell(18,5,'VENDEDOR:', '', 0,'L', false );
      $pdf->Cell(4,5,$this->session->userdata("nombre"). ' '. $this->session->userdata("apellido") , '', 0,'L', false );
      $pdf->Ln(11);
      $pdf->SetFont('Times','b',10);
      $pdf->Cell(18,5,'REPORTE DE KARDEX CONSOLIDADO', '', 0,'L', false );
      $pdf->Ln(11);
      $pdf->SetFont('Times','b',9);
      $pdf->Cell(25,5,'CODIGO', 'LTBR', 0,'L', false );
      $pdf->Cell(40,5,'NOMBRE', 'TBR', 0,'L', false );
      $pdf->Cell(30,5,"DOCUMENTO", 'TBR', 0,'L', false );
      $pdf->Cell(20,5,"ENTRADA", 'TBR', 0,'L', false );
      $pdf->Cell(17,5,"SALIDA", 'TBR', 0,'L', false );
      $pdf->Cell(35,5,"FECHA Y HORA", 'TBR', 0,'L', false );
      $pdf->Cell(20,5,"USUARIO", 'TBR', 0,'L', false );
      foreach($transaccion->result() as $kardex){
      $pdf->Ln(6);
      $pdf->SetFont('Times','',9);
      $pdf->Cell(25,5,$kardex->id_producto, '', 0,'L', false );
      $pdf->Cell(40,5,$kardex->nombre, '', 0,'L', false );
      if($kardex->tp_documento == "NE"){
        $pdf->Cell(30,5,"ENTRADA", '', 0,'L', false );
      }
      else {
        $pdf->Cell(30,5,"SALIDA", '', 0,'L', false );
      }
      $pdf->Cell(20,5,$kardex->entrada, '', 0,'L', false );
      $pdf->Cell(17,5,$kardex->salida, '', 0,'L', false );
      $pdf->Cell(35,5,$kardex->fecha." - ".$kardex->hora, '', 0,'L', false );
      $pdf->Cell(18,5,$kardex->usuario, '', 0,'L', false );
      }
      $pdf->Output();
    }

    public function gananciaGeneral() {
      $categoria = $this->input->post("categoria");
      $resultado = $this->Reportes_model->gananciaGeneral($categoria);

      echo json_encode($resultado);
    }

    public function getInventarioTotal($categoria) {
      $inventario = $this->Reportes_model->getInventarioTotal($categoria);
      $this->load->library("pdf");
      $pdfAct = new Pdf();
      $pdf=new FPDF();
      $pdf->addpage();
      // $pdf->Image('public/img/theme/logo.jpeg' , 20,5, 20 , 17,'jpeg');
      //$pdf->Image('public/img/theme/zonac.png' , 35 ,5, 15 , 15,'png');
      $pdf->Ln(2);
      $pdf->SetFont('Times','',9);
      $pdf->Cell(80,5,'', '', 0,'L', false );
      $pdf->Cell(1,5,'CAFETERIA BUEN VIAJE', '', 0,'L', false );
      $pdf->SetFont('Times','',8);
      $pdf->Ln(5);
      $pdf->Cell(83,5,'', '', 0,'L', false );
      $pdf->Cell(7,5,'TERMINAL LOCAL - 151', '', 0,'L', false );
      $pdf->Ln(2);
      $pdf->Cell(70,5,'', '', 0,'L', false );
      $pdf->Cell(10,5,'_______________________________________', '', 0,'L', false );
      $pdf->SetFont('Times','',9);
      $pdf->Ln(9);
      $pdf->Cell(34,5,'FECHA DEL REPORTE:', '', 0,'L', false );
      $pdf->Cell(18,5,date("d-m-Y"), '', 0,'L', false );
      $pdf->Ln(5);
      $pdf->SetFont('Times','',8);
      $pdf->Cell(12,5,'HORA:', '', 0,'L', false );
      $pdf->Cell(4,5,date("H: i A"), '', 0,'L', false );
      $pdf->Ln(5);
      $pdf->SetFont('Times','',8);
      $pdf->Cell(18,5,'VENDEDOR:', '', 0,'L', false );
      $pdf->Cell(4,5,$this->session->userdata("nombre"). ' '. $this->session->userdata("apellido") , '', 0,'L', false );
      $pdf->Ln(11);
      $pdf->SetFont('Times','b',10);
      $pdf->Cell(18,5,'REPORTE DE INVENTARIO', '', 0,'L', false );
      $pdf->Ln(11);
      $pdf->SetFont('Times','b',9);
      $pdf->Cell(25,5,'CODIGO', 'LTBR', 0,'L', false );
      $pdf->Cell(40,5,'NOMBRE', 'TBR', 0,'L', false );
      $pdf->Cell(30,5,"PROVEEDOR", 'TBR', 0,'L', false );
      $pdf->Cell(20,5,"VENTA", 'TBR', 0,'L', false );
      $pdf->Cell(17,5,"STOCK", 'TBR', 0,'L', false );
      $pdf->Cell(35,5,"FECHA", 'TBR', 0,'L', false );
      $pdf->Cell(20,5,"MERMA", 'TBR', 0,'L', false );
      foreach($inventario->result() as $inventarios){
        $pdf->Ln(6);
        $pdf->SetFont('Times','',9);
        $pdf->Cell(25,5,$inventarios->codigo, '', 0,'L', false );
        $pdf->Cell(40,5,$inventarios->nombre, '', 0,'L', false );
        $pdf->Cell(30,5,$inventarios->costo_proveedor, '', 0,'L', false );
        $pdf->Cell(20,5,$inventarios->precio, '', 0,'L', false );
        $pdf->Cell(17,5,$inventarios->stock, '', 0,'L', false );
        $pdf->Cell(35,5,$inventarios->fecha, '', 0,'L', false );
        $pdf->Cell(18,5,$inventarios->merma, '', 0,'L', false );
      }
      
      $pdf->Output();
    }
}