<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class My_Controller extends CI_Controller{
	function __construct(){
		parent::__construct();
	}
}

class Admin_Controller extends My_Controller{
	function __construct(){
		parent::__construct();
		if ($this->session->userdata('login') == false){
			redirect(base_url());
		}
		else {
			
		}
	}
}
    class Public_Controller extends My_Controller{
        function __construct(){
            parent::__construct();
        }
    
    }
    
 
