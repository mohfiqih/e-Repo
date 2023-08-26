<?php 
class M_manajerial extends CI_Model
{
     public function get_manajerial($where, $tabel)
     {
          if (!empty($where)) {
               $this->db->where($where);
           }
           $data = $this->db->get($tabel)->result();
           return (count((array)$data) > 0) ? $data : false;
     }

     public function upload($data = array())
     {
         return $this->db->insert_batch('manajerial', $data);
     }

     public function download($id_m){
        $query = $this->db->get_where('manajerial',array('id_m'=>$id_m));
        return $query->row_array();
    }
    
     public function tampil_data()
     {
          return $this->db->get('manajerial');
     }
     
     function insertDataManajerial($data)
    {
        $this->db->insert('manajerial', $data);
    }

    // public function download($id_m){
    //     $query = $this->db->get_where('manajerial',array('id_m'=>$id_m));
    //     return $query->row_array();
    // }

     public function ambil_data($keyword=null){
		$this->db->select('*');
		$this->db->from('manajemen');
		if(!empty($keyword)){
               $this->db->like('nama_apl',$keyword);
			// $this->db->or_like('nama_apl',$keyword);
               // $this->db->or_like('versi_apl',$keyword);
               // $this->db->or_like('tgl_publish',$keyword);
               // $this->db->or_like('penyedia_apl',$keyword);
		}
		return $this->db->get()->result_array();
	}

     public function countDataManajemen()
     {
         return $this->db->get('manajerial')->num_rows();
         
     }

     function total_data()
     {
         return $this->db->get('manajerial')->num_rows();
     }

     function total_berkas()
     {
         return $this->db->get('berkas')->num_rows();
     }
}
?>