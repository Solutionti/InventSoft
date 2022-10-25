<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

    public function __construct() {
		parent:: __construct();
		$this->load->model("Usuarios_model");
	}

    public function crearUsuarios() {
		$nombre = $this->input->post("nombre");
		$apellido = $this->input->post("apellido");
		$usuario = $this->input->post("usuario");
		$tp_usuario = $this->input->post("tp_usuario");
		$telefono = $this->input->post("telefono");
		$correo = $this->input->post("correo");
		$password = $this->input->post("password");

		$datos = [
			"nombre" => $nombre,
			"apellido" => $apellido,
			"tp_usuario" => $tp_usuario,
			"telefono" => $telefono,
			"email" => $correo,
			"password" => $password,
			"usuario" => $usuario
		];
		$this->Usuarios_model->crearUsuarios($datos);
	}

	public function actualizarUsuarioPerfil() {
		$telefono = $this->input->post("telefono");
		$direccion  = $this->input->post("direccion");
		$datos = [
		  "telefono" => $telefono,
		  "direccion" => $direccion
		];
		$this->Usuarios_model->actualizarUsuarioPerfil($datos);
	}

	public function getUsuariosId($codigo) {
		$usuario = $this->Usuarios_model->getUsuariosIdm($codigo);

		echo json_encode($usuario);
	}

}

?>