<?php

class Pedidos_model extends CI_model {

    public function getPedidos() {
        $this->db->select("*");
        $this->db->from("pedidos");
        $result = $this->db->get();

        return $result;
    }

}