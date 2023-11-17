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
      $id_caja = $this->input->post("id_caja");
      $descuento =  $this->input->post("descuento");
      $contador = 0;

      $validacion = $this->Ventas_model->getVentaRepetida($consecutivo);
      for($i=0; $i < sizeof($ventas); $i++) {
        $contador = $contador + $ventas[$i]["cantidad"];
      }

      if ( $validacion == 0) {
        $data = [
          "consecutivo" => $consecutivo,
          "documento" => $documento,
          "sede" => $sede,
          "tipo_pago" => $tipo_pago,
          "referencia" => $referencia,
          "total_recibido" => $total_recibido,
          "total_venta" => $total_venta,
          "cantidad_productos" => $contador,
          "id_caja" => $id_caja,
          "descuento" => $descuento
        ];
        $codigoventa = $this->Ventas_model->crearVenta($data);
        
        for($i=0; $i < sizeof($ventas); $i++) {
          $descuenta = $this->Ventas_model->getInventarioStock($ventas[$i]["codigo"]);

          if($ventas[$i]["codigo"] == "555555555" || $ventas[$i]["codigo"] == "999999999") {
            $stockact = $descuenta->stock + $ventas[$i]["cantidad"];
          }
          else {
            $stockact = $descuenta->stock - $ventas[$i]["cantidad"];
          }

          $data2 = [
            "codigo_venta" => $consecutivo,
            "venta" => $ventas[$i]["codigo"],
            "cantidad" => $ventas[$i]["cantidad"],
            "categoria" => $descuenta->categoria,
            "precio" => $descuenta->precio
          ];
          $this->Ventas_model->updateInventarioStock($ventas[$i]["codigo"], $stockact);
          $this->Ventas_model->CrearDetalleVenta($data2, $codigoventa);
        }
      }
      else {
        echo "error";
      }
      
    }

    public function getProductoId($codigo) {

      $producto = $this->Inventarios_model->getProductoId($codigo);

      echo json_encode($producto);
    }

    public function pdfReciboVenta($codigo) {
      $venta = $this->Ventas_model->getVentaPdf($codigo)->result()[0];
      $detalleventa = $this->Ventas_model->getDetalleVenta($codigo);

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
      $pdf->SetFont('Times','',6);
      $pdf->Ln(5);
      $pdf->Cell(9,5,'FECHA:', '', 0,'L', false );
      $pdf->Cell(18,5,$venta->fecha, '', 0,'L', false );
      $pdf->Ln(4);
      $pdf->SetFont('Times','',6);
      $pdf->Cell(8,5,'HORA:', '', 0,'L', false );
      $pdf->Cell(4,5,$venta->hora, '', 0,'L', false );
      $pdf->Ln(4);
      $pdf->SetFont('Times','',6);
      $pdf->Cell(14,5,'VENDEDOR:', '', 0,'L', false );
      $pdf->Cell(4,5,$this->session->userdata("nombre"), '', 0,'L', false );
      $pdf->Ln(7);
      $pdf->SetFont('Times','b',8);
      $pdf->Cell(20,5,utf8_decode('Productos'), '', 0,'L', false );
      $pdf->Cell(4,5,"Precio", '', 0,'L', false );
      $pdf->SetFont('Times','',7);
      // ACA VA LOS PRODUCTOS
      foreach($detalleventa->result() as $detventa) {
      $pdf->Ln(5);
      $pdf->Cell(20,5,$detventa->nombre, '', 0,'L', false );
      $pdf->Cell(5,5,"$".$detventa->precio, '', 0,'L', false );
      }
      //FIN DEL PRODUCTO
      $pdf->Ln(7);
      $pdf->SetFont('Times','b',8);
      $pdf->Cell(10,5,utf8_decode(''), '', 0,'L', false );
      $pdf->Cell(13,5,utf8_decode('TOTAL'), '', 0,'L', false );
      $pdf->Cell(4,5,'$'.$venta->total_venta, '', 0,'L', false );
      $pdf->SetFont('Times','',8);
      $pdf->Ln(6);
      $pdf->Cell(15,5,'Recibido', '', 0,'L', false );
      $pdf->Cell(5,5,'$ '.utf8_decode($venta->total_recibido), '', 0,'L', false );
      $pdf->Ln(8);
      $pdf->SetFont('Times','b',5);
      $pdf->Cell(1,5,'', '', 0,'L', false );
      $pdf->Cell(25,5,' GRACIAS POR TU COMPRA ', '', 0,'L', false );
      $pdf->Ln(10);
      $pdf->Output();
    }

    public function guardarAperturaCaja() {
      $fecha_apertura = $this->input->post("fecha_apertura");
      $movimiento_apertura  = $this->input->post("movimiento_apertura");
      $monto_apertura = $this->input->post("monto_apertura");
      $comentarios_apertura =  $this->input->post("comentarios_apertura");

      $datos = [
        "fecha_apertura" => $fecha_apertura,
        "movimiento_apertura" => $movimiento_apertura,
        "monto_apertura" => $monto_apertura,
        "comentarios_apertura" => $comentarios_apertura
      ];
      $this->Ventas_model->guardarAperturaCaja($datos);
    }

    public function cerrarCaja() {
      $efectivoreal = $this->input->post("efectivoreal");
      $balance = $this->input->post("balance");
      $diferencia = $this->input->post("diferencia");
      $id_caja = $this->input->post("id_caja");
      $datos = [
        "efectivoreal" => $efectivoreal,
        "balance" => $balance,
        "diferencia" => $diferencia
      ];
      $this->Ventas_model->cerrarCaja($datos, $id_caja);
    }

    public function getVentaDetalleDevolucion($codigo){
      $detalle_devolucion = $this->Ventas_model->getVentaDetalleDevolucion($codigo);
      
      echo json_encode($detalle_devolucion->result());
    }

    public function devolucionVenta(){
      $codigo_producto = $this->input->post("codigo");
      $totalproducto = $this->input->post("total");
      $venta = $this->input->post("venta");

      // consultas para traer los datos ventas
      $ventaAct = $this->Ventas_model->getVentaValor($venta)->total_venta;
      $newtotal = $ventaAct - $totalproducto;
      // consultar el stock del producto
      $producto = $this->Ventas_model->getInventarioStock($codigo_producto)->stock;
      $newinventario = $producto + 1;

      // funcionalidad
      $this->Ventas_model->DescontarValorVentaDevolucion($newtotal, $venta);
      $this->Ventas_model->agregarProductoStockDevolucion($newinventario, $codigo_producto);
      $this->Ventas_model->actualizarDetalleVenta($venta, $codigo_producto);
    }
}