<?php

class Reportes_model extends CI_model {

    //REPORTES A GENERAR
    //TRANSACCIONES POR DIA
    public function transaccionesVentaDia($fecha_inicial, $fecha_final, $usuario) {
      
      $this->db->select("d.*, p.nombre, p.precio, p.stock, v.cantidad_productos, v.total_venta");
      $this->db->from("detalle_venta d");
      $this->db->join("productos p", "d.codigo_producto = p.codigo");
      $this->db->join("ventas v", "d.codigo_venta = v.codigo_consecutivo");
      $this->db->where("d.fecha >=", $fecha_inicial);
      $this->db->where("d.fecha <=", $fecha_final);
      if($usuario == "0"){
      }
      else {
        $this->db->where("d.usuario", $usuario);
      }
      $result = $this->db->get();

      return $result;
    }
    public function sumatoriaVentaDia($fecha_inicial, $fecha_final, $usuario) {
      $this->db->select("SUM(total_venta) as totalventa");
      $this->db->from("ventas");
      $this->db->where("fecha >=", $fecha_inicial);
      $this->db->where("fecha <=", $fecha_final);
      if($usuario == "0"){
      }
      else {
        $this->db->where("usuario", $usuario);
      }
      $result = $this->db->get();

      return $result;
    }
    public function ReporteVentaCategoria($fecha_inicial, $fecha_final, $categoria) {
      $this->db->select("d.*,p.nombre,p.precio,p.categoria,c.nombre as categoria,v.total_venta");
      $this->db->from("detalle_venta d");
      $this->db->join("ventas v", "d.codigo_venta = v.codigo_consecutivo");
      $this->db->join("productos p", "d.codigo_producto = p.codigo");
      $this->db->join("categorias c", "p.categoria = c.codigo_categoria");
      $this->db->where("d.fecha >=", $fecha_inicial);
      $this->db->where("d.fecha <=", $fecha_final);
      $this->db->where("p.categoria", $categoria);
      $result = $this->db->get();

      return $result; 
      
    }

