<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Link_kuesioner extends MY_Controller {

    public function __construct()
    {
        // Load the constructer from MY_Controller
        parent::__construct();
		$this->cek_login();
		// $this->load->model('M_Link');
    }

    public function meta()
	{
	  $data_user	= $this->M_Universal->getOne(["user_id" => $this->user_id], "user");
        $data = array(
			"judul"			=> "Link",
			"keterangan"		=> "Link",
			"halaman"			=> "Link Kuesioner",
			"view"			=> "link",
			"data_paket"	=> $this->M_Universal->getMulti(NULL, "paket_soal"),
			"user"			=> $data_user,
	   );
	   return $data;
	}

	public function index()
	{
		$this->load->view('template', $this->meta());
	}

	// Shared Link
	public function shared()
	{
	  $data_user	= $this->M_Universal->getOne(["user_id" => $this->user_id], "user");

        $data = array(
			"judul"			=> "Dashboard",
			"keterangan"		=> "Contoh Keterangan",
			"halaman"			=> "shared_link/shared",
			"view"			=> "shared_link/shared",
               "data_shared"	     => $this->M_Universal->getMulti(NULL, "shared_link"),
			"user"			=> $data_user,
	   );
	   $this->load->view('template', $data);
	}

     # Fungsi Tambah Paket
     public function tambah_link()
	{
		$data = array(
			"link_kuesioner"		=> $this->input->post("link_kuesioner"),
			"nama_kuesioner"		=> $this->input->post("nama_kuesioner"),
			"responden"		        => $this->input->post("responden"),
		);

		$tambah = $this->M_Universal->insert($data, "shared_link");

		if ($tambah) {
			$this->session->set_flashdata('notif_share_success', 'Berhasil Share Link!');
			redirect('link_kuesioner/shared', 'refresh');
		} else {
			$this->session->set_flashdata('notif_share_gagal', 'Gagal Share Link!');
			redirect('link_kuesioner/shared', 'refresh');
		};
	}

	public function hapus_link()
	{
		$hapus 	= $this->M_Universal->delete(["id" => dekrip(uri(3))], "shared_link");

		if ($hapus) {
			$this->session->set_flashdata('hapus_share_success', 'Berhasil Hapus link!');
			redirect('link_kuesioner/shared', 'refresh');
		} else {
			$this->session->set_flashdata('hapus_share_gagal', 'Berhasil Hapus link!');
			redirect('link_kuesioner/shared', 'refresh');
		};
	}

	public function testing()
	{
		$data_user	= $this->M_Universal->getOne(["user_id" => $this->user_id], "user");
		$data = array(
			"judul"		=> "Halaman Kuesioner",
			"halaman"		=> "link_testing",
			"view"		=> "link_testing",
			"data_paket"	=> $this->M_Universal->getMulti(NULL, "paket_soal"),
			"user"		=> $data_user,
		);

		$this->load->view('template', $data);
	}
}