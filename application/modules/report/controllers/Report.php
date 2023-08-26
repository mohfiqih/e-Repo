<?php defined('BASEPATH') or exit('No direct script access allowed');

class Report extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->cek_login();
		$this->load->model('M_report', 'report');
		// $this->load->library('session');
		// $this->load->helper('url');
	}
	
	# ------------------------ Data Kuesioner Skala Likert ---------------------------- #
     public function meta()
	{
		$data_user	= $this->M_Universal->getOne(["user_id" => $this->user_id], "user");
		$data = array(
			"judul"			=> "Hasil Kuesioner",
			"halaman"			=> "hasil_kuesioner",
			"view"			=> "hasil_kuesioner",
			// "data_paket"		=> $this->M_Universal->getMulti(NULL, "paket_soal"),
			"data_paket"		=> $this->M_Universal->getMulti(["id_paket"], "paket_soal"),
			"user"			=> $data_user
		);

		return $data;
	}

	public function index()
	{
		$this->load->view('template', $this->meta());
	}

	public function data_responden()
	{
		$data_user			= $this->M_Universal->getOne(["user_id" => $this->user_id], "user");
		$total_responden		= "id_paket_jawaban='" . dekrip(uri(3)) . "' ";
		$total_soal			= "id_paket_jawaban='" . dekrip(uri(3)) . "' ";
		// Menarik id paket
		$total_id				= "id_paket_jawaban='" . dekrip(uri(3)) . "' ";
		$total_pertanyaan		= "paket_id='" . dekrip(uri(3)) . "' ";

		$data = array(
			"judul"			=> "Data Kuesioner",
			"halaman"			=> "data_responden",
			"view"			=> "data_responden",
			
			// Menarik Data paket berdasarkan id_paket
			"data_paket"		=> $this->M_Universal->getMulti(["id_paket" => dekrip(uri(3))], "paket_soal"),
			"data_identitas"	=>  $this->report->get_kuesioner(["kuesioner.id_paket_jawaban" => dekrip(uri(3))]),

			"total_responden"	=> $this->report->total_responden($total_responden),
			"data_jawaban"		=> $this->report->get_kuesioner(["kuesioner.id_paket_jawaban" => dekrip(uri(3))]),
			"total_pertanyaan"	=> $this->report->total_pertanyaan($total_pertanyaan),
			
			// Menghitung Nilai Tertinggi, Terendah dan Inter5val
			"total"			=> ($this->report->total_ss_p($total_id)*4)+($this->report->total_s_p($total_id)*3)+($this->report->total_ts_p($total_id)*2)+($this->report->total_sts_p($total_id)*1),
			"interval"		=> $this->report->total_responden($total_responden)/4,
			"terendah"		=> $this->report->total_responden($total_responden)*1,
			"tertinggi"		=> $this->report->total_soal($total_soal)*4,
			
			// Menghitung Skor Total Positif + Negatif
			"ss"		=> ($this->report->total_ss_p($total_id))*4,
			"s"		=> ($this->report->total_s_p($total_id))*3,
			"ts"		=> ($this->report->total_ts_p($total_id))*2,
			"sts"	=> ($this->report->total_sts_p($total_id))*1,

			"user"			=> $data_user
		);

		$this->load->view('template', $data);
		// var_dump($total_ss_p);
	}

	public function hapus()
	{
		$hapus = $this->M_Universal->delete(["id_identitas" => dekrip(uri(3))], "kuesioner");

		if ($hapus) {
			$this->session->set_flashdata('notif_berhasil_hapus_responden', 'Data responden berhasil dihapus!');
			redirect('report', 'refresh');
		} else {
			$this->session->set_flashdata('notif_gagal_hapus_responden', 'Data responden gagal dihapus!');
			redirect('report', 'refresh');
		};
	}

	public function lihat_responden()
	{
		$data_user	= $this->M_Universal->getOne(["user_id" => $this->user_id], "user");
		$data = array(
			"judul"					=> "Detail Data",
			"halaman"					=> "lihat_responden",
			"view"					=> "lihat_responden",
			"data_identitas"			=> $this->report->getMulti_jawaban(["id_identitas" => dekrip(uri(3))], "kuesioner"),
			"data_kuesioner"			=> $this->report->get_soal_jawaban([
				"kuesioner.id_identitas" => dekrip(uri(3)),
				"id_paket_jawaban"		=> dekrip(uri(4))
			]),
			"user"						=> $data_user
		);
		$this->load->view('template', $data);
	}

	public function kuesioner()
	{
		$data_user	= $this->M_Universal->getOne(["user_id" => $this->user_id], "user");
		$data = array(
			"judul"			=> "Hasil Kuesioner",
			"halaman"			=> "hasil_kuesioner",
			"view"			=> "hasil_kuesioner",
			"data_paket"		=> $this->M_Universal->getMulti(NULL, "paket_soal"),
			"user"			=> $data_user
		);
		$this->load->view('template', $data);
	}


	# ------------------------ Data Komentar Klasifikasi ---------------------------- #
	public function komentar()
	{
		// $total_soal			= "id_paket_jawaban='" . dekrip(uri(3)) . "' ";
		$data_user			= $this->M_Universal->getOne(["user_id" => $this->user_id], "user");
		$data = array(
			"judul"			=> "Hasil Kuesioner",
			"halaman"			=> "komentar_kuesioner",
			"view"			=> "komentar_kuesioner",
			"data_paket"		=> $this->M_Universal->getMulti(NULL, "paket_soal"),
			"jml_baik"		=> $this->report->label_baik(["id_paket"], "klasifikasi"),
			"jml_kurang"		=> $this->report->label_baik(["id_paket"], "klasifikasi"),
			"user"			=> $data_user
		);
		$this->load->view('template', $data);
	}

	public function data_komentar()
	{
		// $total_soal			= "id_paket_jawaban='" . dekrip(uri(3)) . "' ";
		$data_user			= $this->M_Universal->getOne(["user_id" => $this->user_id], "user");
		$data = array(
			"judul"			=> "Hasil Kuesioner",
			"halaman"			=> "data_komentar",
			"view"			=> "data_komentar",
			"data_klasifikasi"	=>  $this->report->get_klasifikasi(["klasifikasi.id_paket_jawaban" => dekrip(uri(3))]),
			"user"			=> $data_user
		);
		$this->load->view('template', $data);
	}

	public function hapus_komentar()
	{
		$hapus = $this->M_Universal->delete(["id" => dekrip(uri(3))], "klasifikasi");

		if ($hapus) {
			$this->session->set_flashdata('notif_berhasil_hapus', 'Data komentar berhasil dihapus!');
			redirect('report/komentar', 'refresh');
			// notifikasi_redirect("success", "Hapus data berhasil", redirect('report/komentar'));
		} else {
			$this->session->set_flashdata('notif_gagal_hapus', 'Data komentar gagal dihapus!');
			redirect('report/komentar', 'refresh');
		};
	}

	# ------------------------ EXPORT ---------------------------- #
	public function hasil_kuesioner_pdf()
	{	  
		 $this->load->library('pdf');
		 $this->pdf->setPaper('A4', 'potrait');
		 $this->pdf->filename = "laporan-hasil-kuesioner.pdf";
		 $this->pdf->load_view('export_hasil_kuesioner', $data);
	}	
}