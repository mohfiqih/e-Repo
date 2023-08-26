<?php 
class M_export extends CI_Model
{
     public function get_manajerial($where, $tabel)
     {
          if (!empty($where)) {
               $this->db->where($where);
           }
           $data = $this->db->get($tabel)->result();
           return (count((array)$data) > 0) ? $data : false;
     }

    // public function get_kuesioner($where)
    // {
    //     $this->db->select('*');
    //     $this->db->from('paket_soal');
    //     $this->db->join('kuesioner', 'kuesioner.id_paket_jawaban = paket_soal.id_paket', 'kuesioner.id_identitas');
    //     $this->db->where($where);
    //     $this->db->order_by('id_identitas', 'asc');
    //     $this->db->group_by('id_identitas');
    //     $query = $this->db->get()->result();
    //     return $query;
    // }
    
    public function get_kuesioner($where)
    {
        $this->db->select('kuesioner.id_identitas, kuesioner.id_soal_kuesioner, GROUP_CONCAT(kuesioner.jawaban) as jawaban, nama_lengkap, prodi, sebagai, gender');
        $this->db->from('paket_soal');
        $this->db->join('kuesioner', 'kuesioner.id_paket_jawaban = paket_soal.id_paket', 'kuesioner.id_identitas');
        $this->db->join('daftar_soal', 'kuesioner.id_soal_kuesioner = daftar_soal.id_soal');
        $this->db->where($where);
        $this->db->order_by('id_identitas', 'asc');
        $this->db->group_by('id_identitas');
        $query = $this->db->get()->result();
        return $query;
    }

    function total_pertanyaan($where)
    {
        $this->db->select('*');
        $this->db->from('daftar_soal');
        $this->db->join('paket_soal', 'paket_soal.id_paket = daftar_soal.paket_id');
        $this->db->where($where);
        $this->db->order_by('id_paket', 'asc');
        $query = $this->db->get()->num_rows();
        return $query;
    }

     public function get_soal($where)
    {
        $this->db->select('*');
        $this->db->from('daftar_soal'); //jadwal
        $this->db->join('paket_soal', 'paket_soal.id_paket = daftar_soal.paket_id', 'paket_soal.nama_paket');
        // $this->db->join('kelas', 'kelas.id_x = jadwal.kelas', 'kelas.kelas');
        $this->db->where($where);
        $this->db->order_by('paket_id', 'asc');
        $query = $this->db->get()->result();
        return $query;
    }

    //  SKORRR
    function total_responden($where)
    {
        $this->db->select('*');
        $this->db->from('kuesioner');
        $this->db->join('paket_soal', 'paket_soal.id_paket = kuesioner.id_paket_jawaban');
        $this->db->where($where);
        $this->db->order_by('id_paket', 'asc');
        $query = $this->db->get()->num_rows();
        return $query;
    }

   function total_soal($where)
    {
        $this->db->select('*');
        $this->db->from('kuesioner');
        $this->db->join('paket_soal', 'paket_soal.id_paket = kuesioner.id_paket_jawaban');
        $this->db->where($where);
        $this->db->order_by('id_paket', 'asc');
        $query = $this->db->get()->num_rows();
        return $query;
    }
    
    // Skor Positif
    function total_ss_p($where)
    {
        $this->db->select('*');
        $this->db->from('kuesioner');
        $this->db->join('paket_soal', 'paket_soal.id_paket = kuesioner.id_paket_jawaban');
        $this->db->where($where);
        $this->db->where('jawaban = "4"');
        $this->db->order_by('id_paket', 'asc');
        $query = $this->db->get()->num_rows();
        return $query;
    }

    function total_s_p($where)
    {
        $this->db->select('*');
        $this->db->from('kuesioner');
        $this->db->join('paket_soal', 'paket_soal.id_paket = kuesioner.id_paket_jawaban');
        $this->db->where($where);
        $this->db->where('jawaban = "3"');
        $this->db->order_by('id_paket', 'asc');
        $query = $this->db->get()->num_rows();
        return $query;
    }
    
    function total_ts_p($where)
    {
        $this->db->select('*');
        $this->db->from('kuesioner');
        $this->db->join('paket_soal', 'paket_soal.id_paket = kuesioner.id_paket_jawaban');
        $this->db->where($where);
        $this->db->where('jawaban = "2"');
        $this->db->order_by('id_paket', 'asc');
        $query = $this->db->get()->num_rows();
        return $query;
    }

    function total_sts_p($where)
    {
        $this->db->select('*');
        $this->db->from('kuesioner');
        $this->db->join('paket_soal', 'paket_soal.id_paket = kuesioner.id_paket_jawaban');
        $this->db->where($where);
        $this->db->where('jawaban = "1"');
        $this->db->order_by('id_paket', 'asc');
        $query = $this->db->get()->num_rows();
        return $query;
    }

    public function get_klasifikasi($where)
    {
        $this->db->select('*');
        $this->db->from('paket_soal');
        $this->db->join('klasifikasi', 'klasifikasi.id_paket_jawaban = paket_soal.id_paket', 'klasifikasi.jawaban');
        $this->db->where($where);
        // $this->db->order_by('id_paket', 'asc');
        // $this->db->group_by('id_paket');
        $query = $this->db->get()->result();
        return $query;
    }
    
    function label_baik($where)
    {
        $this->db->select('*');
        $this->db->from('klasifikasi');
        $this->db->join('paket_soal', 'paket_soal.id_paket = klasifikasi.id_paket_jawaban');
        $this->db->where($where);
        $this->db->where('label = "Baik"');
        $this->db->order_by('id_paket', 'asc');
        $query = $this->db->get()->num_rows();
        return $query;
    }

    function label_kurang($where)
    {
        $this->db->select('*');
        $this->db->from('klasifikasi');
        $this->db->join('paket_soal', 'paket_soal.id_paket = klasifikasi.id_paket_jawaban');
        $this->db->where($where);
        $this->db->where('label="Kurang"');
        $this->db->order_by('id_paket', 'asc');
        $query = $this->db->get()->num_rows();
        return $query;
    }
}
?>