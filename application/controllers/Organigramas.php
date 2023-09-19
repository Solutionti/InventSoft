<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Organigramas extends CI_Controller {

    public function __construct() {
		parent:: __construct();
		$this->load->model("Notas_model");
	}

    public function getdataCalendario() {
		$citas = $this->Notas_model->getdataCalendario();
		
		echo json_encode($citas);
	}

}