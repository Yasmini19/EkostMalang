<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class DetailKost extends CI_Controller {
    
        public function index()
        {   
            $this->load->view('penyewa/detailKost');
        }

 	}
 ?>