<?php

class Patologia_model extends CI_model {

    public function subirDocumentoPatologia($data) {
        $datos = [
            "paciente" => $data["paciente"],
            "titulo" => $data["titulo"],
            "url_documento" => $data["icono"],
            "tp_documento" => "patologia",
            "fecha" => date("d-m-Y")
        ];
        $this->db->insert("documentos_pacientes", $datos);
    }

    public function getDocumentosPatologiaclientes() {
        $this->db->select("*");
        $this->db->from("documentos_pacientes");
        $this->db->where("paciente", $this->session->userdata("documento"));
        $this->db->where("tp_documento", "patologia");
        $result = $this->db->get();

        return $result;
    }
}

?>