<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class DataPenyewa_model extends CI_Model
	{
		public function getDataPenyewa()
		{
			  $this->db->select('id_user, nama, alamat, email, no_tlp, username');
		      $this->db->from('tabel_user');
		      $this->db->where(array('level' => 'penyewa'));
		       
		      $query = $this->db->get();
		      if ($query->num_rows() > 0) {
		        foreach ($query->result() as $penyewa_list) {
		          $hasil[] = $penyewa_list;
		        }
		        return $hasil;
		      }
		}



	}
?>
