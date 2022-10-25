<?php

class Gastos_model extends CI_model {

    public function getGastos() {
      $this->db->select("*");
      $this->db->from("gastos");
      $this->db->where("fecha", date("Y-m-d"));
      $result = $this->db->get();

      return $result;
    }

    public function crearGasto($data) {
      $datos = [
        "categoria" => $data["categoria"],
        "fecha" => $data["fecha"],
        "descripcion" => $data["descripcion"],
        "precio" => $data["precio"],
        "usuario" => $this->session->userdata("nombre")
      ];
      $this->db->insert("gastos", $datos);
    }
}