<?php 
class M_Kuesioner extends CI_Model
{
     public function get_kuesioner($where, $tabel)
     {
          if (!empty($where)) {
               $this->db->where($where);
           }
           $data = $this->db->get($tabel)->result();
           return (count((array)$data) > 0) ? $data : false;
     }

     public function insert($data, $tabel)
    {
        return ($this->db->insert($tabel, $data)) ? true : false;
    }

    public function get_soal($where) 
    {
            $this->db->select('daftar_soal.*,responden.id_identitas,paket_soal.id_paket');
            $this->db->from('daftar_soal');
            $this->db->join('paket_soal', 'paket_soal.id_paket = daftar_soal.paket_id','paket_soal.nama_paket','daftar_soal.soal','daftar_soal.id_soal');
            $this->db->join('responden', 'paket_soal.id_paket = responden.paket_id_responden');
            $this->db->where($where);
            $this->db->order_by('id_soal', 'asc');
            // if (!empty($where)) {
            //     $this->db->where("paket_soal.nama_paket",$where);
            // }
            $query = $this->db->get()->result();
            return $query;
    }

    public function get_kuesioner_new($where)
    {
        $this->db->select('kuesioner.id_identitas, kuesioner.id_soal_kuesioner, GROUP_CONCAT(kuesioner.jawaban) as jawaban, nama_lengkap, prodi, sebagai, gender');
        $this->db->from('paket_soal');
        $this->db->join('kuesioner', 'kuesioner.id_paket_jawaban = paket_soal.id_paket', 'kuesioner.id_identitas');
        $this->db->join('daftar_soal', 'kuesioner.id_soal_kuesioner = daftar_soal.id_soal');
        $this->db->join('user', 'user.username_id = kuesioner.id_identitas'); // Tambahkan join dengan tabel user
        $this->db->where($where);
        $this->db->order_by('id_identitas', 'asc');
        $this->db->group_by('id_identitas');
        $query = $this->db->get()->result();
        return $query;
    }
}