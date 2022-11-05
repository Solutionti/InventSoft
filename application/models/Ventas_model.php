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


    public function getVentaPdf($venta) {
      $this->db->select("fecha, hora, total_venta, total_recibido");
      $this->db->from("ventas");
      $this->db->where("codigo_consecutivo", $venta);
      $resultado = $this->db->get();

      return $resultado;
    }

    public function getDetalleVenta($codigo) {
      $this->db->select("v.*, p.nombre, p.precio");
      $this->db->from("detalle_venta v");
      $this->db->join("productos p", "v.codigo_producto = p.codigo");
      $this->db->where("codigo_venta", $codigo);
      $resultado = $this->db->get();

      return $resultado;
    }

    //APERTURA DE LA CAJA
    public function guardarAperturaCaja($data) {
      $datos = [
        "fecha" => date("Y-m-d"),
        "hora" => date("H: i"),
        "monto" => $data["monto_apertura"],
        "comentarios" => $data["comentarios_apertura"],
        "usuario_abre" => $this->session->userdata("nombre"),
        "estado" => "ABIERTA" 
      ];
      $this->db->insert("cajas", $datos);
    }

    public function getEstadoCaja() {
      $this->db->select("estado");
      $this->db->from("cajas");
      $result = $this->db->get();

      return $result;
    }

}