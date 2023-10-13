<?php

class Mesas_model extends CI_model {

    public function getpedidoMesas(){
        $this->db->select("*");
        $this->db->from("detalle_venta");
        $this->db->where("mesa", $mesa);
        $this->db->where("estado", "Ocupada");
        $result = $this->db->get();

        return $result;
    }

    public function agregarMesa($datos) {
        $datos = [
          "numero_mesa" => $datos["nro_mesa"],
          "puestos" => $datos["puestos"],
          "estado" => $datos["estado"]
        ];
        $this->db->insert("mesas", $datos); 
    }

    public function getmesas(){
      $this->db->select("*");
      $this->db->from("mesas");
      $this->db->where("estado", "OCUPADA");
      $this->db->order_by("numero_mesa", "ASC");
      $result = $this->db->get();
    
      return $result;
      
    }

    public function getMesasDetalleId($mesa){
      $this->db->select("*");
      $this->db->from("pedidos_mesa");
      $this->db->where("estado", "OCUPADA");
      $this->db->where("mesa", $mesa);
      $result = $this->db->get();

      return $result->row();
    }

    // 

    public function getPedidosMesas($mesa){
      $this->db->select("p.*, m.*, pr.nombre, pr.precio");
      $this->db->from("pedidos_mesa p");
      $this->db->join("detalle_mesa m ", "p.detalle_pedido = m.codigo_pedido_mesa");
      $this->db->join("Productos pr ", "m.codigo_producto = pr.codigo");
      $this->db->where("p.estado", "OCUPADA");
      $this->db->where("p.mesa", $mesa);
      $result = $this->db->get();
      
      return $result;
    }

    public function cerrarMesa($mesa, $detalle, $descripcion,$propina, $descuento, $total) {
      $datos = [
        "descripcion" => $descripcion,
        "propina" => $propina,
        "descuento" => $descuento,
        "total_pago" => $total,
        "tp_pago" => "EFECTIVO",
        "estado" => "CERRADA"
      ];
      $this->db->where("mesa", $mesa);
      // $this->db->where("detalle_pedido", "1");
      $this->db->update("pedidos_mesa", $datos);
    }

    public function detallePedidoCerrar($mesa){
      $datos = [
        "estado" => "CERRADO"
      ];
      $this->db->where("mesa", $mesa);
      $this->db->where("estado", "ACTIVA");
      $this->db->update("detalle_pedido", $datos);
    }

    public function cambiarEstadoMesa($mesa) {
      $datos = [
        "estado" => "DISPONIBLE"
      ];
      $this->db->where("numero_mesa", $mesa);
      $this->db->update("mesas", $datos);
    }

    public function getnumeromesa($mesa){
      $this->db->select("detalle_pedido");
      $this->db->from("pedidos_mesa");
      $this->db->where("estado", "OCUPADA");
      $this->db->where("mesa", $mesa);
      $result = $this->db->get();

      return $result->row();
    }

    public function countPedidosMesa() {
      $this->db->select("COUNT(*) as cantidades");
      $this->db->from("pedidos_mesa");
      $result = $this->db->get();
      return $result->row();
    }

    public function guardarPedidoMesa($datos){
      $datos = [
        "mesa" => $datos["nro_mesa"],
        "detalle_pedido" => $datos["venta"],
        "estado" => "OCUPADA",
        "mesero" => $this->session->userdata("nombre")." ".$this->session->userdata("apellido"),
      ];
      $this->db->insert("pedidos_mesa", $datos);
    }

    public function guardarDetallepedidoMesa($datos) {
      $datos = [
        "codigo_pedido_mesa" => $datos["codigo"],
        "codigo_producto" => $datos["producto"],
        "fecha" => date("Y-m-d"),
        "hora" => date("h: i A"),
        "cantidad" => $datos["cantidad"]
      ];

      $this->db->insert("detalle_mesa", $datos);
    }

    public function cambiarEstadoMesaOcupada($mesa) {
      $datos = [
        "estado" => "OCUPADA"
      ];
      $this->db->where("numero_mesa", $mesa);
      $this->db->update("mesas", $datos);
    }

    public function impresionCocinaTiquet($codigo) {
      $this->db->select("d.*, p.nombre");
      $this->db->from("detalle_mesa d");
      $this->db->join("productos p", "d.codigo_producto = p.codigo");
      $this->db->where("d.codigo_pedido_mesa", $codigo);
      $result = $this->db->get();

      return $result;
    }

    public function limpiarMesas() {
      $this->db->truncate('mesas');
    }

}