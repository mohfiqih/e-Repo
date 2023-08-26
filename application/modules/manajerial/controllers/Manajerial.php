<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Manajerial extends MY_Controller {

    public function __construct()
    {
        // Load the constructer from MY_Controller
        parent::__construct();
		$this->cek_login();
		$this->load->model('M_manajerial');
    }

	public function meta()
	{
	  $data_user	= $this->M_Universal->getOne(["user_id" => $this->user_id], "user");
        $data = array(
			"judul"			=> "Jadwal",
			"keterangan"		=> "Contoh Keterangan",
			"halaman"			=> "manajerial",
			"view"			=> "manajerial",
			"data_manajemen"	=> $this->M_manajerial->get_manajerial(NULL, "manajerial"),
			"jml_data"		=> $this->M_manajerial->total_data("", "manajerial"),
			"data_edit"		=> $this->M_Universal->getMulti(["id_m" => dekrip(uri(3))], "manajerial"),
			"user"			=> $data_user,
	   );
	   return $data;
	}

	public function index()
	{
		$this->load->view('template', $this->meta());
	}

	public function edit()
	{
		$data		= $this->meta();
		$data["edit"]	= $this->M_Universal->getOne(["id_m" => dekrip(uri(3))], "manajerial");
		
		$this->load->view('template', $data);
	}
	
	public function lihat()
	{
		$data_user	= $this->M_Universal->getOne(["user_id" => $this->user_id], "user");
		$data = array(
			"judul"			=> "Detail Data",
			"halaman"			=> "lihat_data",
			"view"			=> "lihat_data",
			"jml_berkas"		=> $this->M_manajerial->total_berkas("", "berkas"),
			"data_manajemen"	=> $this->M_manajerial->get_manajerial(["id_m" => dekrip(uri(3))], "manajerial"),
			"user"			=> $data_user
		);
		$this->load->view('template', $data);
	}

	// fungsi
	# Fungsi Tambah Manajerial
     public function tambah()
	{
		$data = array(
			"nama_apl"		=> $this->input->post("nama_apl"),
			"versi_apl"	   	=> $this->input->post("versi_apl"),
			"tgl_publish"		=> $this->input->post("tgl_publish"),
			"penyedia_apl"		=> $this->input->post("penyedia_apl"),
			"link_berkas"		=> $this->input->post("link_berkas"),
		);

		// var_dump($data);die;
		$tambah 	= $this->M_Universal->insert($data, "manajerial");

		if ($tambah){
			$this->session->set_flashdata('notifikasi_tambah', 'Data manajerial berhasil ditambahkan!');
			redirect(uri(1), 'refresh');
		} else {
			$this->session->set_flashdata('notifikasi_gagal_tambah', 'Data manajerial gagal ditambahkan!');
			redirect(uri(1), 'refresh');
		};
	}

     # Fungsi Update Paket
     public function update()
	{
		$id_m	= dekrip($this->input->post("id_m"));
		$data		= array(
			"nama_apl"		=> $this->input->post("nama_apl"),
			"versi_apl"	   	=> $this->input->post("versi_apl"),
			"tgl_publish"		=> $this->input->post("tgl_publish"),
			"penyedia_apl"		=> $this->input->post("penyedia_apl"),
			"link_berkas"		=> $this->input->post("link_berkas"),
		);

		$update = $this->M_Universal->update($data, ["id_m" => $id_m], "manajerial");

		if ($update) {
			$this->session->set_flashdata('notifikasi_update', 'Data manajerial berhasil diupdate!');
			redirect(uri(1), 'refresh');
		} else {
			$this->session->set_flashdata('notifikasi_gagal_update', 'Data manajerial gagal diupdate!');
			redirect(uri(1), 'refresh');
		};
	}

	public function hapus()
	{
		$hapus = $this->M_Universal->delete(["id_m" => dekrip(uri(3))], "manajerial");
		
		if ($hapus){
			$this->session->set_flashdata('notifikasi_hapus', 'Data manajerial berhasil dihapus');
			redirect(uri(1), 'refresh');
		} else {
			$this->session->set_flashdata('notifikasi_gagal_hapus', 'Data manajerial gagal dihapus');
			redirect(uri(1), 'refresh');
		};
	}

	
	// public function tambah()
	// {
	// 	$config['upload_path'] = './assets/upload/'; //path folder
	// 	$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|doc|docx|xlsx|sql|mp4|zip|rar|exe'; //type yang dapat diakses bisa anda sesuaikan
	// 	$config['encrypt_name'] = FALSE; //nama yang terupload nantinya

	// 	$this->upload->initialize($config);

	// 	if(!empty($_FILES['file']['name']))
	//             {
	//                 if ($this->upload->do_upload('file'))
	//                 {
	//                         $gbr = $this->upload->data();
	//                         //Compress Image
	//                         $config['image_library']='gd2';
	//                         $config['source_image']='./assets/upload/'.$gbr['file_name'];
	//                         $config['create_thumb']= FALSE;
	//                         $config['maintain_ratio']= FALSE;
	//                         $config['quality']= '100%';
	//                         $config['new_image']= './assets/upload/'.$gbr['file_name'];
	//                         $this->load->library('image_lib', $config);
	//                         $this->image_lib->resize();

	//                         $file=$gbr['file_name'];
	// 						$data = array(
	// 							"nama_apl"		=> $this->input->post("nama_apl"),
	// 							"versi_apl"	   	=> $this->input->post("versi_apl"),
	// 							"tgl_publish"		=> $this->input->post("tgl_publish"),
	// 							"penyedia_apl"		=> $this->input->post("penyedia_apl"),
	// 							"link_berkas"		=> $this->input->post("link_berkas"),
	// 							"judul" 			=> $file
	// 						);
								
	// 						$tambah = $this->M_Universal->insert($data, "manajerial");

	// 						if ($tambah){
	// 							$this->session->set_flashdata('notifikasi_tambah', 'Data manajerial berhasil ditambahkan!');
	// 		 					redirect(uri(1), 'refresh');
	// 						} else {
	// 							$this->session->set_flashdata('notifikasi_gagal_tambah', 'Data manajerial gagal ditambahkan!');
	// 		 					redirect(uri(1), 'refresh');
	// 						};
  
	//                 }else{
	// 				$this->session->set_flashdata('notifikasi_gagal_tambah', 'Data manajerial gagal ditambahkan!');
	// 		 		redirect(uri(1), 'refresh');
	//                 }           
	//     }else{					
	// 	if ($tambah){
	// 		 $this->session->set_flashdata('notifikasi_tambah', 'Data manajerial berhasil ditambahkan!');
	// 		 redirect(uri(1), 'refresh');
	// 	} else {
	// 		$this->session->set_flashdata('notifikasi_gagal_tambah', 'Data manajerial gagal ditambahkan!');
	// 		 redirect(uri(1), 'refresh');
	// 	};
	//     }
	// }
	
	// public function update()
	// {
	// 	$id_m	= dekrip($this->input->post("id_m"));
		
	// 	$config['upload_path'] = './assets/upload/'; //path folder
	// 	$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|doc|docx'; //type yang dapat diakses bisa anda sesuaikan
	// 	$config['encrypt_name'] = FALSE; //nama yang terupload nantinya

	// 	$this->upload->initialize($config);

	// 	if(!empty($_FILES['file']['name']))
	//      {
	//                 if ($this->upload->do_upload('file'))
	//                 {
	//                         $gbr = $this->upload->data();
	//                         $config['image_library']='gd2';
	//                         $config['source_image']='./assets/upload/'.$gbr['file_name'];
	//                         $config['create_thumb']= FALSE;
	//                         $config['maintain_ratio']= FALSE;
	//                         $config['quality']= '100%';
	//                         $config['new_image']= './assets/upload/'.$gbr['file_name'];
	//                         $this->load->library('image_lib', $config);
	//                         $this->image_lib->resize();

	//                         $gambar=$gbr['file_name'];

	// 						$data = array(
	// 							"nama_apl"		=> $this->input->post("nama_apl"),
	// 							"versi_apl"		=> $this->input->post("versi_apl"),
	// 							"tgl_publish"		=> $this->input->post("tgl_publish"),
	// 							"penyedia_apl"		=> $this->input->post("penyedia_apl"),
	// 							"link_berkas"		=> $this->input->post("link_berkas"),
	// 							"judul" 			=> $gambar
	// 						);
								
	// 						$update = $this->M_Universal->update($data, ["id_m" => $id_m], "manajerial");

	// 						if ($update){
	// 							$this->session->set_flashdata('notifikasi_berhasil_update', 'Data manajerial berhasil diupdate!');
	// 							redirect(uri(1), 'refresh');
	// 						} else {
	// 							$this->session->set_flashdata('notifikasi_gagal_update', 'Data manajerial gagal diupdate!');
	// 							redirect(uri(1), 'refresh');
	// 						};
  
	//                 } else {
	// 				notifikasi_redirect("error", "Gagal mengupdate data", uri(1));
	//                 }          
	//     } else{				
	// 	if ($update){
	// 		$this->session->set_flashdata('notifikasi_berhasil_update', 'Data manajerial berhasil diupdate!');
	// 		redirect(uri(1), 'refresh');
	// 	} else {
	// 		$this->session->set_flashdata('notifikasi_gagal_update', 'Data manajerial gagal diupdate!');
	// 		redirect(uri(1), 'refresh');
	// 	};

	//     }
	// }
	
	// public function export_manajerial()
	// {
	// 	$data	= array(
	// 		"nama_apl"			=> $this->input->post("nama_aplikasi"),
	// 		"versi_apl"			=> $this->input->post("versi_aplikasi"),
	// 		"tgl_publish"		     => $this->input->post("tgl_aplikasi"),
	// 		"penyedia_apl"		     => $this->input->post("penyedia_aplikasi"),
	// 		"data_manajerial"		=> $this->M_manajerial->get_manajerial(NULL, "manajerial"),
	// 	);
	  
	// 	 $this->load->library('pdf');
	// 	 $this->pdf->setPaper('A4', 'landscape');
	// 	 $this->pdf->filename = "laporan-manajerial.pdf";
	// 	 $this->pdf->load_view('laporan_manajerial_pdf', $data);
	// }
}