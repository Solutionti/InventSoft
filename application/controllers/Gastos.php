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

      $data = [
        "categoria" => $categoria,
        "fecha" => $fecha,
        "precio" => $precio,
        "descripcion" => $descripcion
      ];
      $this->Gastos_model->crearGasto($data);

    }
}