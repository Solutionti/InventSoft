<?php

class Ventas_model extends CI_model {

    public function crearVenta($data) {
        $datos = [
          "codigo_consecutivo" => $data["consecutivo"],
          "documento" => $data["documento"],
          "sede" => $data["sede"],
          "fecha" => date("Y-m-d"),
          "hora" => date("h: i A"),
          "tipo_pago" => $data["tipo_pago"],
          "ref_pago" => $data["referencia"],
          "total_recibido" => $data["total_recibido"],
          "total_venta" => $data["total_venta"],
          "cantidad_productos" => $data["cantidad_productos"],
          "usuario" => $this->session->userdata("nombre"),
        ];
        $this->db->insert("ventas", $datos);
        $id = $this->db->insert_id();

        return $id;
    }

    public function CrearDetalleVenta($data) {
        $datos = [
         "codigo_venta" => $data["codigo_venta"],
         "codigo_producto" => $data["venta"],
         "fecha" => date("Y-m-d"),
         "hora" => date("h: i A"),
         "usuario" => $this->session->userdata("nombre")
        ];
        $this->db->insert("detalle_venta", $datos);
    }

    public function getBalanceSistema() {
      $this->db->select("SUM(total_venta) as venta");
      $this->db->from("ventas");
      $this->db->where("fecha", date("Y-m-d"));
      $resultado = $this->db->get();

      return $resultado;
    }

    public function getInventarioStock($codigo) {
      $this->db->select("stock");
      $this->db->from("productos");
      $this->db->where("codigo", $codigo);
      $resultado = $this->db->get();

      return $resultado->row();
    }

    public function updateInventarioStock($codigo, $stockact) {
      $datos = [
        "stock" => $stockact 
      ];
      $this->db->where("codigo", $codigo);
      $this->db->update("productos", $datos);
    }

}