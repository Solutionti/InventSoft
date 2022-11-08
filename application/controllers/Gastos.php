<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gastos extends CI_Controller {

    public function __construct() {
        parent:: __construct();
        $this->load->model("Gastos_model");
    }
    
    public function crearGasto() {
      $categoria = $this->input->post("categoria");
      $fecha = $this->input->post("fecha");
      $precio = $this->input->post("precio");
      $descripcion = $this->input->post("descripcion");
      $proveedor_gasto = $this->input->post("proveedor_gasto");
      $fecha_limite = $this->input->post("fecha_limite");
      $porpagaract = $this->input->post("porpagaract");

      $data = [
        "categoria" => $categoria,
        "proveedor" => $proveedor_gasto,
        "fecha_limite" => $fecha_limite,
        "fecha" => $fecha,
        "precio" => $precio,
        "descripcion" => $descripcion,
        "porpagaract" => $porpagaract
      ];
      $this->Gastos_model->crearGasto($data);

    }
}