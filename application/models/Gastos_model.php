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
        "proveedor" => $data["proveedor"],
        "fecha" => $data["fecha"],
        "fecha_limite" => $data["fecha_limite"],
        "descripcion" => $data["descripcion"],
        "precio" => $data["precio"],
        "usuario" => $this->session->userdata("nombre"),
        "porpagar" => $data["porpagaract"]
      ];
      $this->db->insert("gastos", $datos);
    }
}