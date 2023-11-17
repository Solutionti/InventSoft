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
      $pdf->Image('public/img/theme/logo.png' , 20 ,10, 25 , 10,'png');
      $pdf->Ln(2);
      $pdf->SetFont('Times','',9);
      $pdf->Cell(80,5,'', '', 0,'L', false );
      $pdf->Cell(1,5,'REPORTES DEL SISTEMA', '', 0,'L', false );
      $pdf->SetFont('Times','',9);
      $pdf->Ln(5);
      $pdf->Cell(85,5,'', '', 0,'L', false );
      $pdf->Cell(7,5,'Ventas e Inventarios', '', 0,'L', false );
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
      $pdf->Cell(63,5,'NOMBRE', 'TBR', 0,'L', false );
      $pdf->Cell(20,5,"VENTA", 'TBR', 0,'L', false );
      // $pdf->Cell(20,5,"FECHA", 'TBR', 0,'L', false );
      $pdf->Cell(20,5,"PRECIO", 'TBR', 0,'L', false );
      $pdf->Cell(18,5,"CANT", 'TBR', 0,'L', false );
      $pdf->Cell(18,5,"TOTAL", 'TBR', 0,'L', false );
      $pdf->Cell(15,5,"DEVO", 'TBR', 0,'L', false );
      foreach($transaccion->result() as $reportedia){
      $pdf->Ln(6);
      $pdf->SetFont('Times','',9);
      $pdf->Cell(25,5,$reportedia->codigo_producto, '', 0,'L', false );
      $pdf->Cell(63,5,utf8_decode($reportedia->nombre), '', 0,'L', false );
      $pdf->Cell(20,5,$reportedia->codigo_venta, '', 0,'L', false );
      // $pdf->Cell(20,5,$reportedia->fecha, '', 0,'L', false );
      $pdf->Cell(25,5,"$".$reportedia->precio, '', 0,'L', false );
      $pdf->Cell(18,5,$reportedia->cantidad - $reportedia->devolucion , '', 0,'L', false );
      $pdf->Cell(15,5,$reportedia->precio * $reportedia->cantidad, '', 0,'L', false );
      $pdf->Cell(15,5,$reportedia->devolucion, '', 0,'L', false );
      }
      $pdf->Ln(8);
      $pdf->SetFont('Times','b',9);
      $pdf->Cell(25,5,'', '', 0,'L', false );
      $pdf->Cell(60,5,'', '', 0,'L', false );
      $pdf->Cell(30,5,"", '', 0,'L', false );
      $pdf->Cell(25,5,"", '', 0,'L', false );
      $pdf->Cell(25,5,"TOTAL", 'LTBR', 0,'L', false );
      $pdf->Cell(20,5,"$".$sumatoriaact->totalventa, 'TBR', 0,'L', false );
      $pdf->Cell(18,5,"", '', 0,'L', false );
      $pdf->Ln(8);
      $pdf->SetFont('Times','b',9);
      $pdf->Cell(25,5,'', '', 0,'L', false );
      $pdf->Cell(60,5,'', '', 0,'L', false );
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
      $pdf->Image('public/img/theme/logo.png' , 20 ,10, 25 , 10,'png');
      $pdf->Ln(2);
      $pdf->SetFont('Times','',9);
      $pdf->Cell(80,5,'', '', 0,'L', false );
      $pdf->Cell(1,5,'REPORTES DEL SISTEMA', '', 0,'L', false );
      $pdf->SetFont('Times','',9);
      $pdf->Ln(5);
      $pdf->Cell(85,5,'', '', 0,'L', false );
      $pdf->Cell(7,5,'Ventas e Inventarios', '', 0,'L', false );
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
      $pdf->Cell(25,5,"VENTA", 'TBR', 0,'L', false );
      $pdf->Cell(25,5,"FECHA", 'TBR', 0,'L', false );
      $pdf->Cell(12,5,"CANT", 'TBR', 0,'L', false );
      $pdf->Cell(20,5,"PRECIO", 'TBR', 0,'L', false );
      $pdf->Cell(30,5,"CATEGORIA", 'TBR', 0,'L', false );
      foreach($transaccion->result() as $ventacategoria){
      $pdf->Ln(6);
      $pdf->SetFont('Times','',9);
      $pdf->Cell(25,5,$ventacategoria->codigo_producto, '', 0,'L', false );
      $pdf->Cell(50,5, utf8_decode($ventacategoria->nombre), '', 0,'L', false );
      $pdf->Cell(25,5,$ventacategoria->codigo_venta, '', 0,'L', false );
      $pdf->Cell(25,5,$ventacategoria->fecha, '', 0,'L', false );
      $pdf->Cell(12,5,$ventacategoria->cantidad, '', 0,'L', false );
      $pdf->Cell(25,5,"$".$ventacategoria->total_venta, '', 0,'L', false );
      $pdf->Cell(25,5,$ventacategoria->descuento, '', 0,'L', false );
      }
      $pdf->Ln(8);
      $pdf->SetFont('Times','b',9);
      $pdf->Cell(25,5,'', '', 0,'L', false );
      $pdf->Cell(50,5,'', '', 0,'L', false );
      $pdf->Cell(25,5,"", '', 0,'L', false );
      $pdf->Cell(12,5,"", '', 0,'L', false );
      $pdf->Cell(25,5,"TOTAL", 'LTBR', 0,'L', false );
      $pdf->Cell(18,5,"$".$sumatoriaact->total, 'TBR', 0,'L', false );
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
      $pdf->Image('public/img/theme/logo.png' , 20 ,10, 25 , 10,'png');
      $pdf->Ln(2);
      $pdf->SetFont('Times','',9);
      $pdf->Cell(80,5,'', '', 0,'L', false );
      $pdf->Cell(1,5,'REPORTES DEL SISTEMA', '', 0,'L', false );
      $pdf->SetFont('Times','',9);
      $pdf->Ln(5);
      $pdf->Cell(85,5,'', '', 0,'L', false );
      $pdf->Cell(7,5,'Ventas e Inventarios', '', 0,'L', false );
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
      $pdf->Image('public/img/theme/logo.png' , 20 ,10, 25 , 10,'png');
      $pdf->Ln(2);
      $pdf->SetFont('Times','',9);
      $pdf->Cell(80,5,'', '', 0,'L', false );
      $pdf->Cell(1,5,'REPORTES DEL SISTEMA', '', 0,'L', false );
      $pdf->SetFont('Times','',9);
      $pdf->Ln(5);
      $pdf->Cell(85,5,'', '', 0,'L', false );
      $pdf->Cell(7,5,'Ventas e Inventarios', '', 0,'L', false );
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
      $pdf->Cell(75,5,'NOMBRE', 'TBR', 0,'L', false );
      $pdf->Cell(30,5,"PROVEEDOR", 'TBR', 0,'L', false );
      $pdf->Cell(20,5,"VENTA", 'TBR', 0,'L', false );
      $pdf->Cell(17,5,"STOCK", 'TBR', 0,'L', false );
      // $pdf->Cell(35,5,"FECHA", 'TBR', 0,'L', false );
      $pdf->Cell(20,5,"MERMA", 'TBR', 0,'L', false );
      foreach($inventario->result() as $inventarios){
        $pdf->Ln(6);
        $pdf->SetFont('Times','',9);
        $pdf->Cell(25,5,$inventarios->codigo, '', 0,'L', false );
        $pdf->Cell(75,5, utf8_decode($inventarios->nombre), '', 0,'L', false );
        $pdf->Cell(30,5,$inventarios->costo_proveedor, '', 0,'L', false );
        $pdf->Cell(20,5,$inventarios->precio, '', 0,'L', false );
        $pdf->Cell(17,5,$inventarios->stock, '', 0,'L', false );
        // $pdf->Cell(35,5,$inventarios->fecha, '', 0,'L', false );
        $pdf->Cell(18,5,$inventarios->merma, '', 0,'L', false );
      }
      
      $pdf->Output();
    }

    public function getGastos($fecha_inicial,$fecha_final) {
      $gasto = $this->Reportes_model->getGastos($fecha_inicial,$fecha_final);
      $this->load->library("pdf");
      $pdfAct = new Pdf();
      $pdf=new FPDF();
      $pdf->addpage();
      // $pdf->Image('public/img/theme/logo.jpeg' , 20,5, 20 , 17,'jpeg');
      $pdf->Image('public/img/theme/logo.png' , 20 ,10, 25 , 10,'png');
      $pdf->Ln(2);
      $pdf->SetFont('Times','',9);
      $pdf->Cell(80,5,'', '', 0,'L', false );
      $pdf->Cell(1,5,'REPORTES DEL SISTEMA', '', 0,'L', false );
      $pdf->SetFont('Times','',9);
      $pdf->Ln(5);
      $pdf->Cell(85,5,'', '', 0,'L', false );
      $pdf->Cell(7,5,'Ventas e Inventarios', '', 0,'L', false );
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
      $pdf->Cell(18,5,'REPORTE DE GASTOS', '', 0,'L', false );
      $pdf->Ln(11);
      $pdf->SetFont('Times','b',9);
      $pdf->Cell(8,5,'#', 'LTBR', 0,'L', false );
      $pdf->Cell(30,5,'NOMBRE', 'TBR', 0,'L', false );
      $pdf->Cell(40,5,"PROVEEDOR", 'TBR', 0,'L', false );
      $pdf->Cell(20,5,"FECHA", 'TBR', 0,'L', false );
      $pdf->Cell(60,5,"DESCRIPCION", 'TBR', 0,'L', false );
      $pdf->Cell(20,5,"PRECIO", 'TBR', 0,'L', false );
      $pdf->Cell(17,5,"USUARIO", 'TBR', 0,'L', false );
      foreach($gasto->result() as $gastos){
        $pdf->Ln(6);
        $pdf->SetFont('Times','',9);
        $pdf->Cell(8,5,$gastos->codigo_gasto, '', 0,'L', false );
        $pdf->Cell(30,5,$gastos->categoria, '', 0,'L', false );
        $pdf->Cell(40,5,$gastos->proveedor, '', 0,'L', false );
        $pdf->Cell(20,5,$gastos->fecha, '', 0,'L', false );
        $pdf->Cell(60,5,$gastos->descripcion, '', 0,'', false );
        $pdf->Cell(20,5,$gastos->precio, '', 0,'L', false );
        $pdf->Cell(17,5,$gastos->usuario, '', 0,'L', false );
      }
      
      $pdf->Output();

    }

    public function getTodasCategoriasTotal($fechainicial, $fechafinal, $usuario) {
      $dulceria = $this->Reportes_model->countCategoriasABC($fechainicial, $fechafinal, 1, $usuario);
      $snack = $this->Reportes_model->countCategoriasABC($fechainicial, $fechafinal,2, $usuario);
      $bebidas = $this->Reportes_model->countCategoriasABC($fechainicial, $fechafinal,3, $usuario);
      $biscochos = $this->Reportes_model->countCategoriasABC($fechainicial, $fechafinal,4, $usuario);
      $artesanias = $this->Reportes_model->countCategoriasABC($fechainicial, $fechafinal,5, $usuario);
      $vitrina = $this->Reportes_model->countCategoriasABC($fechainicial, $fechafinal,6, $usuario);
      $caliente = $this->Reportes_model->countCategoriasABC($fechainicial, $fechafinal,7, $usuario);
      $drogueria = $this->Reportes_model->countCategoriasABC($fechainicial, $fechafinal,8, $usuario);
      $jugueteria = $this->Reportes_model->countCategoriasABC($fechainicial, $fechafinal,9, $usuario);
      $arequipes = $this->Reportes_model->countCategoriasABC($fechainicial, $fechafinal,10, $usuario);
      $otros = $this->Reportes_model->countCategoriasABC($fechainicial, $fechafinal,11, $usuario);
      $gastos =  $this->Reportes_model->countGastos($fechainicial, $fechafinal, $usuario);
      $venta = $this->Reportes_model->countVenta($fechainicial, $fechafinal, $usuario);
      $ganancia = $this->Reportes_model->countGanancia($fechainicial, $fechafinal, $usuario);
      
      // ganancia individual 
      $canchas1 = $this->Reportes_model->countGananciaIndividual($fechainicial, $fechafinal, $usuario,1);
      $bebidas1 = $this->Reportes_model->countGananciaIndividual($fechainicial, $fechafinal, $usuario,2);
      $snacks1 = $this->Reportes_model->countGananciaIndividual($fechainicial, $fechafinal, $usuario,3);
      $dulceria1 = $this->Reportes_model->countGananciaIndividual($fechainicial, $fechafinal, $usuario,4);
      $otros1 = $this->Reportes_model->countGananciaIndividual($fechainicial, $fechafinal, $usuario,5);

      $detallegasto = $this->Reportes_model->getGastosABC($fechainicial, $fechafinal, $usuario);
      $gasto = $this->Reportes_model->countGastosABC($fechainicial, $fechafinal, $usuario);

      $this->load->library("pdf");
      $pdfAct = new Pdf();
      $pdf=new FPDF();
      $pdf->addpage();
      // $pdf->Image('public/img/theme/logo.jpeg' , 20,5, 20 , 17,'jpeg');
      $pdf->Image('public/img/theme/logo.png' , 20 ,10, 25 , 10,'png');
      $pdf->Ln(2);
      $pdf->SetFont('Times','',9);
      $pdf->Cell(80,5,'', '', 0,'L', false );
      $pdf->Cell(1,5,'REPORTES DEL SISTEMA', '', 0,'L', false );
      $pdf->SetFont('Times','',9);
      $pdf->Ln(5);
      $pdf->Cell(85,5,'', '', 0,'L', false );
      $pdf->Cell(7,5,'Ventas e Inventarios', '', 0,'L', false );
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
      $pdf->Cell(18,5,'REPORTE ABC', '', 0,'L', false );
      $pdf->Ln(11);
      $pdf->SetFont('Times','b',9);
      $pdf->Cell(8,5,'#', 'LTBR', 0,'L', false );
      $pdf->Cell(30,5,'CATEGORIA', 'TBR', 0,'L', false );
      $pdf->Cell(40,5,"GANANCIA INDIVIDUAL", 'TBR', 0,'L', false );
      $pdf->Cell(30,5,"INGRESOS", 'TBR', 0,'L', false );
      $pdf->Cell(50,5,"GASTO TOTAL", 'TBR', 0,'L', false );
      $pdf->Ln(5);
      $pdf->SetFont('Times','b',9);
      $pdf->Cell(8,5,'1', 'LTBR', 0,'L', false );
      $pdf->Cell(30,5,'DULCERIA', 'TBR', 0,'L', false );
      $pdf->Cell(40,5,$fechainicial." - ".$fechafinal, 'TBR', 0,'L', false );
      $pdf->Cell(30,5,$dulceria->total, 'TBR', 0,'L', false );
      $pdf->Cell(50,5,'$'.$gastos->gastos, 'TBR', 0,'L', false );
      $pdf->Ln(5);
      $pdf->SetFont('Times','b',9);
      $pdf->Cell(8,5,'2', 'LTBR', 0,'L', false );
      $pdf->Cell(30,5,'SNACK', 'TBR', 0,'L', false );
      $pdf->Cell(40,5,$fechainicial." - ".$fechafinal, 'TBR', 0,'L', false );
      $pdf->Cell(30,5,$snack->total, 'TBR', 0,'L', false );
      $pdf->Cell(50,5,"VENTA TOTAL", 'TBR', 0,'L', false );

      $pdf->Ln(5);
      $pdf->SetFont('Times','b',9);
      $pdf->Cell(8,5,'3', 'LTBR', 0,'L', false );
      $pdf->Cell(30,5,'BEBIDAS', 'TBR', 0,'L', false );
      $pdf->Cell(40,5,$fechainicial." - ".$fechafinal, 'TBR', 0,'L', false );
      $pdf->Cell(30,5,$bebidas->total, 'TBR', 0,'L', false );
      $pdf->Cell(50,5,'$'.$venta->venta, 'TBR', 0,'L', false );
      $pdf->Ln(5);
      $pdf->SetFont('Times','b',9);
      $pdf->Cell(8,5,'4', 'LTBR', 0,'L', false );
      $pdf->Cell(30,5,'BISCOCHOS', 'TBR', 0,'L', false );
      $pdf->Cell(40,5,$fechainicial." - ".$fechafinal, 'TBR', 0,'L', false );
      $pdf->Cell(30,5,$biscochos->total, 'TBR', 0,'L', false );
      $pdf->Cell(50,5,"GANANCIA", 'TBR', 0,'L', false );
      $pdf->Ln(5);
      $pdf->SetFont('Times','b',9);
      $pdf->Cell(8,5,'5', 'LTBR', 0,'L', false );
      $pdf->Cell(30,5,'ARTESANIAS', 'TBR', 0,'L', false );
      $pdf->Cell(40,5,$fechainicial." - ".$fechafinal, 'TBR', 0,'L', false );
      $pdf->Cell(30,5,$artesanias->total, 'TBR', 0,'L', false );
      $pdf->Cell(50,5,"$".($venta->venta - $ganancia->ganancia) , 'TBR', 0,'L', false );
      $pdf->Ln(5);

      $pdf->SetFont('Times','b',9);
      $pdf->Cell(8,5,'6', 'LTBR', 0,'L', false );
      $pdf->Cell(30,5,'VITRINA', 'TBR', 0,'L', false );
      $pdf->Cell(40,5,$fechainicial." - ".$fechafinal, 'TBR', 0,'L', false );
      $pdf->Cell(30,5,$vitrina->total, 'TBR', 0,'L', false );
      $pdf->Cell(50,5,'', 'TBR', 0,'L', false );
      $pdf->Ln(5);
      $pdf->SetFont('Times','b',9);
      $pdf->Cell(8,5,'7', 'LTBR', 0,'L', false );
      $pdf->Cell(30,5,'CALIENTE', 'TBR', 0,'L', false );
      $pdf->Cell(40,5,$fechainicial." - ".$fechafinal, 'TBR', 0,'L', false );
      $pdf->Cell(30,5,$caliente->total, 'TBR', 0,'L', false );
      $pdf->Cell(50,5,'', 'TBR', 0,'L', false );
      $pdf->Ln(5);
      $pdf->SetFont('Times','b',9);
      $pdf->Cell(8,5,'8', 'LTBR', 0,'L', false );
      $pdf->Cell(30,5,'DROGUERIA', 'TBR', 0,'L', false );
      $pdf->Cell(40,5,$fechainicial." - ".$fechafinal, 'TBR', 0,'L', false );
      $pdf->Cell(30,5,$drogueria->total, 'TBR', 0,'L', false );
      $pdf->Ln(5);
      $pdf->SetFont('Times','b',9);
      $pdf->Cell(8,5,'9', 'LTBR', 0,'L', false );
      $pdf->Cell(30,5,'JUGUETERIA', 'TBR', 0,'L', false );
      $pdf->Cell(40,5,$fechainicial." - ".$fechafinal, 'TBR', 0,'L', false );
      $pdf->Cell(30,5,$jugueteria->total, 'TBR', 0,'L', false );
      $pdf->Ln(5);
      $pdf->SetFont('Times','b',9);
      $pdf->Cell(8,5,'10', 'LTBR', 0,'L', false );
      $pdf->Cell(30,5,'AREQUIPES', 'TBR', 0,'L', false );
      $pdf->Cell(40,5,$fechainicial." - ".$fechafinal, 'TBR', 0,'L', false );
      $pdf->Cell(30,5,$arequipes->total, 'TBR', 0,'L', false );
      $pdf->Ln(5);
      $pdf->SetFont('Times','b',9);
      $pdf->Cell(8,5,'11', 'LTBR', 0,'L', false );
      $pdf->Cell(30,5,'OTROS', 'TBR', 0,'L', false );
      $pdf->Cell(40,5,$fechainicial." - ".$fechafinal, 'TBR', 0,'L', false );
      $pdf->Cell(30,5,$otros->total, 'TBR', 0,'L', false );

      $pdf->Ln(9);
      $pdf->SetFont('Times','b',10);
      $pdf->Cell(18,5,'GASTOS', '', 0,'L', false );

      $pdf->Ln(7);
      $pdf->Cell(45,5,'CATEGORIA', 'TBRL', 0,'L', false );
      $pdf->Cell(35,5,'PROVEEDOR', 'TBR', 0,'L', false );
      $pdf->Cell(25,5,'FECHA', 'TBR', 0,'L', false );
      $pdf->Cell(22,5,'PRECIO', 'TBR', 0,'L', false );
      $pdf->Cell(35,5,'USUARIO', 'TBR', 0,'L', false );
      $pdf->Cell(27,5,'POR PAGAR?', 'TBR', 0,'L', false );

      foreach($detallegasto->result() as $detalle){
      $pdf->SetFont('Times','',10);
        $pdf->Ln(5);
        $pdf->Cell(45,5,$detalle->categoria, '', 0,'L', false );
        $pdf->Cell(35,5,$detalle->proveedor, '', 0,'L', false );
        $pdf->Cell(25,5,$detalle->fecha, 0,'', false );
        $pdf->Cell(22,5,"$".$detalle->precio, '', 0,'L', false );
        $pdf->Cell(35,5,$detalle->usuario, '', 0,'L', false );
        $pdf->Cell(27,5,$detalle->porpagar, '', 0,'L', false );
      }

      $pdf->Output();
    }
}