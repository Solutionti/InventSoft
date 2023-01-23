<?php

class Pedidos_model extends CI_model {

    public function getPedidos() {
        $this->db->select("*");
        $this->db->from("pedidos");
        $result = $this->db->get();

        return $result;
    }

    public function getPedidoId($codigo){
        $this->db->select("p.*, c.nombre,c.apellido, c.direccion ");
        $this->db->from("pedidos p");
        $this->db->join("clientes c", "p.codigo_cliente = c.celular");
        $this->db->where("p.codigo_pedido", $codigo);
        $result = $this->db->get();

        return $result->row();
    }

    public function getPedidosDetalle($codigo) {
        $this->db->select("d.*, p.nombre as productonom, p.precio");
        $this->db->from("detalle_pedido d");
        $this->db->join("productos p", "d.codigo_producto = p.codigo");
        
        $this->db->where("codigo_pedido", $codigo);
        $result = $this->db->get();

        return $result;
    }

    public function actualizarDomicilioEstadoPedido($domicilio, $estado) {
        $datos = [
          "domicilio" => $domicilio,
          "estado" => $estado
        ];
        $this->db->update("pedidos", $datos);
    }

}