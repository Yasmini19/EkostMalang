<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataPenyewa_Rt extends CI_Controller {

	public function index()
	{
		$this->load->helper('url','form');
		$this->load->model('DataPenyewa_Rt_model');
		$data['penyewaRt_list'] = $this->DataPenyewa_Rt_model->getDataPenyewa_Rt();
		$this->load->view('rt/dataPenyewaRt', $data);
	}

}
?>