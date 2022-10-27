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
	}

    public function index() {
        $this->load->view("login_clientes");
    }

	public function inicio(){
		$id = $this->session->userdata("codigo");
		$usuarios = $this->Usuarios_model->getUsuariosId($id);
		$data = ["usuario" => $usuarios];
		$this->load->view("clientes/inicio", $data);
	}

	public function laboratorio() {
		$administradores = $this->Usuarios_model->getAdministtradores();
		$data = [
		  "administrador" => $administradores,
		];
	  $this->load->view("clientes/laboratorio", $data);
	}

	public function patologia() {
		$productos = $this->Inventarios_model->getProductos();
		$categorias = $this->Inventarios_model->getCategorias();
        $data = [
            "producto" => $productos,
			"categoria" => $categorias
        ];
		$this->load->view("clientes/patologia", $data);
	}

	public function ecografias() {
	  $this->load->view("clientes/ecografias");
	}

	public function gastos() {
		$gastos = $this->Gastos_model->getGastos();
		$data = ["gasto" => $gastos];
		$this->load->view("clientes/gastos", $data);
	  }

	public function ventas() {
		$balances = $this->Ventas_model->getBalanceSistema();
		$productos = $this->Inventarios_model->getProductos();
		$consecutivos = $this->Inventarios_model->consecutivoDocumentoVenta();
		$data = [
		  "producto" => $productos,
		  "consecutivo" => $consecutivos,
		  "balance" => $balances
		];
		$this->load->view("clientes/ventas", $data);
	}

	public function devoluciones(){
		$this->load->view("clientes/devoluciones");
	}

}