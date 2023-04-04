<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model("Patologia_model");
		$this->load->model("Laboratorio_model");
		$this->load->model("Inventarios_model");
		$this->load->model("Usuarios_model");
		$this->load->model("Gastos_model");
		$this->load->model("Ventas_model");
		$this->load->model("Reportes_model");
		$this->load->model("Proveedores_model");
		$this->load->model("Pedidos_model");
	}

    public function index() {
        $this->load->view("login_clientes");
    }

	public function inicio(){
		$id = $this->session->userdata("codigo");
		$usuarios = $this->Usuarios_model->getUsuariosId($id);
		$data = ["usuario" => $usuarios];
		$this->load->view("ventas/inicio", $data);
	}

	public function laboratorio() {
		$administradores = $this->Usuarios_model->getAdministtradores();
		$data = [
		  "administrador" => $administradores,
		];
	  $this->load->view("ventas/laboratorio", $data);
	}

	public function patologia() {
		$productos = $this->Inventarios_model->getProductos();
		$categorias = $this->Inventarios_model->getCategorias();
        $data = [
            "producto" => $productos,
			"categoria" => $categorias
        ];
		$this->load->view("ventas/patologia", $data);
	}

	public function ecografias() {
	  $ventadias = $this->Reportes_model->ventaDiaria();
	  $productoDias = $this->Reportes_model->ProductosVendidos();
	  $gastos = $this->Reportes_model->ReporteGastos();
	  $usuarios = $this->Usuarios_model->getAdministtradores();
	  $categorias = $this->Inventarios_model->getCategorias();
	  $totalinventarios = $this->Reportes_model->totalInventario();
	  $totalproveedores = $this->Reportes_model->totalProveedor();
	  $data = [
	    "ventadia" => $ventadias,
		"gasto" => $gastos,
		"productodia" => $productoDias,
		"usuario" => $usuarios,
		"categoria" => $categorias,
		"totalinventario" => $totalinventarios,
		"totalproveedor" => $totalproveedores
	  ];
	  $this->load->view("ventas/ecografias", $data);
	}

	public function gastos() {
		$gastos = $this->Gastos_model->getGastos();
		$proveedores = $this->Proveedores_model->getProveedores();
		$data = [
		  "gasto" => $gastos,
		  "proveedor" => $proveedores
		];
		$this->load->view("ventas/gastos", $data);
	  }

	public function ventas() {
		$balances = $this->Ventas_model->getBalanceSistema();
		$productos = $this->Inventarios_model->getProductos();
		$consecutivos = $this->Inventarios_model->consecutivoDocumentoVenta();
		$estadocajas = $this->Ventas_model->getEstadoCaja();
		$idcajas = $this->Ventas_model->getIdCaja();
		$data = [
		  "producto" => $productos,
		  "consecutivo" => $consecutivos,
		  "balance" => $balances,
		  "estadocaja" => $estadocajas,
		  "id_caja" => $idcajas
		];
		$this->load->view("ventas/ventas", $data);
	}

	public function mesas(){
		$this->load->view("ventas/mesas");
	}

	public function devoluciones(){
		$this->load->view("ventas/devoluciones");
	}

	public function proveedores() {
	  $proveedores = $this->Proveedores_model->getProveedores();
      $datos = [
		"proveedor" => $proveedores
	  ]; 
      $this->load->view("ventas/proveedores", $datos);
	}

	public function pedidos() {
		$pedidos = $this->Pedidos_model->getPedidos();
		$data = [
		  "pedido" => $pedidos
		];
		
		$this->load->view("ventas/pedidos", $data);
	  }

}