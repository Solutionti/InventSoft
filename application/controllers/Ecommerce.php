<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ecommerce extends CI_Controller {

    public function __construct() {
        parent:: __construct();
        $this->load->model("Ecommerce_model");  
    }

    public function index(){
      $categorias = $this->Ecommerce_model->getCategorias();
      $productos = $this->Ecommerce_model->getProductos();
      
      $data = [
        "categoria" => $categorias,
        "producto" => $productos,
      ]; 
      $this->load->view("ecommerce/inicio", $data);
    }

    public function productosCategoria($categoria) {
      $categorias = $this->Ecommerce_model->getCategorias();
      $productos = $this->Ecommerce_model->getProductos();
      $productoscategorias = $this->Ecommerce_model->getProductosCategoria($categoria);
      $data = [
        "categoria" => $categorias,
        "producto" => $productos,
        "productosc" => $productoscategorias
      ]; 
      $this->load->view("ecommerce/detalle_categoria", $data);
    }


}