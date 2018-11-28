<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Booking_Controller extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_Booking');
		$this->load->model('Kost_p_model');
	}
	
	public function index() 
	{
		// Dapatkan semua kategori
		$data['booking'] = $this->Model_Booking->get_all_booking();
		$this->load->view('penyewa/view_bookingpenyewa', $data);
	}
	public function create() 
	{
		// Kita butuh helper dan library berikut
		$this->load->helper('form');
		$this->load->library('form_validation');
		// Form validasi untuk Nama Kategori
		$this->form_validation->set_rules('fk_id_user', 'Id User', 'trim|required');
		$this->form_validation->set_rules('fk_id_kost', 'Id Kost ', 'trim|required');
		$this->form_validation->set_rules('tgl_booking', 'Tgl Booking', 'trim|required');
		$this->form_validation->set_rules('harga', 'Harga', 'trim|required');
		if($this->form_validation->run() === FALSE){
			redirect('DashboardPenyewa/booking');
		} else {
			$this->Model_Booking->create_booking();
			redirect('Booking_Controller/');
		}
	}
	
	public function delete($id_booking)
	{
		$this->Model_Booking->delete_booking($id_booking);
		$this->load->view('penyewa/view_bookingpenyewa');
	}
}