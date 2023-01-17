<?php

class Ecommerce_model extends CI_model {

    public function getCategorias(){
      $this->db->select("*");
      $this->db->from("categorias");
      $result = $this->db->get();

      return $result;
    }

    public function getProductos() {
      $this->db->select("p.*, c.nombre as categorias");
      $this->db->from("productos p");
      $this->db->join("categorias c", "p.categoria = c.codigo_categoria");

      $result = $this->db->get();

      return $result;
    }

    public function getProductosCategoria($categoria) {
      $this->db->select("p.*, c.nombre as categorias");
      $this->db->from("productos p");
      $this->db->join("categorias c", "p.categoria = c.codigo_categoria");
      $this->db->where("p.categoria", $categoria);
      $result = $this->db->get();

      return $result;
    }

    public function getProductoCodigo($codigo) {
      $this->db->select("p.*, c.nombre as categorias");
      $this->db->from("productos p");
      $this->db->join("categorias c", "p.categoria = c.codigo_categoria");
      $this->db->where("codigo_producto", $codigo);

      $result = $this->db->get();

      return $result->row();
    }

    public function agregarPedido($data) {
      $datos = [
        "consecutivo" => "PED".$data["consecutivo"],
        "documento" => "FACTURA",
        "sede" => $data["sede"],
        "tppago" => $data["pago"],
        "total" => $data["total"],
        "fecha" => date("Y-m-d"),
        "hora" => date("h: i A"),
        "codigo_cliente" => $data["celular"],
        "comentario" => $data["sugerencia"],
        "estado" => "PEDIDO"
      ];
      $this->db->insert("pedidos", $datos);
    }

    public function agregarDetallePedido($data){
      $datos = [
        "codigo_pedido" => "PED".$data["consecutivo"],
        "codigo_producto" => $data["productos"],
        "fecha" => date("Y-m-d"),
        "hora" => date("h: i A"),
        "cantidad" => $data["cantidad"]
      ];
      $this->db->insert("detalle_pedido", $datos);
    }

    public function ultimoConsecutivo() {
      $this->db->select("MAX(codigo_pedido) as consecutivo");
      $this->db->from("pedidos");
      $result = $this->db->get();

      return $result->row();
    }
}
?>