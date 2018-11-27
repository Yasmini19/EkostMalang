<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataPenyewa extends CI_Controller {

	public function index()
	{
		$this->load->helper('url','form');
		$this->load->model('DataPenyewa_model');
		$data['penyewa_list'] = $this->DataPenyewa_model->getDataPenyewa();
		$this->load->view('admin/dataPenyewa', $data);
	}

}
