<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class DataPenyewa_Rt_model extends CI_Model
	{
		public function getDataPenyewa_Rt()
		{
			  $this->db->select('id_user, nama, alamat, email, no_tlp, username');
		      $this->db->from('tabel_user');
		      $this->db->where(array('level' => 'rt'));
		       
		      $query = $this->db->get();
		      if ($query->num_rows() > 0) {
		        foreach ($query->result() as $penyewaRt_list) {
		          $hasil[] = $penyewaRt_list;
		        }
		        return $hasil;
		      }
		}



	}
?>
