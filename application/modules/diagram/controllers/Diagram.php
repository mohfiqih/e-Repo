<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Diagram extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

    /**
     * [__construct description]
     *
     * @method __construct
     */
    public function __construct()
    {
        // Load the constructer from MY_Controller
        parent::__construct();
		$this->cek_login();
		$this->load->model('M_chart');
    }

    /**
     * [index description]
     *
     * @method index
     *
     * @return [type] [description]
     */
	public function meta()
	{
	  $data_user	= $this->M_Universal->getOne(["user_id" => $this->user_id], "user");

        $data = array(
			"judul"			=> "Dashboard",
			"keterangan"		=> "Contoh Keterangan",
			"halaman"			=> "view_chart",
			"view"			=> "view_chart",

			// Grafik Pie & Total Responden Berdasarkan Kategori Responden
			"jml_dosen"		=> $this->M_chart->total_dosen(NULL, "kuesioner"),
			"jml_mahasiswa"	=> $this->M_chart->total_mahasiswa(NULL, "kuesioner"),
			"jml_TI"			=> $this->M_chart->total_TI(NULL, "kuesioner"),
			"jml_ASP"			=> $this->M_chart->total_ASP(NULL, "kuesioner"),
			"jml_KOM"			=> $this->M_chart->total_KOM(NULL, "kuesioner"),
			"jml_AK"			=> $this->M_chart->total_AK(NULL, "kuesioner"),
			"jml_FARM"		=> $this->M_chart->total_FARM(NULL, "kuesioner"),
			
			"jml_PER"			=> $this->M_chart->total_PER(NULL, "kuesioner"),
			"jml_BID"			=> $this->M_chart->total_BID(NULL, "kuesioner"),
			"jml_MSN"			=> $this->M_chart->total_MSN(NULL, "kuesioner"),
			"jml_DKV"			=> $this->M_chart->total_DKV(NULL, "kuesioner"),
			"jml_PRWT"		=> $this->M_chart->total_PRWT(NULL, "kuesioner"),
			"jml_ELKTR"		=> $this->M_chart->total_ELKTR(NULL, "kuesioner"),
			
			"data_pie"		=> $this->M_chart->grafik_pie(NULL, "kuesioner"),
			"data_responden"	=> $this->M_chart->total_responden(["id_paket"], "paket_soal"),
			"data_manajerial"	=> $this->M_chart->grafik_manajerial(NULL, "manajerial"),
			
			"data_paket"		=> $this->M_Universal->getMulti(["id_paket"], "paket_soal"),

			"data_klasifikasi"	=> $this->M_Universal->getMulti(["id_paket"], "paket_soal"),

			"jml_baik"		=> $this->M_chart->label_baik(["id_paket"], "klasifikasi"),
			"jml_kurang"		=> $this->M_chart->label_baik(["id_paket"], "klasifikasi"),
			
			"user"			=> $data_user,
	   );
	   return $data;
	}

	public function index()
	{
		$this->load->view('template', $this->meta());
	}
}