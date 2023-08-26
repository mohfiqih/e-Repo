<?php defined('BASEPATH') or exit('No direct script access allowed');


class Kuesioner extends MY_Controller
{
	public function __construct()
	{
		// Load the constructer from MY_Controller
		parent::__construct();
		$this->cek_login();
	}

	public function skala()
	{
	   $data_user	= $this->M_Universal->getOne(["user_id" => $this->user_id], "user");
	   $this->username_id = $data_user->username_id;
        $data = array(
			"judul"		=> "Bank Berkas",
			"keterangan"	=> "Contoh Keterangan",
			"halaman"		=> "skala",
			"view"		=> "skala",
			"data_soal"	=> $this->M_Universal->get_soal_kuesioner(["daftar_soal.paket_id" => dekrip(uri(3))]),
			"data_paket"	=> $this->M_Universal->getMulti(["id_paket" => dekrip(uri(3))], "paket_soal"),
			"data_jawaban" => $this->M_Universal->get_kuesioner_new(["kuesioner.id_paket_jawaban" => dekrip(uri(3))]),
			"user"		=> $data_user,
	   );
	   
	   $this->load->view('skala', $data);
	}

	# New Coding
	public function tambah_soal()
	{
		$this->db->order_by('id_soal', 'asc');
		$id_soal 		= $this->db->get_where('daftar_soal', array('paket_id'=> $this->input->post("id_paket_jawaban")));
		$type_soal 	= $this->db->get_where('daftar_soal', array('type_soal'=> $this->input->post("type_soal")));
		// $id_paket		= "id_paket_jawaban='" . dekrip(uri(3)) . "' ";

		$data= [];
		foreach ($id_soal->result() as $row) {

			$data[] = array(
				"id_identitas"			=> $this->input->post("id_identitas"),
				"nama_lengkap"			=> $this->input->post("nama_lengkap"),
				"prodi"				=> $this->input->post("prodi"),
				"sebagai"				=> $this->input->post("sebagai"),
				"gender"				=> $this->input->post("gender"),
				"id_paket_jawaban"		=> $this->input->post("id_paket_jawaban"),
				"id_soal_kuesioner"		=> $row->id_soal,
				"type_soal"			=> $row->type_soal,
				"jawaban"				=> $this->input->post("jawaban" .$row->id_soal),
				"datecreated"			=> $this->input->post("datecreated"),
			);
		}
		// var_dump($data);

		$tambah = $this->db->insert_batch('kuesioner', $data);

		if ($tambah) {
			$this->session->set_flashdata('notif_berhasil_soal', 'Berhasil mengirim pilihan kuesioner!');
			redirect('kuesioner/saran/' . uri(3), 'refresh');
			
		} else {
			$this->session->set_flashdata('notif_gagal_soal', 'Gagal mengirim jawaban!');
			redirect('kuesioner/saran/' . uri(3), 'refresh');
		};
	}

	public function saran()
	{
		$data_user	= $this->M_Universal->getOne(["user_id" => $this->user_id], "user");
		$this->username_id = $data_user->username_id; 
		$data = array(
			"judul"		=> "Halaman Kuesioner",
			"halaman"		=> "saran",
			"view"		=> "saran",
			// "data_soal"	=> $this->M_Universal->get_soal_kuesioner(["daftar_soal.paket_id" => dekrip(uri(3))]),
			"data_paket"	=> $this->M_Universal->getMulti(["id_paket" => dekrip(uri(3))], "paket_soal"),
			"data_jawaban" 	=> $this->M_Universal->get_kuesioner_new(["kuesioner.id_paket_jawaban" => dekrip(uri(3))]),
			"user"		=> $data_user,
		);

		$this->load->view('saran', $data);
	}

	public function form()
	{
		$data_user = $this->M_Universal->getOne(["user_id" => $this->user_id], "user");
		$this->username_id = $data_user->username_id; // Set $this->username_id dengan nilai dari $data_user->username_id

		$data = array(
			"judul" 			=> "Halaman Kuesioner",
			"halaman" 		=> "form",
			"view" 			=> "form",
			"data_paket" 		=> $this->M_Universal->getMulti(["id_paket" => dekrip(uri(3))], "paket_soal"),
			"data_shared"		=> $this->M_Universal->getMulti(NULL, "shared_link"),
			"data_jawaban" 	=> $this->M_Universal->get_kuesioner_new(["kuesioner.id_paket_jawaban" => dekrip(uri(3))]),
			"user" 			=> $data_user,
		);

		$this->load->view('form', $data);
	}


	public function terimakasih()
	{
	    $data_user	= $this->M_Universal->getOne(["user_id" => $this->user_id], "user");
		$data = array(
			"judul"			=> "Halaman Kuesioner",
			"halaman"			=> "end",
			"view"			=> "end",
			"user"		=> $data_user,
		);

		$this->load->view('end', $data);
	}
	
	public function rating()
	{
	    $data_user	= $this->M_Universal->getOne(["user_id" => $this->user_id], "user");
	    $this->username_id = $data_user->username_id;
		$data = array(
			"judul"			=> "Halaman Kuesioner",
			"halaman"		=> "rating",
			"view"			=> "rating",
			"data_jawaban" 	=> $this->M_Universal->get_kuesioner_new(["kuesioner.id_paket_jawaban" => dekrip(uri(3))]),
			"user"		=> $data_user,
		);

		$this->load->view('rating', $data);
	}

	public function save_rating()
	{
		$data = array(
		    "id_identitas"	=> $this->input->post("id_identitas"),
		    "nama_lengkap"	=> $this->input->post("nama_lengkap"),
		    "sebagai"	=> $this->input->post("sebagai"),
		    "prodi"	=> $this->input->post("prodi"),
			"bintang"	=> $this->input->post("bintang"),
			"feedback"	=> $this->input->post("feedback"),
		);

		// var_dump($data);die;
		$tambah 	= $this->M_Universal->insert($data, "rating");

		if ($tambah){
			$this->session->set_flashdata('notifikasi_tambah', 'Data manajerial berhasil ditambahkan!');
			redirect('kuesioner/terimakasih', 'refresh');
		} else {
			$this->session->set_flashdata('notifikasi_gagal_tambah', 'Data manajerial gagal ditambahkan!');
			redirect('kuesioner/terimakasih', 'refresh');
		};
	}
}

	