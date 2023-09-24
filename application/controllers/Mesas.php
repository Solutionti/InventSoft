<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mesas extends CI_Controller {

    public function __construct() {
		parent:: __construct();
		$this->load->model("Mesas_model");
	}

    public function getpedidoMesas(){
        $mesas = $this->Mesas_model->getpedidoMesas();

        echo json_encode($mesas->result());
    }

    public function agregarMesa() {
      $nro_mesa = $this->input->post("nro_mesa");
      $puestos = $this->input->post("puestos");
      $estado = $this->input->post("estado");

      $datos = [
        "nro_mesa" => $nro_mesa,
        "puestos" => $puestos,
        "estado" => $estado,
      ];
      $this->Mesas_model->agregarMesa($datos);
    }

    public function getMesasDetalleId(){
      $mesa = $this->input->post("mesa");
      $pedido_mesa = $this->Mesas_model->getMesasDetalleId($mesa);

      echo json_encode($pedido_mesa);

    }

    public function cerrarMesas(){
      $nro_mesa = $this->input->post("nro_mesa");
      $mesero = $this->input->post("mesero");
      $propina = $this->input->post("propina");
      $descuento = $this->input->post("descuento");
      $estado = $this->input->post("estado");
      $descripcion = $this->input->post("descripcion");
      $total = $this->input->post("total");

      $this->Mesas_model->cerrarMesa($nro_mesa, $detalle, $descripcion,$propina, $descuento, $total);
      $this->Mesas_model->detallePedidoCerrar($nro_mesa);
      $this->Mesas_model->cambiarEstadoMesa($nro_mesa);

    }

    public function getPedidosMesas($mesa){
      $pedido = $this->Mesas_model->getPedidosMesas($mesa);

      echo json_encode($pedido->result());
    }

    public function getnumeromesa($mesa){
      $nro_venta = $this->Mesas_model->getnumeromesa($mesa);

      echo json_encode($nro_venta);
    }

    public function guardarPedidoMesa(){
      $venta = $this->input->post("venta");
      $nro_mesa = $this->input->post("nro_mesa");
      $pedidos = $this->input->post("pedidos");

       $cantidad = $this->Mesas_model->countPedidosMesa();
      if($venta === ""){
        $datos = [
          "venta" => $cantidad->cantidades + 1,
          "nro_mesa" => $nro_mesa
        ];
        $this->Mesas_model->guardarPedidoMesa($datos);

        for($i=0; $i < sizeof($pedidos); $i++) {
          $datos2 = [
            "codigo" => $cantidad->cantidades + 1,
            "producto" => $pedidos[$i]["codigo"],
            "cantidad" => $pedidos[$i]["cantidad"]
          ];
          $this->Mesas_model->guardarDetallepedidoMesa($datos2);
        }
        $this->Mesas_model->cambiarEstadoMesaOcupada($nro_mesa);

      }
      else {
        $datos = [
          "venta" => $venta,
          "nro_mesa" => $nro_mesa
        ];
        for($i=0; $i < sizeof($pedidos); $i++) {
          $datos2 = [
            "codigo" => $venta,
            "producto" => $pedidos[$i]["codigo"],
            "cantidad" => $pedidos[$i]["cantidad"]
          ];
          $this->Mesas_model->guardarDetallepedidoMesa($datos2);
        }
      }
    }

    public function impresionCocinaTiquet($mesa, $codigo){
      $codigoact = substr ( $codigo, 3, 100);
      $imprimir = $this->Mesas_model->impresionCocinaTiquet($codigoact);
      $this->load->library("pdf");
      $pdfAct = new Pdf();
      $pdf=new FPDF();
      $pdf->addpage();
      // $pdf->Image('public/img/theme/logo.jpeg' , 20,5, 20 , 17,'jpeg');
      //$pdf->Image('public/img/theme/zonac.png' , 35 ,5, 15 , 15,'png');
      $pdf->Ln(2);
      $pdf->SetFont('Times','',7);
      $pdf->Cell(2,5,'', '', 0,'L', false );
      $pdf->Cell(1,5,'CAFETERIA BUEN VIAJE', '', 0,'L', false );
      $pdf->SetFont('Times','',6);
      $pdf->Ln(3);
      $pdf->Cell(5,5,'', '', 0,'L', false );
      $pdf->Cell(7,5,'TERMINAL LOCAL - 151', '', 0,'L', false );
      $pdf->Ln(2);
      $pdf->Cell(10,5,'_______________________________', '', 0,'L', false );
      $pdf->SetFont('Times','',5);
      $pdf->Ln(5);
      $pdf->Cell(9,5,'FECHA:', '', 0,'L', false );
      $pdf->Cell(18,5,'26-12-1993', '', 0,'L', false );
      $pdf->Ln(2);
      $pdf->SetFont('Times','',5);
      $pdf->Cell(8,5,'HORA:', '', 0,'L', false );
      $pdf->Cell(4,5,"  5:10 PM", '', 0,'L', false );
      $pdf->Ln(2);
      $pdf->SetFont('Times','',5);
      $pdf->Cell(9,5,'MESER@:', '', 0,'L', false );
      $pdf->Cell(4,5,$this->session->userdata("nombre")." ".$this->session->userdata("apellido"), '', 0,'L', false );
      $pdf->Ln(3);
      $pdf->SetFont('Times','',5);
      $pdf->Cell(9,5,'MESA:', '', 0,'L', false );
      $pdf->SetFont('Times','b',7);
      $pdf->Cell(4,5,'#'.$mesa, '', 0,'L', false );
      $pdf->Ln(4);
      $pdf->SetFont('Times','b',5);
      $pdf->Cell(30,5,utf8_decode('PRODUCTOS'), '', 0,'L', false );
      $pdf->Cell(4,5,"CANT", '', 0,'L', false );
      $pdf->SetFont('Times','',5);
      // ACA VA LOS PRODUCTOS
      foreach($imprimir->result() as $imprimirlo) {
      $pdf->Ln(3);
      $pdf->Cell(30,5,$imprimirlo->nombre, '', 0,'L', false );
      $pdf->Cell(5,5,$imprimirlo->cantidad, '', 0,'L', false );
      }
      //FIN DEL PRODUCTO
      $pdf->Ln(6);
      $pdf->Cell(1,5,"DESCRIPCION", '', 0,'L', false );
      $pdf->Ln(4);
      $pdf->MultiCell(40, 2,"yo solo quiero que cuando alguien se vea al espejo diga chimba por que es bacao cuando alguien dice uy parce pero vea que bacano ese man", '', 'L', false);
      $pdf->Ln(3);
      $pdf->SetFont('Times','b',5);
      $pdf->Cell(1,5,'', '', 0,'L', false );
      $pdf->Cell(25,5,' ELABORAMOS SU COMIDA CON AMOR ', '', 0,'L', false );
      $pdf->Ln(10);
      $pdf->Output();
    }
}