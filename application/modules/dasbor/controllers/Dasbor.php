<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dasbor extends MY_Controller {

    public function __construct()
    {
        // Load the constructer from MY_Controller
        parent::__construct();
		$this->cek_login();
		$this->load->model('M_dasbor');
    }

	public function meta()
	{
	  $data_user = $this->M_Universal->getOne(["user_id" => $this->user_id], "user");
    	  $this->username_id = $data_user->username_id;
	  $data_paket	= $this->M_Universal->getMulti(NULL, "paket_soal");
	  $this->username_id = $data_user->username_id;

        $data = array(
			"judul"			=> "Dashboard",
			"keterangan"		=> "Contoh Keterangan",
			"halaman"			=> "dasboard",
			"view"			=> "dasboard",
			
			// Jumlah Data Setiap Card Menu
			"jml_user"		=> $this->M_dasbor->total_user("", "user"),
			"jml_berkas"		=> $this->M_dasbor->total_berkas("", "manajerial"),
			"jml_apl"			=> $this->M_dasbor->total_aplikasi("", "manajerial"),
			
			"jml_paket"		=> $this->M_dasbor->total_paket(NULL, "paket_soal"),
			"jml_soal"		=> $this->M_dasbor->total_soal_dashboard(NULL, "daftar_soal"),

			// Grafik Pie & Total Responden Berdasarkan Kategori Responden
			"jml_dosen"		=> $this->M_dasbor->total_dosen(NULL, "kuesioner"),
			"jml_mahasiswa"	=> $this->M_dasbor->total_mahasiswa(NULL, "kuesioner"),
			"jml_TI"			=> $this->M_dasbor->total_TI(NULL, "kuesioner"),
			"jml_ASP"			=> $this->M_dasbor->total_ASP(NULL, "kuesioner"),
			"jml_KOM"			=> $this->M_dasbor->total_KOM(NULL, "kuesioner"),
			"jml_AK"			=> $this->M_dasbor->total_AK(NULL, "kuesioner"),
			"jml_FARM"		=> $this->M_dasbor->total_FARM(NULL, "kuesioner"),
			"jml_PER"			=> $this->M_dasbor->total_PER(NULL, "kuesioner"),
			"jml_BID"			=> $this->M_dasbor->total_BID(NULL, "kuesioner"),
			"jml_MSN"			=> $this->M_dasbor->total_MSN(NULL, "kuesioner"),
			"jml_DKV"			=> $this->M_dasbor->total_DKV(NULL, "kuesioner"),
			"jml_PRWT"		=> $this->M_dasbor->total_PRWT(NULL, "kuesioner"),
			"jml_ELKTR"		=> $this->M_dasbor->total_ELKTR(NULL, "kuesioner"),
			"jml_baik"		=> $this->M_dasbor->label_baik(["id_paket"], "klasifikasi"),
			"jml_kurang"		=> $this->M_dasbor->label_kurang(["id_paket"], "klasifikasi"),
			"jml_saran"		=> $this->M_dasbor->jumlah_saran(["id_paket"], "klasifikasi"),

			"data_pertanyaan"	=> $this->M_Universal->getMulti(["id_paket"], "paket_soal"),

			"data_pie"		=> $this->M_dasbor->grafik_pie(NULL, "kuesioner"),
			"data_responden"	=> $this->M_dasbor->total_responden(["id_paket"], "paket_soal"),
			"data_manajerial"	=> $this->M_dasbor->grafik_manajerial(NULL, "manajerial"),
			"data_paket"		=> $this->M_Universal->getMulti(["id_paket"], "paket_soal"),

			"data_klasifikasi"	=> $this->M_Universal->getMulti(["id_paket"], "paket_soal"),

			"data_shared"		=> $this->M_Universal->getMulti(NULL, "shared_link"),

			"data_jawaban" 	=> $this->M_Universal->get_kuesioner_new(["kuesioner.id_paket_jawaban" => dekrip(uri(3))]),

			"jml_prodi"		=> $this->M_dasbor->total_prodi("", "prodi"),
			"user" => $data_user,
			"paket"			=> $data_paket
	   );
	   return $data;
	}

	public function index()
	{
		$this->load->view('template', $this->meta());
	}
}