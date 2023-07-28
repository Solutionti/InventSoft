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
}