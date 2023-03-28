<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mesas extends CI_Controller {

    public function __construct() {
		parent:: __construct();
		$this->load->model("Mesas_model");
	}

    public function getpedidoMesas(){
        $mesas = $this->Mesas_model->getpedidoMesas();

        echo json_encode($mesas->result());
    }
}