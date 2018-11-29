<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataBooking extends CI_Controller {

	public function index()
	{
		$this->load->helper('url','form');
		$this->load->model('DataBooking_model');
		$data['booking_list'] = $this->DataBooking_model->getDataBooking();
		$this->load->view('admin/dataBooking', $data);
	}

	public function pemesanan(){
        	$this->load->helper('url', 'form');
        	$this->load->model('DataBooking_model');
        	$data['booking_list'] = $this->DataBooking_model->getAllBooking();
			$this->load->view('pemilik/pemilik_pemesanan', $data);
		}

}
?>