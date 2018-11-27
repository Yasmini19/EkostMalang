<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class DataPemilik_model extends CI_Model
	{
		public function getDataPemilik()
		{
			  $this->db->select('id_user, nama, alamat, email, no_tlp, username');
		      $this->db->from('tabel_user');
		      $this->db->where(array('level' => 'pemilik'));
		       
		      $query = $this->db->get();
		      if ($query->num_rows() > 0) {
		        foreach ($query->result() as $pemilik_list) {
		          $hasil[] = $pemilik_list;
		        }
		        return $hasil;
		      }
		}



	}
?>
