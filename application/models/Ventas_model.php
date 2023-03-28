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
          "id_caja" => $data["id_caja"]
        ];
        $this->db->insert("ventas", $datos);
        $id = $this->db->insert_id();

        return $id;
    }

    public function getVentaRepetida($venta) {
      $this->db->select("*");
      $this->db->from("ventas");
      $this->db->where("codigo_consecutivo", $venta);
      $result = $this->db->get();

      if($result->num_rows() > 0){
        return 1;
      }
      else {
        return 0;
      }
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

    public function cerrarCaja($data, $caja) {
      $datos = [
        "usuario_cierre" => $this->session->userdata("nombre"),
        "balance_sistema" => $data["balance"],
        "total_venta" => $data["efectivoreal"],
        "descuadre" => $data["diferencia"],
        "estado" => "CERRADA"
      ];
      $this->db->where("codigo_caja", $caja);
      $this->db->update("cajas", $datos);
    }

    public function getIdCaja() {
      $this->db->select("MAX(codigo_caja) as id_caja");
      $this->db->from("cajas");
      $this->db->where("estado", "ABIERTA");
      $result = $this->db->get();

      return $result;
    }

    public function getEstadoCaja() {
      $this->db->select("estado");
      $this->db->from("cajas");
      $this->db->order_by("codigo_caja", "desc");
      $result = $this->db->get();

      return $result;
    }

    public function getBalanceSistema() {
      $resultado = $this->getIdCaja();
      $resultados = $resultado->result()[0];
      $this->db->select("SUM(total_venta) as venta");
      $this->db->from("ventas");
      // $this->db->where("fecha", date("Y-m-d"));
      $this->db->where("usuario", $this->session->userdata("nombre"));
      $this->db->where("id_caja", $resultados->id_caja);
      $resultado = $this->db->get();

      return $resultado;
    }

    public function getVentaDetalleDevolucion($codigo){
      $fecha = date("Y-m-d");
      $this->db->select("d.codigo_producto,d.codigo_venta,d.fecha,d.hora, v.total_venta,v.codigo_venta, d.usuario");
      $this->db->from("detalle_venta d");
      $this->db->join("ventas v", "d.codigo_detalle = v.codigo_venta");
      $this->db->where("d.codigo_producto", $codigo);
      $this->db->where("v.fecha", $fecha);
      $result = $this->db->get();

      return $result;
    }

    public function getVentaValor($codigo) {
      $this->db->select("*");      
      $this->db->from("ventas");
      $this->db->where("codigo_venta", $codigo);
      $result = $this->db->get();
      
      return $result->row();
    }

    public function DescontarValorVentaDevolucion($total, $venta){
      $data = [
        "total_venta" => $total
      ];
      $this->db->where("codigo_venta", $venta);
      $this->db->update("ventas", $data);
    }

    public function agregarProductoStockDevolucion($stock, $codigo){
      $data = [
        "stock" => $stock
      ];
      $this->db->where("codigo", $codigo);
      $this->db->update("productos", $data);
    }

    public function actualizarDetalleVenta($venta, $codigo){
      $data = [
        "devolucion" => 1
      ];
      $this->db->where("codigo_venta", "VNT00".$venta);
      $this->db->where("codigo_producto", $codigo);
      $this->db->update("detalle_venta", $data);
    } 


}