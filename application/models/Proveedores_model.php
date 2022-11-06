<?php

class Proveedores_model extends CI_model {

    public function guardarProveedores ($data) {

        $datos = [
            "nit" => $data["nit_proveedores"], 
            "nombre" => $data["nom_proveedores"],
            "telefono" => $data["tel_proveedores"],
            "correo" => $data["correo_proveedores"],
            "descripcion" => $data["desc_proveedores"]
        ];

        $this->db->insert("proveedores", $datos);
   
    }

    public function getProveedores() {
      $this->db->select("*");
      $this->db->from("proveedores");
      $result = $this->db->get();

      return $result;
    }
}