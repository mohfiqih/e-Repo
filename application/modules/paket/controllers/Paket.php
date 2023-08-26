<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Paket extends MY_Controller {

    public function __construct()
    {
        // Load the constructer from MY_Controller
        parent::__construct();
		$this->cek_login();
		$this->load->model('M_paket');
    }

	public function meta()
	{
	  $data_user	= $this->M_Universal->getOne(["user_id" => $this->user_id], "user");

        $data = array(
			"judul"			=> "Dashboard",
			"keterangan"		=> "Contoh Keterangan",
			"halaman"			=> "paket_kuesioner/paket_kuesioner",
			"view"			=> "paket_kuesioner/paket_kuesioner",
               "data_paket"	     => $this->M_Universal->getMulti(NULL, "paket_soal"),
               "edit_paket"	     => $this->M_Universal->getMulti(["id_paket" => dekrip(uri(3))], "paket_soal"),
			"user"			=> $data_user,
	   );
	   return $data;
	}

     # Load View
	public function index()
	{
		$this->load->view('template', $this->meta());
	}

     # Fungsi Tambah Paket
     public function tambah()
	{
		$data = array(
			"nama_paket"		=> $this->input->post("nama_paket"),
			"aplikasi"		=> $this->input->post("aplikasi"),
			"versi_apl_paket"	=> $this->input->post("versi_apl_paket"),
			"tgl_kuesioner"	=> $this->input->post("tgl_kuesioner"),
			"responden"		=> implode(',', $this->input->post("responden")),
			"jumlah_soal"		=> $this->input->post("jumlah_soal"),
		);

		$tambah = $this->M_Universal->insert($data, "paket_soal");

		if ($tambah) {
			$this->session->set_flashdata('notif_tambah_paket', 'Berhasil Menambah Paket Kuesioner!');
			redirect(uri(1), 'refresh');
			// notifikasi_redirect("success", "Berhasil Menambah Paket Soal", uri(1));
		} else {
			$this->session->set_flashdata('notif_gagal_paket', 'Berhasil Menambah Paket Kuesioner!');
			redirect(uri(1), 'refresh');
			// notifikasi_redirect("error", "Gagal Menambah Paket Soal", uri(1));
		};
	}

     public function edit_paket()
	{
		$data_user	= $this->M_Universal->getOne(["user_id" => $this->user_id], "user");
		$data = array(
			"judul"		=> "Edit Paket",
			"halaman"		=> "paket_kuesioner/edit_paket",
			"view"		=> "paket_kuesioner/edit_paket",
			"edit_paket"	=>  $this->M_Universal->getMulti(["id_paket" => dekrip(uri(3))], "paket_soal"),
			"user"		=> $data_user
		);

		$this->load->view('template', $data);
	}

     # Fungsi Update Paket
     public function update()
	{
		$id_paket	= dekrip($this->input->post("id_paket"));
		$data     = array(
			"nama_paket"		=> $this->input->post("nama_paket"),
			"aplikasi"		=> $this->input->post("aplikasi"),
			"versi_apl_paket"	=> $this->input->post("versi_apl_paket"),
			"tgl_kuesioner"	=> $this->input->post("tgl_kuesioner"),
			"responden"		=> implode(',', $this->input->post("responden")),
			"jumlah_soal"		=> $this->input->post("jumlah_soal"),
		);

		$update = $this->M_Universal->update($data, ["id_paket" => $id_paket], "paket_soal");

		if ($update) {
			notifikasi_redirect("success", "Paket Soal Berhasil di Update", uri(1));
		} else {
			notifikasi_redirect("error", "Paket Soal Gagal di Update", uri(1));
		};
	}

     # Fungsi Hapus Paket
	public function hapus_paket()
	{
		$hapus = $this->M_Universal->delete(["id_paket" => dekrip(uri(3))], "paket_soal");

		if ($hapus) {
			$this->session->set_flashdata('notif_berhasil_hapus', 'Paket Kuesioner berhasil dihapus!');
			redirect(uri(1), 'refresh');
		} else {
			$this->session->set_flashdata('notif_gagal_hapus', 'Paket Kuesioner gagal dihapus!');
			redirect(uri(1), 'refresh');
		};
	}

     # Fungsi Export PDF Pkaet
     public function laporan_paket()
	{
		$data	= array(
			"judul"		=> "Paket Pertanyaan",
			"halaman"		=> "paket_soal",
			"view"		=> "paket_soal",
			"data_paket"	=> $this->M_Universal->getMulti(NULL, "paket_soal"),
			// "user"		=> $data_user
		);
	  
		 $this->load->library('pdf');
		 $this->pdf->setPaper('A4', 'potrait');
		 $this->pdf->filename = "laporan-paket.pdf";
		 $this->pdf->load_view('paket_kuesioner/export_paket', $data);
	}

	// ============================ END PAKET ==================================== //


     // ============================ DAFTAR SOAL ==================================== //

	public function daftar_soal()
	{
		$data_user	= $this->M_Universal->getOne(["user_id" => $this->user_id], "user");
		$total_pertanyaan		= "paket_id='" . dekrip(uri(3)) . "' ";
		$data = array(
			"judul"			=> "Daftar Soal",
			"halaman"			=> "daftar_soal/daftar_soal",
			"view"			=> "daftar_soal/daftar_soal",
			"data_soal"		=> $this->M_paket->get_soal(["daftar_soal.paket_id" => dekrip(uri(3))]),
			"total_pertanyaan"	=> $this->M_paket->total_pertanyaan($total_pertanyaan),
			"data_paket"		=> $this->M_Universal->getMulti(["id_paket" => dekrip(uri(3))], "paket_soal"),
			"user"			=> $data_user
		);

		$this->load->view('template', $data);
	}

     # Fungsi Tambah Soal
     public function tambah_soal()
	{
		$data = array(
			"paket_id"			=> $this->input->post("paket_id"),
			"soal"				=> $this->input->post("soal"),
			"type_soal"			=> $this->input->post("type_soal"),
			"sangat_setuju"		=> $this->input->post("sangat_setuju"),
			"setuju"				=> $this->input->post("setuju"),
			// "cukup"				=> $this->input->post("cukup"),
			"tidak_setuju"			=> $this->input->post("tidak_setuju"),
			"sangat_tidak_setuju"	=> $this->input->post("sangat_tidak_setuju"),
		);

		// var_dump($data);die;
		$tambah 	= $this->M_Universal->insert($data, "daftar_soal");

		if ($tambah) {
			$this->session->set_flashdata('notif_berhasil_soal', 'Berhasil menambahkan pertanyaan!');
			redirect(uri(1), 'refresh');
		} else {
			$this->session->set_flashdata('notif_gagal_soal', 'Gagal menambahkan pertanyaan!');
			redirect(uri(1), 'refresh');
		};
	}

     # Load View
     public function edit_soal()
	{
		$data_user	= $this->M_Universal->getOne(["user_id" => $this->user_id], "user");
		$data = array(
			"judul"		=> "Edit Paket",
			"halaman"		=> "paket_kuesioner/edit_paket",
			"view"		=> "paket_kuesioner/edit_paket",
			"edit_soal"	=>  $this->M_Universal->getMulti(NULL, "daftar_soal"),
			"user"		=> $data_user
		);

		$this->load->view('template', $data);
	}

     # Fungsi Update Paket
     public function update_paket()
	{
		$id_paket	= dekrip($this->input->post("id_paket"));
		$data		= array(
			"nama_paket"		=> $this->input->post("nama_paket"),
			"aplikasi"		=> $this->input->post("aplikasi"),
			"versi_apl_paket"	=> $this->input->post("versi_apl_paket"),
			"tgl_kuesioner"	=> $this->input->post("tgl_kuesioner"),
			"responden"		=> implode(',', $this->input->post("responden")),
			"jumlah_soal"		=> $this->input->post("jumlah_soal"),
		);

		$update = $this->M_Universal->update($data, ["id_paket" => $id_paket], "paket_soal");

		if ($update) {
			notifikasi_redirect("success", "Paket Soal Berhasil di Update", uri(1));
		} else {
			notifikasi_redirect("error", "Paket Soal Gagal di Update", uri(1));
		};
	}

     # Fungsi Hapus Soal
     public function hapus_soal()
	{
		$hapus 	= $this->M_Universal->delete(["id_soal" => dekrip(uri(3))], "daftar_soal");

		if ($hapus) {
			notifikasi_redirect("success", "Berhasil Hapus Soal", redirect(uri(1)));
		} else {
			notifikasi_redirect("error", "Gagal Hapus Soal", redirect(uri(1)));
		};
	}
}