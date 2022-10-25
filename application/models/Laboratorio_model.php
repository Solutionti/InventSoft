<?php

class Laboratorio_model extends CI_model {

    public function getPreciosLaboratorio() {
        $this->db->select("*");
        $this->db->from("precio_laboratorio");
        $query = $this->db->get();

        return $query;
    }

    public function CountLaboratorioId() {
        $this->db->select("count(*) as numero");
        $this->db->from("laboratorio");
        $result = $this->db->get();
        
        return $result->row();
    }

    public function crearServicioLaboratorio($data) {
        $datos = [
            "dni_paciente" => $data["dni"],
            "medico" => $data["doctor"],
            "tipo_deposito" => "Efectivo",
            "descripcion" => $data["observacion"],
            "estado" => "Pago",
            "fecha" => $data["fecha"],
            "hora" => date("h:i A"),
            "total" => $data["total"],
            "usuario" => $this->session->userdata("nombre")
        ];
        $this->db->insert("laboratorio", $datos);
        $id = $this->db->insert_id();

        return $id;
    }

    public function generarContrasenaPaciente($password,$documento) {
        $datos = [
            "password" => $password
        ];
        $this->db->where("documento", $documento);
        $this->db->update("pacientes", $datos);
    }

    public function crearDetalleLaboratorio($data) {

        $datos = [
            "id_laboratorio" => $data["id_laboratorio"],
            "servicio" => $data["servicio"],
            "fecha" => $data["fecha"],
            "hora" => date("h:i A"),
            "usuario" => $this->session->userdata("nombre")
        ];
        $this->db->insert("detalle_pago_laboratorio", $datos);
    }

    public function getLaboratoriPdf($id) {
        $this->db->select("l.*, p.nombre, p.apellido, p.telefono,p.password, d.nombre as doctor");
        $this->db->from("laboratorio l");
        $this->db->join("pacientes p", "l.dni_paciente = p.documento");
        $this->db->join("doctores d", "l.medico = codigo_doctor");
        $this->db->where("l.codigo_laboratorio", $id);
        $result = $this->db->get();

        return $result;
    }

    public function getLaboratorioServicios($id) {
        $this->db->select("p.*, pl.nombre");
        $this->db->from("detalle_pago_laboratorio p");
        $this->db->join("precio_laboratorio pl", "p.servicio = pl.codigo");
        $this->db->where("p.id_laboratorio", $id);
        $result = $this->db->get();

        return $result;
    }

    public function subirDocumentoLaboratorio($data) {
        $datos = [
            "paciente" => $data["paciente"],
            "titulo" => $data["titulo"],
            "url_documento" => $data["icono"],
            "tp_documento" => "laboratorio",
            "fecha" => date("Y-m-d")
        ];
        $this->db->insert("documentos_pacientes", $datos);
    }

    public function getDocumentosLaboratorioclientes() {
        $this->db->select("*");
        $this->db->from("documentos_pacientes");
        $this->db->where("paciente", $this->session->userdata("documento"));
        $this->db->where("tp_documento", "laboratorio");
        $result = $this->db->get();

        return $result;
    }
    // PRECIOS DE LABORATORIO

    public function createPrecioLaboratorio($data) {
        $datos = [
            "nombre" => $data["servicio"],
            "precio" => $data["precio"],
            "estado" => "ACTIVO",
            "usuario" => $this->session->userdata("nombre")
        ];
        $this->db->insert("precio_laboratorio", $datos);
    }

    public function getDataPrecioLaboratorio($id) {
        $this->db->select("*");
        $this->db->from("precio_laboratorio");
        $this->db->where("codigo", $id);
        $result = $this->db->get();

        return $result->row();
    }

    public function actualizarpreciosLaboratorio($data) {
        $datos = [
            "nombre" => $data["especialidad"],
            "precio" => $data["precio"],
            "estado" => $data["estado"]
        ];
        $this->db->where("codigo", $data["id"]);
        $this->db->update("precio_laboratorio", $datos);
    }
}