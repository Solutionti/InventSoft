<?php

class Mesas_model extends CI_model {

    public function getpedidoMesas(){
        $this->db->select("*");
        $this->db->from("detalle_venta");
        $this->db->where("mesa", $mesa);
        $this->db->where("estado", "Ocupada");
        $result = $this->db->get();

        return $result;
    }

}