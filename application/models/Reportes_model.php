<?php

class Reportes_model extends CI_model {

    //REPORTES A GENERAR
    //TRANSACCIONES POR DIA
    public function transaccionesVentaDia($fecha_inicial, $fecha_final, $usuario) {
      
      $this->db->select("d.*, p.nombre, p.stock");
      $this->db->from("detalle_venta d");
      $this->db->join("productos p", "d.codigo_producto = p.codigo");
      $this->db->where("d.fecha >=", $fecha_inicial);
      $this->db->where("d.fecha <=", $fecha_final);
      $this->db->where("d.usuario", $usuario);
      $result = $this->db->get();

      return $result;

    }
    public function ReporteVentaCategoria($fecha_inicial, $fecha_final, $categoria) {
      $this->db->select("d.*,p.nombre,p.categoria,c.nombre as categoria");
      $this->db->from("detalle_venta d");
      $this->db->join("productos p", "d.codigo_producto = p.codigo");
      $this->db->join("categorias c", "p.categoria = c.codigo_categoria");
      $this->db->where("d.fecha >=", $fecha_inicial);
      $this->db->where("d.fecha <=", $fecha_final);
      $this->db->where("p.categoria", $categoria);
      $result = $this->db->get();

      return $result; 
      
    }
    //REPORTE DE MERMA
    public function ReporteMerma() {

    }
    //TRANSACCIONES POR PRODUCTO
    public function transaccionesProducto() {

    }
   
    //REPORTE DE GASTOS
    public function ReporteGastos() {
      $this->db->select("SUM(precio) as gastos");
      $this->db->from("gastos");
      $this->db->where("fecha", date("Y-m-d"));
      $result = $this->db->get();

      return $result;

    }


    //VENTA DIARIA DINERO FECHA
    public function ventaDiaria() {
      $this->db->select("SUM(total_venta) as venta");
      $this->db->from("ventas");
      $this->db->where("fecha", date("Y-m-d"));
      $result = $this->db->get();
        
      return $result;
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
