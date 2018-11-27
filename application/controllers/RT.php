<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class RT extends CI_Controller {
    
        public function index()
        {   
            $this->load->view('rt/rt');
        }

        public function DataKost(){
        	$this->load->helper('url','form');
		    $this->load->model('Kost_p_model');
		    $data['k_list']= $this->Kost_p_model->getKost();
		    $this->load->view('rt/DataKost', $data);
        }

       
 	}
 ?>