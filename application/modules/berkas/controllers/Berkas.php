<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Berkas extends MY_Controller {
	
    public function __construct()
    {
        // Load the constructer from MY_Controller
        parent::__construct();
	   $this->cek_login();
	   $this->load->model('M_berkas');	
    }


	public function meta()
	{
	   $data_user	= $this->M_Universal->getOne(["user_id" => $this->user_id], "user");
        $data = array(
			"judul"		=> "Bank Berkas",
			"keterangan"	=> "Contoh Keterangan",
			"halaman"		=> "data_berkas",
			"view"		=> "data_berkas",
			"data_berkas"	=> $this->M_Universal->getMulti(NULL, "manajerial"),
			"user"		=> $data_user
	   );
		return $data;
	}

	public function index()
	{
		$this->load->view('template', $this->meta());
	}

	// public function upload()
	// {
	//    $data_user	= $this->M_Universal->getOne(["user_id" => $this->user_id], "user");
     //    $data = array(
	// 		"judul"		=> "Tambah Berkas",
	// 		"halaman"		=> "tambah_file",
	// 		"view"		=> "tambah_file",
	// 		"user"		=> $data_user
	//    );
	//    $this->load->view('template', $data);
	// }

	public function download($id_m){
		$this->load->helper('download');
		$fileinfo = $this->M_berkas->download($id_m);
		$d = 'assets/upload/'.$fileinfo['judul'];
		force_download($d, NULL);
	 }

	public function lihat()
	{
	   $data_user	= $this->M_Universal->getOne(["user_id" => $this->user_id], "user");
        $data = array(
			"judul"		=> "Detail Berkas",
			"halaman"		=> "lihat_berkas",
			"view"		=> "lihat_berkas",
			"jml_berkas"	=> $this->M_berkas->total_berkas(["id_m" => dekrip(uri(3))], "manajerial"),
			"data_berkas"	=> $this->M_Universal->getMulti(["id_m" => dekrip(uri(3))], "manajerial"),
			"user"		=> $data_user
	   );
	   $this->load->view('template', $data);
	}

	public function prosesUpload(){
		// Panggil Model M_Welcome
		$this->load->model('M_berkas');
		
		// Hitung Jumlah File/Gambar yang dipilih
		$jumlahData = count($_FILES['berkas']['name']);

		// Lakukan Perulangan dengan maksimal ulang Jumlah File yang dipilih
		for ($i=0; $i < $jumlahData ; $i++):

			// Inisialisasi Nama,Tipe,Dll.
			$_FILES['file']['name']     = $_FILES['berkas']['name'][$i];
			$_FILES['file']['type']     = $_FILES['berkas']['type'][$i];
			$_FILES['file']['tmp_name'] = $_FILES['berkas']['tmp_name'][$i];
			$_FILES['file']['size']     = $_FILES['berkas']['size'][$i];

			// Konfigurasi Upload
			$config['upload_path']          = './assets/upload/';
			$config['allowed_types']        = 'gif|jpg|png|pdf|doc|docx|xlsx|zip|rar|sql';

			// Memanggil Library Upload dan Setting Konfigurasi
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if($this->upload->do_upload('file')){ // Jika Berhasil Upload

				$fileData = $this->upload->data(); // Lakukan Upload Data

				// Membuat Variable untuk dimasukkan ke Database
				$uploadData[$i]['judul'] = $fileData['file_name']; 					
			}

		endfor; // Penutup For

		 if($uploadData !== null){ // Jika Berhasil Upload

			// Insert ke Database  
			$insert = $this->M_berkas->upload($uploadData);
			
			if ($insert){	
				notifikasi_redirect("success", "Berhasil menambah berkas", uri(1));
			} else {
				notifikasi_redirect("error", "Gagal menambah berkas", uri(1));
			};

		}
	}

	public function hapus()
	{
		$hapus = $this->M_Universal->delete(["id" => dekrip(uri(3))], "berkas");
		
		if ($hapus){
			notifikasi_redirect("success", "Hapus berkas berhasil", uri(1));
		} else {
			notifikasi_redirect("error", "Hapus berkas gagal", uri(1));
		};
	}
}