<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataRt extends CI_Controller {

	public function index()
	{
		$this->load->helper('url','form');
		$this->load->model('DataRt_model');
		$data['rt_list'] = $this->DataRt_model->getDataRt();
		$this->load->view('admin/dataRt', $data);
	}

}
