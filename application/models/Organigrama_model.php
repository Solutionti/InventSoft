<?php

class Organigrama_model extends CI_model {

    public function getdataCalendario() {

        $this->db->select("CONCAT(c.nombre,' || ',c.tipo_gramilla, ' || ', c.comentarios, ' || ', c.estado) as title,c.comentarios as description,CONCAT(c.fecha,' ',c.hora) as start, CONCAT(c.fecha,' ',c.hora) as end,c.color as color,c.*");
        $this->db->from("citas c");
        $this->db->where_not_in("c.estado", "Eliminar");
        $this->db->group_by('c.codigo_cita');

        return $this->db->get()->result();  

    }

    public function insertarDatosOrganigrama($data) {

        if($data["estado"] == "Confirmada"){
           $color = "green";
        }
        else if ($data["estado"] == "En juego") {
           $color = "black";
        }
        else if ($data["estado"] == "Cancelada") {
            $color = "red";
        }

        $datos = [
          "documento" => $data["documento"], 
          "nombre" => $data["nombre"], 
          "telefono" => $data["celular"], 
          "fecha" => $data["fecha"], 
          "fechafin" => $data["fecha"], 
          "hora" => $data["hora"], 
          "comentarios" => $data["comentarios"], 
          "tipo_gramilla" => $data["tipo_cancha"], 
          "estado" => $data["estado"], 
          "usuario" => $this->session->userdata("nombre"), 
          "color" => $color
        ];

        $this->db->insert("citas", $datos);
    }

    public function actualizardatosorganigrama($data) {

        if($data["estado"] == "Confirmada"){
           $color = "green";
        }
        else if ($data["estado"] == "En juego") {
           $color = "black";
        }
        else if ($data["estado"] == "Cancelada") {
            $color = "red";
        }

        $datos = [
          "nombre" => $data["nombre"], 
          "comentarios" => $data["comentarios"], 
          "tipo_gramilla" => $data["tipo_cancha"], 
          "estado" => $data["estado"], 
          "usuario" => $this->session->userdata("nombre"), 
          "color" => $color
        ];

        $this->db->where("nombre", $data["nombre"]);
        $this->db->update("citas", $datos);
    }

    public function buscarCliente($celular) {
      $this->db->select("*");
      $this->db->from("citas");
      $this->db->where("telefono", $celular);
      $result = $this->db->get();

      return $result->row();
    }
    
}