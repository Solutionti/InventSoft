<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ventas extends CI_Controller {

  public function __construct() {
	  parent:: __construct();
	  $this->load->model("Ventas_model");
	  $this->load->model("Inventarios_model");
	}

   public function getProductoVenta() {
      $codigo = $this->input->post("codigo_barras");
      $producto = $this->Inventarios_model->getProductoVenta($codigo);
      if($producto){
        echo json_encode($producto);
      }
      else {
        echo "error";
      }
    }

    public function crearVenta() {
      $consecutivo = $this->input->post("consecutivo");
      $documento = $this->input->post("documento");
      $sede = $this->input->post("sede");
      $tipo_pago = $this->input->post("tp_pago");
      $referencia = $this->input->post("referencia");
      $total_recibido = $this->input->post("recibio");
      $total_venta = $this->input->post("total");
      $cantidad_productos  = count($this->input->post("ventas"));
      $ventas = $this->input->post("ventas");
      
      $data = [
        "consecutivo" => $consecutivo,
        "documento" => $documento,
        "sede" => $sede,
        "tipo_pago" => $tipo_pago,
        "referencia" => $referencia,
        "total_recibido" => $total_recibido,
        "total_venta" => $total_venta,
        "cantidad_productos" => $cantidad_productos
      ];
      $codigoventa = $this->Ventas_model->crearVenta($data);
      
      for($i=0; $i < sizeof($ventas); $i++) {
        $data2 = [
          "codigo_venta" => $consecutivo,
          "venta" => $ventas[$i]
        ];
        $this->Ventas_model->CrearDetalleVenta($data2);
        $descuenta = $this->Ventas_model->getInventarioStock($ventas[$i]);
        $stockact = $descuenta->stock - 1;
        $this->Ventas_model->updateInventarioStock($ventas[$i], $stockact);
      }
      
      echo $codigoventa;
    }

    public function getProductoId($codigo) {

      $producto = $this->Inventarios_model->getProductoId($codigo);

      echo json_encode($producto);
    }

    public function pdfReciboVenta() {
      $this->load->library("pdf");
      $pdfAct = new Pdf();
      $pdf=new FPDF();
      $pdf->addpage();
      $pdf->Image('public/img/theme/logo.jpeg' , 20,5, 20 , 17,'jpeg');
      //$pdf->Image('public/img/theme/zonac.png' , 35 ,5, 15 , 15,'png');
      $pdf->Ln(14);
      $pdf->SetFont('Times','',8);
      $pdf->Cell(5,5,'', '', 0,'L', false );
      $pdf->Cell(1,5,'ENAMORA REGALOS', '', 0,'L', false );
      $pdf->Ln(5);
      $pdf->Cell(10,5,'', '', 0,'L', false );
      $pdf->Cell(7,5,'CRA 6 # 31 - 71', '', 0,'L', false );
      $pdf->Ln(2);
      $pdf->Cell(10,5,'______________________________', '', 0,'L', false );
      $pdf->SetFont('Times','',8);
      $pdf->Ln(5);
      $pdf->Cell(12,5,'FECHA:', '', 0,'L', false );
      $pdf->Cell(18,5,date("d-m-Y"), '', 0,'L', false );
      $pdf->Ln(5);
      $pdf->SetFont('Times','',8);
      $pdf->Cell(12,5,'HORA:', '', 0,'L', false );
      $pdf->Cell(4,5,date("h: i A"), '', 0,'L', false );
      $pdf->Ln(5);
      $pdf->SetFont('Times','',8);
      $pdf->Cell(18,5,'VENDEDOR:', '', 0,'L', false );
      $pdf->Cell(4,5,$this->session->userdata("nombre"), '', 0,'L', false );
      $pdf->Ln(7);
      $pdf->SetFont('Times','b',8);
      $pdf->Cell(35,5,utf8_decode('Producto'), '', 0,'L', false );
      $pdf->Cell(4,5,"Precio", '', 0,'L', false );
      $pdf->SetFont('Times','',9);
      // ACA VA LOS PRODUCTOS
      $pdf->Ln(5);
      $pdf->Cell(35,5,'Alcancia superman', '', 0,'L', false );
      $pdf->Cell(5,5,utf8_decode("$2500 "), '', 0,'L', false );
      //FIN DEL PRODUCTO
      $pdf->Ln(7);
      $pdf->SetFont('Times','b',9);
      $pdf->Cell(18,5,utf8_decode(''), '', 0,'L', false );
      $pdf->Cell(13,5,utf8_decode('TOTAL'), '', 0,'L', false );
      $pdf->Cell(4,5,"$520.000", '', 0,'L', false );
      $pdf->SetFont('Times','',8);
      $pdf->Ln(6);
      $pdf->Cell(20,5,'Recibido', '', 0,'L', false );
      $pdf->Cell(5,5,utf8_decode("$100000 "), '', 0,'L', false );
      $pdf->Ln(5);
      $pdf->Cell(20,5,'Devuelto', '', 0,'L', false );
      $pdf->Cell(5,5,utf8_decode("$100000 "), '', 0,'L', false );
      $pdf->SetFont('Times','',8);
      $pdf->Ln(8);
      $pdf->Cell(1,5,'', '', 0,'L', false );
      $pdf->Cell(25,5,' GRACIAS POR TU COMPRA ', '', 0,'L', false );
      $pdf->Output();
    }
}