 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 class Proveedores extends CI_Controller {

   public function __construct() {
     parent:: __construct();
     $this->load->model("Proveedores_model");
   }

    public function guardarProveedores() {
      $nit_proveedores = $this->input->post("nit_proveedores");
      $nom_proveedores = $this->input->post("nom_proveedores");
      $tel_proveedores = $this->input->post("tel_proveedores");
      $correo_proveedores = $this->input->post("correo_proveedores");
      $desc_proveedores = $this->input->post("desc_proveedores");

     // SE CREA UN ARRAY

      $datos = [
        "nit_proveedores" => $nit_proveedores, 
        "nom_proveedores" => $nom_proveedores,
        "tel_proveedores" => $tel_proveedores,
        "correo_proveedores" => $correo_proveedores,
        "desc_proveedores" => $desc_proveedores
      ];
      $this->Proveedores_model->guardarProveedores($datos);

    }    
}