<?php

class Ecommerce_model extends CI_model {

    public function getCategorias(){
      $this->db->select("*");
      $this->db->from("categorias");
      $result = $this->db->get();

      return $result;
    }

    public function getProductos() {
      $this->db->select("p.*, c.nombre as categorias");
      $this->db->from("productos p");
      $this->db->join("categorias c", "p.categoria = c.codigo_categoria");

      $result = $this->db->get();

      return $result;
    }

    public function getProductosCategoria($categoria) {
      $this->db->select("p.*, c.nombre as categorias");
      $this->db->from("productos p");
      $this->db->join("categorias c", "p.categoria = c.codigo_categoria");
      $this->db->where("p.categoria", $categoria);
      $result = $this->db->get();

      return $result;
    }
}
?>