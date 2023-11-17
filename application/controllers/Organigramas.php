<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Organigramas extends CI_Controller {

    public function __construct() {
		parent:: __construct();
		$this->load->model("Organigrama_model");
	}

    public function getdataCalendario() {
		$citas = $this->Organigrama_model->getdataCalendario();
		
		echo json_encode($citas);
	}

	public function insertarDatosOrganigrama() {
		$tipo_cancha = $this->input->post("tipo_cancha");
		$estado = $this->input->post("estado");
		$fecha = $this->input->post("fecha");
		$hora = $this->input->post("hora");
		$nombre = $this->input->post("nombre");
		$documento = $this->input->post("documento");
		$celular = $this->input->post("celular");
		$comentarios = $this->input->post("comentarios");

		$datos = [
		  "tipo_cancha" => $tipo_cancha,
		  "estado" => $estado,
		  "fecha" => $fecha,
		  "hora" => $hora,
		  "nombre" => $nombre,
		  "documento" => $documento,
		  "celular" => $celular,
		  "comentarios" => $comentarios,
		];

		$this->Organigrama_model->insertarDatosOrganigrama($datos);
	}

	public function actualizardatosorganigrama(){
		$tipo_cancha = $this->input->post("tipo_cancha");
		$estado = $this->input->post("estado");
		$nombre = $this->input->post("nombre");
		$comentarios = $this->input->post("comentarios");

		$datos = [
		  "tipo_cancha" => $tipo_cancha,
		  "estado" => $estado,
		  "nombre" => $nombre,
		  "comentarios" => $comentarios,
		];

		$this->Organigrama_model->actualizardatosorganigrama($datos);
	}

	public function buscarCliente() {
	  $celular = $this->input->post("celular");
	  $response = $this->Organigrama_model->buscarCliente($celular);
	  echo json_encode($response);
	}

}