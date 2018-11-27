<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataPemilik extends CI_Controller {

	public function index()
	{
		$this->load->helper('url','form');
		$this->load->model('DataPemilik_model');
		$data['pemilik_list'] = $this->DataPemilik_model->getDataPemilik();
		$this->load->view('admin/dataPemilik', $data);
	}

}
