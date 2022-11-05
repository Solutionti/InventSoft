<?php

class Reportes_model extends CI_model {


    

    //REPORTES A GENERAR
    //TRANSACCIONES POR DIA
    public function transaccionesVentaDia() {

    }
    //REPORTE DE MERMA
    public function ReporteMerma() {

    }
    //TRANSACCIONES POR PRODUCTO
    public function transaccionesProducto() {

    }
    //TOP 10 MEJORES 10 VENDIDOS
    public function topProductoVendido() {

    }
    //REPORTE DE GASTOS
    public function ReporteGastos() {
      $this->db->select("SUM(precio) as gastos");
      $this->db->from("gastos");
      $this->db->where("fecha", date("Y-m-d"));
      $result = $this->db->get();

      return $result;

    }
    //REPORTE DE VENTA VS GANANCIA MES A MES
    public function gananciaVenta() {
      
    }

    //VENTA DIARIA DINERO FECHA
    public function ventaDiaria() {
      $this->db->select("SUM(total_venta) as venta");
      $this->db->from("ventas");
      $this->db->where("fecha", date("Y-m-d"));
      $result = $this->db->get();
        
      return $result;
    }

    //GASTOS - VENTA FECHA
    public function gananciaNeta() {

    }

    //CANTIDAD PRODUCTOS VENDIDOS POR FECHA
    public function ProductosVendidos() {
      $this->db->select("SUM(cantidad_productos) as productos");
      $this->db->from("ventas");
      $this->db->where("fecha", date("Y-m-d"));
      $result = $this->db->get();
        
      return $result;
    }
}
