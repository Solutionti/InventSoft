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

    public function getdataCalendario() {

        $this->db->select("CONCAT(c.nombre,' || ',c.tipo_gramilla, ' ||', c.comentarios) as title,c.comentarios as description,CONCAT(c.fecha,' ',c.hora) as start, CONCAT(c.fecha,' ',c.hora) as end,c.color as color,c.*");
        $this->db->from("citas c");
        $this->db->where("c.estado", "Confirmado");
        $this->db->group_by('c.codigo_cita');
        return   $this->db->get()->result();  

    }
}