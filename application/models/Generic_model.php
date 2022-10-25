<?php

class Generic_model extends CI_model {

    public function getDepartamentos() {
        $this->db->select("*");
        $this->db->from("departamentos");
        $result1 = $this->db->get();
        return  $result1;
    }
    public function getprovincias() {
        $this->db->select("*");
        $this->db->from("provincia");
        $result2 = $this->db->get();
        return  $result2;

    }

    public function getDistritos() {
        $this->db->select("*");
        $this->db->from("distritos");
        $result3 = $this->db->get();
        return  $result3;
    }

    public function countMedicos() {
        $this->db->select("count(*) as medicos");
        $this->db->from("doctores");
        $result = $this->db->get();

        return $result;
    }

    public function countPacientes() {
        $this->db->select("count(*) as pacientes");
        $this->db->from("pacientes");
        $result = $this->db->get();

        return $result;
    }

    public function getPacientesNuevos() {
        $fecha = date("Y-m-d");
        $this->db->select("*");
        $this->db->from("pacientes");
        $this->db->where("creacion_fecha", $fecha);
        $this->db->limit(4,4);
        $result = $this->db->get();

        return $result;
    }

    public function countCitas() {
        $this->db->select("count(*) as citas");
        $this->db->from("citas");
        $result = $this->db->get();

        return $result;
    }

    public function countHistorias() {
        $this->db->select("count(*) as historias");
        $this->db->from("historial_pacientes");
        $result = $this->db->get();

        return $result;
    }

    public function countPagos() {
        $this->db->select("count(*) as pagos");
        $this->db->from("pagos");
        $result = $this->db->get();

        return $result;
    }

    public function getCategorias() {
        $this->db->select("*");
        $this->db->from("categorias");
        $result = $this->db->get();

        return $result;
    }

    public function subirArchivos($files, $ruta, $opciones = array()){
    	$return = array();

		$errorImg = 0;

    	$archivos = array();
		$cantidad = count($files['name']);

		for ($i=0; $i < $cantidad; $i++){ 
			if($files["error"][$i] != 0){
				$errorImg++;
			}
		}

		if($errorImg < $cantidad){
			$config['upload_path'] = $ruta;
			$config['encrypt_name'] = TRUE;

			if(count($opciones) > 0){
				if(array_key_exists("formatos", $opciones)){
					$config['allowed_types'] = $opciones["formatos"];
				}
				elseif(array_key_exists("size_max", $opciones)){
					$config['max_size'] = $opciones["size_max"];
				}
			}

			$this->load->library('upload', $config);

			for($i = 0; $i < $cantidad; $i++){
				$extension = explode(".", $files['name'][$i]);
				$extension = end($extension);

				$_FILES['imgTempAct']['name'] = $files['name'][$i];
				$_FILES['imgTempAct']['type'] = $files['type'][$i];
				$_FILES['imgTempAct']['tmp_name'] = $files['tmp_name'][$i];
				$_FILES['imgTempAct']['error'] = $files['error'][$i];
				$_FILES['imgTempAct']['size'] = $files['size'][$i];

				if($files['error'][$i] == 0){
					$this->upload->initialize($config);
					if($this->upload->do_upload('imgTempAct')){
						$fileData = $this->upload->data();
						$archivos[$i] = array();
						$archivos[$i]['nombre'] = $fileData['file_name'];
						$archivos[$i]['extencion'] = $fileData['file_ext'];
					}
				}
			}

			$return["archivos"] = $archivos;
			$return["error"] = 0;
		}
		else{
			$return["error"] = 1;
		}

		return $return;
    }

    public function encriptarPassword($texto){
		$pass_encrypt = password_hash($texto, PASSWORD_DEFAULT);
		return $pass_encrypt;
	}


}
?>