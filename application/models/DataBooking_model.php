<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class DataBooking_model extends CI_Model
	{
		public function getDataBooking()
		{
			  $this->db->select('id_booking,fk_id_user,fk_id_kost,tgl_booking,harga');
		      $this->db->from('booking_kost');
		      
		      $query = $this->db->get();
		      if ($query->num_rows() > 0) {
		        foreach ($query->result() as $booking_list) {
		          $hasil[] = $booking_list;
		        }
		        return $hasil;
		      }
		}



	}
?>
