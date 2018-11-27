<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Model_Booking extends CI_Model
    {
        public function __construct() 
        {
            parent::__construct();
        }
        public function get_all_booking()
        {
            // Urutkan berdasar abjad
            $this->db->order_by('id_booking');
            $query = $this->db->get('booking_kost');
            return $query->result_array();
        }
        public function create_booking()
        {
            $data = array(
                'fk_id_user'      => $this->input->post('fk_id_user'),
                'fk_id_kost'      => $this->input->post('fk_id_kost'),
                'tgl_booking'     => $this->input->post('tgl_booking'),
                'harga'           => $this->input->post('harga')
            );
            return $this->db->insert('booking_kost', $data);
        }

        
        public function delete_booking($id_booking)
        {
            if ( !empty($id_booking) ){
                $delete = $this->db->delete('booking_kost', array('id_booking'=>$id_booking) );
                return $delete ? true : false;
            } else {
                return false;
            }
        }
        
}