    public function sumatoriaVentaCategoria($fecha_inicial, $fecha_final, $categoria) {
      $this->db->select("SUM(v.total_venta) as total");
      $this->db->from("detalle_venta d");
      $this->db->join("ventas v", "d.codigo_venta = v.codigo_consecutivo");
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

    public function totalInventario() {
      $this->db->select("SUM(precio * stock) as totalinventario");
      $this->db->from("productos");
      $result = $this->db->get();

      return $result;

    }

    public function totalProveedor() {
      $this->db->select("SUM(costo_proveedor * stock) as totalproveedor");
      $this->db->from("productos");
      $result = $this->db->get();

      return $result;

    }

    public function gananciaGeneral($categoria) {
      $this->db->select("SUM(p.precio * p.stock) as ganancia, SUM(p.costo_proveedor * p.stock) as proveedor, c.nombre");
      $this->db->from("productos p");
      $this->db->join("categorias c", "p.categoria = c.codigo_categoria");
      if($categoria) {
        $this->db->where("p.categoria", $categoria);
      }
      $result = $this->db->get();

      return $result->row();
      
    }

    public function reportekardex($fecha_inicial, $fecha_final) {
      $this->db->select("k.*, p.nombre");
      $this->db->from("kardex k");
      $this->db->join("productos p", "k.id_producto = p.codigo");
      $this->db->where("k.fecha >=", $fecha_inicial);
      $this->db->where("k.fecha <=", $fecha_final);
      $result = $this->db->get();

      return $result;
    }


    public function sumatoriaGastos($fecha_inicial, $fecha_final, $usuario) {
      $this->db->select("SUM(precio) as gasto");
      $this->db->from("gastos");
      $this->db->where("fecha >=", $fecha_inicial);
      $this->db->where("fecha <=", $fecha_final);
      if($usuario == "0"){
      }
      else {
        $this->db->where("usuario", $usuario);

      }
      $result = $this->db->get();

      return $result;
    }
    public function getInventarioTotal($categoria) {
      $this->db->select("*");
      $this->db->from("productos");
      if($categoria > 0){
        $this->db->where("categoria", $categoria);
      }
      $result = $this->db->get();

      return $result;
    }

    public function getGastos($fecha_inicial,$fecha_final) {
      $this->db->select("*");
      $this->db->from("gastos");
      $this->db->where("fecha >=", $fecha_inicial);
      $this->db->where("fecha <=", $fecha_final);
      $result = $this->db->get();

      return $result;
    }

    public function countDulceria($fecha_inicial, $fecha_final) {
      $this->db->select("SUM(p.precio) as totaldulce");
      $this->db->from("detalle_venta d");
      $this->db->join("productos p", "d.codigo_producto = p.codigo");
      $this->db->join("categorias c", "p.categoria = c.codigo_categoria");
      $this->db->where("d.fecha >=", $fecha_inicial);
      $this->db->where("d.fecha <=", $fecha_final);
      $this->db->where("p.categoria", 1);
      $result = $this->db->get();

      return $result->row(); 
    }

    public function countSnack($fecha_inicial, $fecha_final) {
      $this->db->select("SUM(p.precio) as totalsnack");
      $this->db->from("detalle_venta d");
      $this->db->join("productos p", "d.codigo_producto = p.codigo");
      $this->db->join("categorias c", "p.categoria = c.codigo_categoria");
      $this->db->where("d.fecha >=", $fecha_inicial);
      $this->db->where("d.fecha <=", $fecha_final);
      $this->db->where("p.categoria", 2);
      $result = $this->db->get();

      return $result->row(); 
    }

    public function countBebidas($fecha_inicial, $fecha_final) {
      $this->db->select("SUM(p.precio) as totalbebidas");
      $this->db->from("detalle_venta d");
      $this->db->join("productos p", "d.codigo_producto = p.codigo");
      $this->db->join("categorias c", "p.categoria = c.codigo_categoria");
      $this->db->where("d.fecha >=", $fecha_inicial);
      $this->db->where("d.fecha <=", $fecha_final);
      $this->db->where("p.categoria", 3);
      $result = $this->db->get();

      return $result->row(); 
    }

    public function countBiscochos($fecha_inicial, $fecha_final) {
      $this->db->select("SUM(p.precio) as totalbiscochos");
      $this->db->from("detalle_venta d");
      $this->db->join("productos p", "d.codigo_producto = p.codigo");
      $this->db->join("categorias c", "p.categoria = c.codigo_categoria");
      $this->db->where("d.fecha >=", $fecha_inicial);
      $this->db->where("d.fecha <=", $fecha_final);
      $this->db->where("p.categoria", 4);
      $result = $this->db->get();

      return $result->row(); 
    }

    public function countArtesanias($fecha_inicial, $fecha_final) {
      $this->db->select("SUM(p.precio) as totalartesania");
      $this->db->from("detalle_venta d");
      $this->db->join("productos p", "d.codigo_producto = p.codigo");
      $this->db->join("categorias c", "p.categoria = c.codigo_categoria");
      $this->db->where("d.fecha >=", $fecha_inicial);
      $this->db->where("d.fecha <=", $fecha_final);
      $this->db->where("p.categoria", 5);
      $result = $this->db->get();

      return $result->row(); 
    }

    public function countVitrina($fecha_inicial, $fecha_final) {
      $this->db->select("SUM(p.precio) as totalvitrina");
      $this->db->from("detalle_venta d");
      $this->db->join("productos p", "d.codigo_producto = p.codigo");
      $this->db->join("categorias c", "p.categoria = c.codigo_categoria");
      $this->db->where("d.fecha >=", $fecha_inicial);
      $this->db->where("d.fecha <=", $fecha_final);
      $this->db->where("p.categoria", 6);
      $result = $this->db->get();

      return $result->row(); 
    }

    public function countCaliente($fecha_inicial, $fecha_final) {
      $this->db->select("SUM(p.precio) as totalcaliente");
      $this->db->from("detalle_venta d");
      $this->db->join("productos p", "d.codigo_producto = p.codigo");
      $this->db->join("categorias c", "p.categoria = c.codigo_categoria");
      $this->db->where("d.fecha >=", $fecha_inicial);
      $this->db->where("d.fecha <=", $fecha_final);
      $this->db->where("p.categoria", 7);
      $result = $this->db->get();

      return $result->row(); 
    }

    public function countDrogueria($fecha_inicial, $fecha_final) {
      $this->db->select("SUM(p.precio) as totaldrogueria");
      $this->db->from("detalle_venta d");
      $this->db->join("productos p", "d.codigo_producto = p.codigo");
      $this->db->join("categorias c", "p.categoria = c.codigo_categoria");
      $this->db->where("d.fecha >=", $fecha_inicial);
      $this->db->where("d.fecha <=", $fecha_final);
      $this->db->where("p.categoria", 8);
      $result = $this->db->get();

      return $result->row(); 
    }

    public function countJugueteria($fecha_inicial, $fecha_final) {
      $this->db->select("SUM(p.precio) as totaljugueteria");
      $this->db->from("detalle_venta d");
      $this->db->join("productos p", "d.codigo_producto = p.codigo");
      $this->db->join("categorias c", "p.categoria = c.codigo_categoria");
      $this->db->where("d.fecha >=", $fecha_inicial);
      $this->db->where("d.fecha <=", $fecha_final);
      $this->db->where("p.categoria", 9);
      $result = $this->db->get();

      return $result->row(); 
    }

    public function countArequipes($fecha_inicial, $fecha_final) {
      $this->db->select("SUM(p.precio) as totalarequipes");
      $this->db->from("detalle_venta d");
      $this->db->join("productos p", "d.codigo_producto = p.codigo");
      $this->db->join("categorias c", "p.categoria = c.codigo_categoria");
      $this->db->where("d.fecha >=", $fecha_inicial);
      $this->db->where("d.fecha <=", $fecha_final);
      $this->db->where("p.categoria", 10);
      $result = $this->db->get();

      return $result->row(); 
    }

    public function countOtros($fecha_inicial, $fecha_final) {
      $this->db->select("SUM(p.precio) as totalotros");
      $this->db->from("detalle_venta d");
      $this->db->join("productos p", "d.codigo_producto = p.codigo");
      $this->db->join("categorias c", "p.categoria = c.codigo_categoria");
      $this->db->where("d.fecha >=", $fecha_inicial);
      $this->db->where("d.fecha <=", $fecha_final);
      $this->db->where("p.categoria", 11);
      $result = $this->db->get();

      return $result->row(); 
    }

    public function countGastos($fecha_inicial, $fecha_final) {
      $this->db->select("SUM(precio) as gastos");
      $this->db->from("gastos");
      $this->db->where("fecha >=", $fecha_inicial);
      $this->db->where("fecha <=", $fecha_final);
      $result = $this->db->get();

      return $result->row(); 
    }

    public function countVenta($fecha_inicial, $fecha_final) {
      $this->db->select("SUM(total_venta) as venta");
      $this->db->from("ventas");
      $this->db->where("fecha >=", $fecha_inicial);
      $this->db->where("fecha <=", $fecha_final);
      $result = $this->db->get();

      return $result->row(); 
    }

    public function countGanancia($fecha_inicial, $fecha_final) {
      $this->db->select("SUM(p.costo_proveedor) as ganancia");
      $this->db->from("productos p");
      $this->db->join("detalle_venta v", "v.codigo_producto = p.codigo");
      $this->db->where("v.fecha >=", $fecha_inicial);
      $this->db->where("v.fecha <=", $fecha_final);
      $result = $this->db->get();

      return $result->row(); 
    }

    public function getGastosABC($fechainicial, $fechafinal) {
      $this->db->select("*");
      $this->db->from("gastos");
      $this->db->where("fecha >=", $fechainicial);
      $this->db->where("fecha <=", $fechafinal);
      $result = $this->db->get();

      return $result;
    }

    public function countGastosABC($fechainicial, $fechafinal){
      $this->db->select("SUM(precio) as gasto");
      $this->db->from("gastos");
      $this->db->where("fecha >=", $fechainicial);
      $this->db->where("fecha <=", $fechafinal);
      $result = $this->db->get();
      return $result->row(); 
    }
}
