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

    public function agregarMesa($datos) {
        $datos = [
          "numero_mesa" => $datos["nro_mesa"],
          "puestos" => $datos["puestos"],
          "estado" => $datos["estado"]
        ];
        $this->db->insert("mesas", $datos); 
    }

    public function getmesas(){
      $this->db->select("*");
      $this->db->from("mesas");
      $this->db->order_by("numero_mesa", "ASC");
      $result = $this->db->get();
    
      return $result;
      
    }

    public function getMesasDetalleId($mesa){
      $this->db->select("*");
      $this->db->from("pedidos_mesa");
      $this->db->where("estado", "OCUPADA");
      $this->db->where("mesa", $mesa);
      $result = $this->db->get("");

      return $result->row();


    }

}