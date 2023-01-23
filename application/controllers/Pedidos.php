<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pedidos extends CI_Controller {

	public function __construct() {
		parent:: __construct();
		$this->load->model("Pedidos_model");

	}

	public function getPedidoId($codigo){
		$pedidos = $this->Pedidos_model->getPedidoId($codigo);

		echo json_encode($pedidos);
	}

	public function getPedidosDetalle($codigo){
		$pedidos = $this->Pedidos_model->getPedidosDetalle($codigo);
		
		echo json_encode($pedidos->result());
	}

	public function actualizarDomicilioEstadoPedido(){
		$domicilio = $this->input->post("domicilio");
		$estado = $this->input->post("estado");
		$this->Pedidos_model->actualizarDomicilioEstadoPedido($domicilio, $estado);
	}

	public function pdfpedido($pedido, $celular) {
		$pedido = $this->Pedidos_model->getPedidoId($pedido);
		$detallepedido = $this->Pedidos_model->getPedidosDetalle($pedido->consecutivo);
		$this->load->library("pdf");
		$pdfAct = new Pdf();
		$pdf=new FPDF();
		$pdf->addpage();
		$pdf->Image('public/img/theme/logo.png' , 12,7, 17 , 15,'png');
		$pdf->Ln(2);
		$pdf->SetFont('Times','',12);
		$pdf->Cell(75,5,'', '', 0,'L', false );
		$pdf->Cell(1,5,'PAPAS LOCAS', '', 0,'L', false );
		$pdf->SetFont('Times','',10);
		$pdf->Ln(5);
		$pdf->Cell(69,5,'', '', 0,'L', false );
		$pdf->Cell(7,5,'Sede principal Barrio ambala', '', 0,'L', false );
		$pdf->Ln(2);
		$pdf->Cell(70,5,'', '', 0,'L', false );
		// $pdf->Cell(10,5,'_______________________________', '', 0,'L', false );
		$pdf->Ln(11);
		$pdf->SetFont('Times','b',12);
		$pdf->Cell(18,5,'PEDIDO NUMERO: '.$pedido->consecutivo, '', 0,'L', false );

		$pdf->SetFont('Times','',11);
		$pdf->Ln(9);
		$pdf->Cell(25,5,'Orden numero:', '', 0,'L', false );
		$pdf->Cell(70,5,$pedido->consecutivo, '', 0,'L', false );
		$pdf->Cell(32,5,'Nombre y apellido:', '', 0,'L', false );
		$pdf->Cell(18,5,$pedido->nombre.' '.$pedido->apellido, '', 0,'L', false );
		$pdf->Ln(5);
		$pdf->SetFont('Times','',11);
		$pdf->Cell(30,5,'Fecha del pedido:', '', 0,'L', false );
		$pdf->Cell(65,5,$pedido->fecha, '', 0,'L', false );
		$pdf->Cell(18,5,'Direccion:', '', 0,'L', false );
		$pdf->Cell(4,5,$pedido->direccion, '', 0,'L', false );
		$pdf->Ln(5);
		$pdf->SetFont('Times','',11);
		$pdf->Cell(26,5,'Forma de pago:', '', 0,'L', false );
		$pdf->Cell(4,5,$pedido->tppago, '', 0,'L', false );

		$pdf->Ln(11);
		$pdf->SetFont('Times','b',9);
		$pdf->Cell(110,5,'PRODUCTO', 'LTBR', 0,'L', false );
		$pdf->Cell(40,5,'CANTIDAD', 'TBR', 0,'L', false );
		$pdf->Cell(40,5,"PRECIO", 'TBR', 0,'L', false );
		foreach($detallepedido->result() as $detalle){
		  $pdf->Ln(5);
		  $pdf->SetFont('Times','',9);
		  $pdf->Cell(110,5,$detalle->productonom, 'LTBR', 0,'L', false );
		  $pdf->Cell(40,5,$detalle->cantidad, 'LTBR', 0,'LTBR', false );
		  $pdf->Cell(40,5,'$'.$detalle->precio, 'LTBR', 0,'L', false );
		}
		$pdf->Ln(5);
		$pdf->SetFont('Times','',9);
		$pdf->Cell(110,5,'', '', 0,'L', false );
		$pdf->Cell(40,5,'SUBTOTAL', 'LTBR', 0,'L', false );
		$pdf->Cell(40,5,"$".$pedido->total, 'TBR', 0,'L', false );
		$pdf->Ln(5);
		$pdf->SetFont('Times','',9);
		$pdf->Cell(110,5,'', '', 0,'L', false );
		$pdf->Cell(40,5,'ENVIO', 'LTBR', 0,'L', false );
		$pdf->Cell(40,5,"$".$pedido->domicilio, 'TBR', 0,'L', false );
		$pdf->Ln(5);
		$totalizar = $pedido->domicilio + $pedido->total;
		$pdf->SetFont('Times','b',10);
		$pdf->Cell(110,5,'', '', 0,'L', false );
		$pdf->Cell(40,5,'TOTAL', 'LTBR', 0,'L', false );
		$pdf->Cell(40,5,"$".$totalizar, 'TBR', 0,'L', false );
		$pdf->SetFont('Times','',10);
		$pdf->Ln(8);
		$pdf->Cell(40,5,'Notas para el cliente', '', 0,'L', false );
		$pdf->SetFont('Times','',11);
		$pdf->Ln(5);
        $pdf->MultiCell(190, 5,"Hemos aprobado tu orden de pedido No $pedido->consecutivo para hacer seguimiento de tu pedido por favor ingresar a la pagina pricipal. en la opcion rastrear pedido y ingresa tu numero de celular. si tienes alguna duda o inquietud haznola saber.", '', 'L', false);
		$pdf->Output();
	  }

	  public function pdfpedidosucursal($pedido, $celular){
		$pedido = $this->Pedidos_model->getPedidoId($pedido);
		$detallepedido = $this->Pedidos_model->getPedidosDetalle($pedido->consecutivo);
		$this->load->library("pdf");
		$pdfAct = new Pdf();
		$pdf=new FPDF();
		$pdf->addpage();
		$pdf->Image('public/img/theme/logo.png' , 12,7, 17 , 15,'png');
		$pdf->Ln(2);
		$pdf->SetFont('Times','',12);
		$pdf->Cell(75,5,'', '', 0,'L', false );
		$pdf->Cell(1,5,'PAPAS LOCAS', '', 0,'L', false );
		$pdf->SetFont('Times','',10);
		$pdf->Ln(5);
		$pdf->Cell(69,5,'', '', 0,'L', false );
		$pdf->Cell(7,5,'Sede principal Barrio ambala', '', 0,'L', false );
		$pdf->Ln(2);
		$pdf->Cell(70,5,'', '', 0,'L', false );
		// $pdf->Cell(10,5,'_______________________________', '', 0,'L', false );
		$pdf->Ln(11);
		$pdf->SetFont('Times','b',12);
		$pdf->Cell(18,5,'PEDIDO NUMERO: '.$pedido->consecutivo, '', 0,'L', false );

		$pdf->SetFont('Times','',11);
		$pdf->Ln(9);
		$pdf->Cell(25,5,'Orden numero:', '', 0,'L', false );
		$pdf->Cell(70,5,$pedido->consecutivo, '', 0,'L', false );
		$pdf->Cell(32,5,'Nombre y apellido:', '', 0,'L', false );
		$pdf->Cell(18,5,$pedido->nombre.' '.$pedido->apellido, '', 0,'L', false );
		$pdf->Ln(5);
		$pdf->SetFont('Times','',11);
		$pdf->Cell(30,5,'Fecha del pedido:', '', 0,'L', false );
		$pdf->Cell(65,5,$pedido->fecha, '', 0,'L', false );
		$pdf->Cell(18,5,'Direccion:', '', 0,'L', false );
		$pdf->Cell(4,5,$pedido->direccion, '', 0,'L', false );
		$pdf->Ln(5);
		$pdf->SetFont('Times','',11);
		$pdf->Cell(26,5,'Forma de pago:', '', 0,'L', false );
		$pdf->Cell(4,5,$pedido->tppago, '', 0,'L', false );

		$pdf->Ln(11);
		$pdf->SetFont('Times','b',9);
		$pdf->Cell(110,5,'PRODUCTO', 'LTBR', 0,'L', false );
		$pdf->Cell(40,5,'CANTIDAD', 'TBR', 0,'L', false );
		$pdf->Cell(40,5,"PRECIO", 'TBR', 0,'L', false );
		foreach($detallepedido->result() as $detalle){
		  $pdf->Ln(5);
		  $pdf->SetFont('Times','',9);
		  $pdf->Cell(110,5,$detalle->productonom, 'LTBR', 0,'L', false );
		  $pdf->Cell(40,5,$detalle->cantidad, 'LTBR', 0,'LTBR', false );
		  $pdf->Cell(40,5,'$'.$detalle->precio, 'LTBR', 0,'L', false );
		}
		$pdf->Ln(5);
		$pdf->SetFont('Times','',9);
		$pdf->Cell(110,5,'', '', 0,'L', false );
		$pdf->Cell(40,5,'SUBTOTAL', 'LTBR', 0,'L', false );
		$pdf->Cell(40,5,"$".$pedido->total, 'TBR', 0,'L', false );
		$pdf->Ln(5);
		$pdf->SetFont('Times','',9);
		$pdf->Cell(110,5,'', '', 0,'L', false );
		$pdf->Cell(40,5,'ENVIO', 'LTBR', 0,'L', false );
		$pdf->Cell(40,5,"$".$pedido->domicilio, 'TBR', 0,'L', false );
		$pdf->Ln(5);
		$totalizar = $pedido->domicilio + $pedido->total;
		$pdf->SetFont('Times','b',10);
		$pdf->Cell(110,5,'', '', 0,'L', false );
		$pdf->Cell(40,5,'TOTAL', 'LTBR', 0,'L', false );
		$pdf->Cell(40,5,"$".$totalizar, 'TBR', 0,'L', false );
		$pdf->SetFont('Times','',10);
		$pdf->Ln(8);
		$pdf->Cell(40,5,'Notas para la sucursal', '', 0,'L', false );
		$pdf->SetFont('Times','',11);
		$pdf->Ln(5);
        $pdf->MultiCell(190, 5,$pedido->comentario, '', 'L', false);
		$pdf->Output();
	  }
}

?>