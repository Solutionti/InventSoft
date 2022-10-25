<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventarios extends CI_Controller {

    public function __construct() {
		parent:: __construct();
		$this->load->model("Inventarios_model");

	}

    public function createProductos() {
        $categoria = $this->input->post("categoria");
        $nombre = $this->input->post("nombre");
        $codigo = $this->input->post("codigo");
        $codigo_barras = $this->input->post("codigo_barras");
        $medida = $this->input->post("medida");
        $cantidad = $this->input->post("cantidad");
        $precio = $this->input->post("precio");
        $precio_proveedor = $this->input->post("precio_proveedor");
        $moneda = $this->input->post("moneda");
        $descripcion = $this->input->post("descripcion");
        $pro_venta = $this->input->post("pro_venta");

        $data = [
          "categoria" => $categoria,
          "nombre" => $nombre,
          "codigo" => $codigo,
          "codigo_barras" => $codigo_barras,
          "medida" => $medida,
          "cantidad" => $cantidad,
          "precio" => $precio,
          "precio_proveedor" => $precio_proveedor,
          "moneda" => $moneda,
          "descripcion" => $descripcion,
          "pro_venta" => $pro_venta
        ];
        $existproduct = $this->Inventarios_model->getProductoVenta($codigo);

        if ($existproduct) {
          echo "error";
        }
        else {
          $this->Inventarios_model->createProductos($data);
        }
    }

    public function actualizarProductos() {
        $id_productos = $this->input->post("id_productos");
        $categoria = $this->input->post("categoria");
        $nombre = $this->input->post("nombre");
        $codigo = $this->input->post("codigo");
        $codigo_barras = $this->input->post("codigo_barras");
        $precio = $this->input->post("precio");
        $precio_proveedor = $this->input->post("precio_proveedor");
        $moneda = $this->input->post("moneda");
        $descripcion = $this->input->post("descripcion");
        $pro_venta = $this->input->post("pro_venta");

        $productos = [
          "categoria" => $categoria,
          "nombre" => $nombre,
          "codigo" => $codigo,
          "codigo_barras" => $codigo_barras,
          "precio" => $precio,
          "precio_proveedor" => $precio_proveedor,
          "moneda" => $moneda,
          "descripcion" => $descripcion,
          "pro_venta" => $pro_venta,
        ];
        $this->Inventarios_model->actualizarProductos($productos, $id_productos);
    }

    public function getStock($id) {
      $stock = $this->Inventarios_model->getStock($id);

      echo json_encode($stock);
    }

    public function crearEntrada() {
      $cantidad = $this->input->post("cantidad");
      $total = $this->input->post("total");
      $producto = $this->input->post("producto");
      $seccion = $this->input->post("seccion");
      $motivo = $this->input->post("motivo");
      $comentarios = $this->input->post("comentarios");

      $data = [
        "cantidad" => $cantidad,
        "producto" => $producto,
        "seccion" => $seccion,
        "motivo" => $motivo,
        "comentarios" => $comentarios,
        "total" => $total
      ];
      $this->Inventarios_model->crearEntrada($data);
      $this->Inventarios_model->actualizarStock($total, $producto);
    }

    public function crearSalida() {
        $cantidad = $this->input->post("cantidad");
        $total = $this->input->post("total");
        $producto = $this->input->post("producto");
        $seccion = $this->input->post("seccion");
        $motivo = $this->input->post("motivo");
        $comentarios = $this->input->post("comentarios");

        $data = [
            "cantidad" => $cantidad,
            "producto" => $producto,
            "seccion" => $seccion,
            "motivo" => $motivo,
            "comentarios" => $comentarios,
            "total" => $total
        ];
        $this->Inventarios_model->crearSalida($data);
        $this->Inventarios_model->actualizarStock($total, $producto);
    }

    public function getConsultaInventario($stock) {
      $result = $this->Inventarios_model->getConsultaInventario($stock);
      echo json_encode($result->result());
    }

    public function consultarkardex() {
      $producto_kardex = $this->input->post("producto_kardex");
      $fecha_inicial = $this->input->post("fecha_inicial");
      $fecha_final = $this->input->post("fecha_final");
      $result = $this->Inventarios_model->consultarkardex($producto_kardex, $fecha_inicial, $fecha_final);

      echo json_encode($result->result());
  }

  public function getProductoId($codigo) {
    $productos = $this->Inventarios_model->getProductoId($codigo);

    json_encode($productos);
  }
}