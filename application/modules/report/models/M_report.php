<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_report extends CI_Model
{
    function total_soal_paket()
    {
        return $this->db->get('daftar_soal')->num_rows();
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

    // public function get_jawaban($where)
    // {
    //     $this->db->select('*');
    //     $this->db->from('paket_soal');
    //     $this->db->join('responden', 'responden.paket_id_responden = paket_soal.id_paket', 'responden.id_respon');
    //     $this->db->where($where);
    //     $this->db->order_by('id_respon', 'asc');
    //     $query = $this->db->get()->result();
    //     return $query;
    // }

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
    
    // public function get_kuesioner($where)
    // {
    //     $this->db->select('kuesioner.id_identitas, kuesioner.id_soal_kuesioner, GROUP_CONCAT(kuesioner.jawaban) as jawaban, nama_lengkap, prodi, sebagai, gender');
    //     $this->db->from('paket_soal');
    //     $this->db->join('kuesioner', 'kuesioner.id_paket_jawaban = paket_soal.id_paket', 'kuesioner.id_identitas');
    //     $this->db->join('daftar_soal', 'kuesioner.id_soal_kuesioner = daftar_soal.id_soal');
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
    $this->db->join('user', 'user.username_id = kuesioner.id_identitas'); // Tambahkan join dengan tabel user
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

    public function get_soal_jawaban($where)
    {
        $this->db->select('*');
        $this->db->from('kuesioner');
        $this->db->join('daftar_soal', 'daftar_soal.id_soal = kuesioner.id_soal_kuesioner', 'datar_soal.soal', 'inner');
        $this->db->join('paket_soal', 'paket_soal.id_paket  = kuesioner.id_paket_jawaban', 'paket_soal.nama_paket', 'inner');
        // $this->db->join('kuesioner', 'kuesioner.id_identitas   = kuesioner.id_identitas', 'inner');
        $this->db->where($where);
        $query = $this->db->get()->result();
        return $query;
    }

    function get_total_biaya()
    {
        return $this->db->query("SELECT SUM(jawaban) as total FROM jawaban");
    }

    public function getMulti_jawaban($where, $tabel)
    {
        if (!empty($where)) {
            $this->db->where($where);
        }
        
        $this->db->group_by('id_identitas');
        
        $data = $this->db->get($tabel)->result();
        return $data;
        return $this->db->query("SELECT SUM(kuesioner) as total FROM kuesioner");
    }

    public function getMulti($where, $tabel)
    {
        if (!empty($where)) {
            $this->db->where("nama_paket", $where);
        }
        $data = $this->db->get($tabel)->result();
        return (count((array)$data) > 0) ? $data : false;
    }

    public function delete($id)
    {
        $this->db->where_in('id', $id);
        $this->db->delete('jawaban');
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