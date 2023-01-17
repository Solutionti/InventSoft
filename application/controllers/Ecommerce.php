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


    public function getProductoCodigo($codigo){
      $producto = $this->Ecommerce_model->getProductoCodigo($codigo);

      echo json_encode($producto);
    }

    public function agregarPedido(){
      $productos = $this->input->post("productos");
      $nombres = $this->input->post("nombres");
      $apellidos = $this->input->post("apellidos");
      $celular = $this->input->post("celular");
      $direccion = $this->input->post("direccion");
      $departamento = $this->input->post("departamento");
      $municipio = $this->input->post("municipio");
      $sede = $this->input->post("sede");
      $sugerencia = $this->input->post("sugerencia");
      $pago = $this->input->post("pago");
      $total = $this->input->post("total");
      $consecutivo = $this->Ecommerce_model->ultimoConsecutivo()->consecutivo + 1;

      $datos = [
        "nombres" => $nombres,
        "apellidos" => $apellidos,
        "celular" => $celular,
        "direccion" => $direccion,
        "departamento" => $departamento,
        "municipio" => $municipio,
        "sede" => $sede,
        "sugerencia" => $sugerencia,
        "pago" => $pago,
        "total" => $total,
        "consecutivo" => $consecutivo
      ];

      $this->Ecommerce_model->agregarPedido($datos);

      for($i=0; $i < sizeof($productos); $i++) {
        $data2 = [
          "consecutivo" => $consecutivo,
          "productos" => $productos[$i]["codigo"],
          "cantidad" => $productos[$i]["cantidad"]
        ];
        $this->Ecommerce_model->agregarDetallePedido($data2);
      }
      
    }


}