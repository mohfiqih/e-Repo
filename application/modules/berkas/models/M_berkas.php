<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_berkas extends CI_Model
{
     public function upload($data = array())
     {
         return $this->db->insert_batch('manajerial', $data);
     }

     public function download($id_m){
        $query = $this->db->get_where('manajerial',array('id_m'=>$id_m));
        return $query->row_array();
    }
     
     function total_berkas($where = array(),$tabel)
     {
         return $this->db->get('berkas')->num_rows();
     }     
}
?>