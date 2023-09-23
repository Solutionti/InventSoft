<?php

class Notas_model extends CI_model {

    public function getNotas() {
        $this->db->select("*");
        $this->db->from("notas");
        $result = $this->db->get();
        
        return $result;
    }

    public function registrarnota($data) {
        $datos = [
          "titulo" => $data["titulo"],
          "descripcion" => $data["asunto"],
          "fecha" => $data["fecha"],
          "hora" => $data["hora"],
          "estado" => "ACTIVA",
          "usuario" => $this->session->userdata("nombre"),
        ];
        $this->db->insert("notas", $datos);
    }

    
}