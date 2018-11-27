<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class DataRt_model extends CI_Model
	{
		public function getDataRt()
		{
			  $this->db->select('id_user, nama, alamat, email, no_tlp, username');
		      $this->db->from('tabel_user');
		      $this->db->where(array('level' => 'rt'));
		       
		      $query = $this->db->get();
		      if ($query->num_rows() > 0) {
		        foreach ($query->result() as $rt_list) {
		          $hasil[] = $rt_list;
		        }
		        return $hasil;
		      }
		}



	}
?>
