<?php 

class M_jawaban extends CI_Model
{
     public function getJawaban($id = null)
     {
          if($id === null) {
               return $this->db->get('jawaban')->result_array();
          } else {
               return $this->db->get_where('jawaban', ['id' => $id])->result_array();
          }
     }

     public function deleteJawaban($id)
     {
          $this->db->delete('jawaban', ['id' => $id]);
          return $this->db->affected_rows();
     }
}

?>