
<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class DataBooking_model extends CI_Model
	{
		public function getDataBooking()
		{
			$query = $this->db->get("booking_kost");
			return $query->result();
		}
		public function getAllBooking()
		{
			$query = $this->db->get("booking_kost");
			return $query->result();
		}
	}
?>


