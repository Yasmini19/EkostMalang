<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class DataBooking_model extends CI_Model
	{
		public function getAllBooking()
		{
			$this->db->where('id_booking',$id);
			$query = $this->db->get("booking_kost");
			return $query->result();
		}
	}
?>
