<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_paket extends CI_Model
{
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

//     public function get_jawaban($where)
//     {
//         $this->db->select('*');
//         $this->db->from('paket_soal');
//         $this->db->join('responden', 'responden.paket_id_responden = paket_soal.id_paket', 'responden.id_respon');
//         $this->db->where($where);
//         $this->db->order_by('id_respon', 'asc');
//         $query = $this->db->get()->result();
//         return $query;
//     }

//     public function get_soal_jawaban($where)
//     {
//         $this->db->select('*');
//         $this->db->from('jawaban');
//         $this->db->join('daftar_soal', 'daftar_soal.id_soal = jawaban.id_soal_jawaban', 'inner');
//         $this->db->join('paket_soal', 'paket_soal.id_paket  = jawaban.id_paket_jawaban', 'inner');
//         $this->db->join('responden', 'responden.id_respon   = jawaban.id_respon', 'inner');
//         $this->db->where($where);
//         $query = $this->db->get()->result();
//         return $query;
//     }

    // public function get_Multi_jawaban($where)
    // {
    //     $this->db->select('*');
    //     $this->db->from('paket_soal');
    //     $this->db->join('responden', 'responden.paket_id_responden = paket_soal.id_paket');
    //     $this->db->where($where);
    //     $this->db->order_by('id_respon', 'asc');
    //     $query = $this->db->get()->result();
    //     return $query;
    // }

//     function get_total_biaya()
//     {
//         return $this->db->query("SELECT SUM(jawaban) as total FROM jawaban");
//     }

//     public function getMulti_jawaban($where, $tabel)
//     {
//         if (!empty($where)) {
//             $this->db->where($where);
//         }
        
//         $this->db->group_by('id_identitas');
        
//         $data = $this->db->get($tabel)->result();
//         return $data;
//         return $this->db->query("SELECT SUM(jawaban) as total FROM jawaban");
//     }

//     public function getMulti($where, $tabel)
//     {
//         if (!empty($where)) {
//             $this->db->where("nama_paket", $where);
//         }
//         $data = $this->db->get($tabel)->result();
//         return (count((array)$data) > 0) ? $data : false;
//     }

//     public function delete($id)
//     {
//         $this->db->where_in('id', $id);
//         $this->db->delete('jawaban');
//     }

    //  SKORRR
//     function total_responden($where)
//     {
//         $this->db->select('*');
//         $this->db->from('responden');
//         $this->db->join('paket_soal', 'paket_soal.id_paket = responden.paket_id_responden');
//         $this->db->where($where);
//         $this->db->order_by('id_paket', 'asc');
//         $query = $this->db->get()->num_rows();
//         return $query;
//     }

//     function total_soal($where)
//     {
//         $this->db->select('*');
//         $this->db->from('jawaban');
//         $this->db->join('paket_soal', 'paket_soal.id_paket = jawaban.id_paket_jawaban');
//         $this->db->where($where);
//         $this->db->order_by('id_paket', 'asc');
//         $query = $this->db->get()->num_rows();
//         return $query;
//     }

//     // Skor Positif
//     function total_ss_p($where)
//     {
//         $this->db->select('*');
//         $this->db->from('jawaban');
//         $this->db->join('paket_soal', 'paket_soal.id_paket = jawaban.id_paket_jawaban');
//         $this->db->where($where);
//         $this->db->where('kategori_soal= "Positif" and jawaban = "5"');
//         $this->db->order_by('id_paket', 'asc');
//         $query = $this->db->get()->num_rows();
//         return $query;
//     }

//     function total_s_p($where)
//     {
//         $this->db->select('*');
//         $this->db->from('jawaban');
//         $this->db->join('paket_soal', 'paket_soal.id_paket = jawaban.id_paket_jawaban');
//         $this->db->where($where);
//         $this->db->where('kategori_soal= "Positif" and jawaban = "4"');
//         $this->db->order_by('id_paket', 'asc');
//         $query = $this->db->get()->num_rows();
//         return $query;
//     }

//     function total_c_p($where)
//     {
//         $this->db->select('*');
//         $this->db->from('jawaban');
//         $this->db->join('paket_soal', 'paket_soal.id_paket = jawaban.id_paket_jawaban');
//         $this->db->where($where);
//         $this->db->where('kategori_soal= "Positif" and jawaban = "3"');
//         $this->db->order_by('id_paket', 'asc');
//         $query = $this->db->get()->num_rows();
//         return $query;
//     }

//     function total_ts_p($where)
//     {
//         $this->db->select('*');
//         $this->db->from('jawaban');
//         $this->db->join('paket_soal', 'paket_soal.id_paket = jawaban.id_paket_jawaban');
//         $this->db->where($where);
//         $this->db->where('kategori_soal= "Positif" and jawaban = "2"');
//         $this->db->order_by('id_paket', 'asc');
//         $query = $this->db->get()->num_rows();
//         return $query;
//     }

//     function total_sts_p($where)
//     {
//         $this->db->select('*');
//         $this->db->from('jawaban');
//         $this->db->join('paket_soal', 'paket_soal.id_paket = jawaban.id_paket_jawaban');
//         $this->db->where($where);
//         $this->db->where('kategori_soal= "Positif" and jawaban = "1"');
//         $this->db->order_by('id_paket', 'asc');
//         $query = $this->db->get()->num_rows();
//         return $query;
//     }

//     // Skor Negatif
//     function total_ss_n($where)
//     {
//         $this->db->select('*');
//         $this->db->from('jawaban');
//         $this->db->join('paket_soal', 'paket_soal.id_paket = jawaban.id_paket_jawaban');
//         $this->db->where($where);
//         $this->db->where('kategori_soal= "Negatif" and jawaban = "1"');
//         $this->db->order_by('id_paket', 'asc');
//         $query = $this->db->get()->num_rows();
//         return $query;
//     }

//     function total_s_n($where)
//     {
//         $this->db->select('*');
//         $this->db->from('jawaban');
//         $this->db->join('paket_soal', 'paket_soal.id_paket = jawaban.id_paket_jawaban');
//         $this->db->where($where);
//         $this->db->where('kategori_soal= "Negatif" and jawaban = "2"');
//         $this->db->order_by('id_paket', 'asc');
//         $query = $this->db->get()->num_rows();
//         return $query;
//     }

//     function total_c_n($where)
//     {
//         $this->db->select('*');
//         $this->db->from('jawaban');
//         $this->db->join('paket_soal', 'paket_soal.id_paket = jawaban.id_paket_jawaban');
//         $this->db->where($where);
//         $this->db->where('kategori_soal= "Negatif" and jawaban = "3"');
//         $this->db->order_by('id_paket', 'asc');
//         $query = $this->db->get()->num_rows();
//         return $query;
//     }

//     function total_ts_n($where)
//     {
//         $this->db->select('*');
//         $this->db->from('jawaban');
//         $this->db->join('paket_soal', 'paket_soal.id_paket = jawaban.id_paket_jawaban');
//         $this->db->where($where);
//         $this->db->where('kategori_soal= "Negatif" and jawaban = "4"');
//         $this->db->order_by('id_paket', 'asc');
//         $query = $this->db->get()->num_rows();
//         return $query;
//     }

//     function total_sts_n($where)
//     {
//         $this->db->select('*');
//         $this->db->from('jawaban');
//         $this->db->join('paket_soal', 'paket_soal.id_paket = jawaban.id_paket_jawaban');
//         $this->db->where($where);
//         $this->db->where('kategori_soal= "Negatif" and jawaban = "5"');
//         $this->db->order_by('id_paket', 'asc');
//         $query = $this->db->get()->num_rows();
//         return $query;
//     }
}