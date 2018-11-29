<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class DataPenyewa_model extends CI_Model
	{
		public function getDataPenyewa()
		{
			$query = $this->db->query("SELECT nama, email, ktp, alamat, jenis_kelamin, no_hp, kampus, photo FROM pelanggan")->result();     
		    return $query; 
			  // $this->db->where('level' = 'penyewa');
			  // $this->db->select('id_user, nama, alamat, email, no_tlp, username');
		      // $this->db->from('tabel_user');

		      // $query = $this->db->get("tabel_user");
		      
		      // if ($query->num_rows() > 0) {
		      //   foreach ($query->result() as $penyewa_list) {
		      //     $hasil[] = $penyewa_list;
		      //   }
		      //   return $hasil;
		      // }
		}

// 		public function getAllPenyewa()
// 		{
// 			$this->db->where('', $Value);
// 		}
// public function getAllKost($id)
// 		{
// 			$this->db->where('id_kost',$id);
// 			$query = $this->db->get("kost");
// 			return $query->result();
// 		}


	}
?>
