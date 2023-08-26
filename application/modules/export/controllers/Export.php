<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Export extends MY_Controller {

    public function __construct()
    {
        // Load the constructer from MY_Controller
        parent::__construct();
	   $this->cek_login();
	   $this->load->model('M_export');
    }

	public function meta_pdf()
	{
	  $data_user	= $this->M_Universal->getOne(["user_id" => $this->user_id], "user");
        $data = array(
			"judul"			=> "Jadwal",
			"keterangan"		=> "Contoh Keterangan",
			"halaman"			=> "export_pdf",
			"view"			=> "export_pdf",
			"user"			=> $data_user,
	   );
	   return $data;
	}

	public function pdf()
	{
		$this->load->view('template', $this->meta_pdf());
	}

	public function meta_excel()
	{
	  $data_user	= $this->M_Universal->getOne(["user_id" => $this->user_id], "user");
        $data = array(
			"judul"			=> "Jadwal",
			"keterangan"		=> "Contoh Keterangan",
			"halaman"			=> "export_excel",
			"view"			=> "export_excel",
			"user"			=> $data_user,
	   );
	   return $data;
	}

	public function excel()
	{
		$this->load->view('template', $this->meta_excel());
	}

	// ----------------- Export Manajerial Data ------------------ #
	public function export_manajerial_pdf()
	{
		$data	= array(
			"data_manajerial"		=> $this->M_export->get_manajerial(NULL, "manajerial"),
		);
	  
		 $this->load->library('pdf');
		 $this->pdf->setPaper('A4', 'landscape');
		 $this->pdf->filename = "laporan-manajerial.pdf";
		 $this->pdf->load_view('pdf/laporan_manajerial_pdf', $data);
	}

	public function print_manajerial()
	{
		$data	= array(
			"data_manajerial"		=> $this->M_export->get_manajerial(NULL, "manajerial"),
		);
	
		 $this->load->view('print/print_manajerial', $data);
	}
	
	public function export_manajerial_excel()
	{
		$data['manajerial'] = $this->M_export->get_manajerial(NULL, "manajerial");
		require(APPPATH. 'libraries/PHPExcel-1.8/Classes/PHPExcel.php');
		require(APPPATH. 'libraries/PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');
		
		 $object = new PHPExcel();
		 $object->getProperties()->setCreator("Sistem e-Repo");
		 $object->getProperties()->setLastModifiedBy("Sistem e-Repo");
		 $object->getProperties()->setTitle("Data Manajerial");
		 
		 $object->setActiveSheetIndex(0);

		 $object->getActiveSheet()->setCellValue('A1', 'No');
		 $object->getActiveSheet()->setCellValue('B1', 'Nama Sistem');
		 $object->getActiveSheet()->setCellValue('C1', 'Versi Sistem');
		 $object->getActiveSheet()->setCellValue('D1', 'Tanggal Publish');
		 $object->getActiveSheet()->setCellValue('E1', 'Penyedia');
		 $object->getActiveSheet()->setCellValue('F1', 'Link Berkas');
		 $object->getActiveSheet()->setCellValue('G1', 'Nama Berkas');

		 $baris = 2;
		 $no = 1;

		 foreach ($data['manajerial'] as $manajerial) {
			$object->getActiveSheet()->setCellValue('A'.$baris, $no++);
			$object->getActiveSheet()->setCellValue('B'.$baris, $manajerial->nama_apl);
			$object->getActiveSheet()->setCellValue('C'.$baris, $manajerial->versi_apl);
			$object->getActiveSheet()->setCellValue('D'.$baris, $manajerial->tgl_publish);
			$object->getActiveSheet()->setCellValue('E'.$baris, $manajerial->penyedia_apl);
			$object->getActiveSheet()->setCellValue('F'.$baris, $manajerial->link_berkas);
			$object->getActiveSheet()->setCellValue('G'.$baris, $manajerial->judul);

			$baris++;
		 }
		 
		 $filename= "Data Manajerial".'.xlsx';
		 $object->getActiveSheet()->setTitle("Data Manajerial");
		 header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		 header('Content-Disposition: attachment;filename="'.$filename. '"');
		 header('Cache-Control: max-age=0');

		 $writer = PHPExcel_IOFactory::createwriter($object, 'Excel2007');
		 $writer->save('php://output');
		 exit;
	}

	// ----------------- Export Berkas Data ------------------ #
	public function export_berkas_pdf()
	{
		$data	= array(
			"data_berkas"	=> $this->M_Universal->getMulti(NULL, "berkas"),
		);
	  
		 $this->load->library('pdf');
		 $this->pdf->setPaper('A4', 'landscape');
		 $this->pdf->filename = "laporan-berkas.pdf";
		 $this->pdf->load_view('pdf/laporan_berkas_pdf', $data);
	}

	public function print_berkas()
	{
		$data	= array(
			"data_berkas"		=> $this->M_export->get_manajerial(NULL, "manajerial"),
		);
	  
		 $this->load->view('print/print_berkas', $data);
	}
	
	public function export_berkas_excel()
	{
		$data['manajerial'] = $this->M_export->get_manajerial(NULL, "manajerial");
		require(APPPATH. 'libraries/PHPExcel-1.8/Classes/PHPExcel.php');
		require(APPPATH. 'libraries/PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');
		
		 $object = new PHPExcel();
		 $object->getProperties()->setCreator("Sistem e-Repo");
		 $object->getProperties()->setLastModifiedBy("Sistem e-Repo");
		 $object->getProperties()->setTitle("Data Berkas");
		 
		 $object->setActiveSheetIndex(0);

		 $object->getActiveSheet()->setCellValue('A1', 'No');
		 $object->getActiveSheet()->setCellValue('B1', 'Nama Sistem');
		 $object->getActiveSheet()->setCellValue('C1', 'Versi Sistem');
		 $object->getActiveSheet()->setCellValue('D1', 'Tanggal Berkas');
		 $object->getActiveSheet()->setCellValue('E1', 'Penyedia');
		 $object->getActiveSheet()->setCellValue('F1', 'Link Berkas');
		 $object->getActiveSheet()->setCellValue('G1', 'Nama Berkas');

		 $baris = 2;
		 $no = 1;

		 foreach ($data['manajerial'] as $manajerial) {
			$object->getActiveSheet()->setCellValue('A'.$baris, $no++);
			$object->getActiveSheet()->setCellValue('B'.$baris, $manajerial->nama_apl);
			$object->getActiveSheet()->setCellValue('C'.$baris, $manajerial->versi_apl);
			$object->getActiveSheet()->setCellValue('D'.$baris, $manajerial->tgl_publish);
			$object->getActiveSheet()->setCellValue('E'.$baris, $manajerial->penyedia_apl);
			$object->getActiveSheet()->setCellValue('F'.$baris, $manajerial->link_berkas);
			$object->getActiveSheet()->setCellValue('G'.$baris, $manajerial->judul);

			$baris++;
		 }
		 
		 $filename= "Data Berkas".'.xlsx';
		 $object->getActiveSheet()->setTitle("Data Berkas");
		 header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		 header('Content-Disposition: attachment;filename="'.$filename. '"');
		 header('Cache-Control: max-age=0');

		 $writer = PHPExcel_IOFactory::createwriter($object, 'Excel2007');
		 $writer->save('php://output');
		 exit;
	}

	// ----------------- Export Paket Kuesioner ------------------ #
	public function export_paket_pdf()
	{
		$data	= array(
			"data_paket"	=> $this->M_Universal->getMulti(NULL, "paket_soal"),
		);
	  
		 $this->load->library('pdf');
		 $this->pdf->setPaper('A4', 'landscape');
		 $this->pdf->filename = "laporan-paket.pdf";
		 $this->pdf->load_view('pdf/laporan_paket_pdf', $data);
	}

	public function print_paket()
	{
		$data	= array(
			"data_paket"		=> $this->M_Universal->getMulti(NULL, "paket_soal"),
		);
	  
		 $this->load->view('print/print_paket', $data);
	}
	
	public function export_paket_excel()
	{
		$data['paket_soal'] = $this->M_Universal->getMulti(NULL, "paket_soal");
		require(APPPATH. 'libraries/PHPExcel-1.8/Classes/PHPExcel.php');
		require(APPPATH. 'libraries/PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');
		
		 $object = new PHPExcel();
		 $object->getProperties()->setCreator("Sistem e-Repo");
		 $object->getProperties()->setLastModifiedBy("Sistem e-Repo");
		 $object->getProperties()->setTitle("Data Paket");
		 
		 $object->setActiveSheetIndex(0);

		 $object->getActiveSheet()->setCellValue('A1', 'No');
		 $object->getActiveSheet()->setCellValue('B1', 'Nama Paket');
		 $object->getActiveSheet()->setCellValue('C1', 'Sistem');
		 $object->getActiveSheet()->setCellValue('D1', 'Versi Sistem');
		 $object->getActiveSheet()->setCellValue('E1', 'Tanggal Kuesioner');
		 $object->getActiveSheet()->setCellValue('F1', 'Responden');
		 $object->getActiveSheet()->setCellValue('G1', 'Pertanyaan');

		 $baris = 2;
		 $no = 1;

		 foreach ($data['paket_soal'] as $paket) {
			$object->getActiveSheet()->setCellValue('A'.$baris, $no++);
			$object->getActiveSheet()->setCellValue('B'.$baris, $paket->nama_paket);
			$object->getActiveSheet()->setCellValue('C'.$baris, $paket->aplikasi);
			$object->getActiveSheet()->setCellValue('D'.$baris, $paket->versi_apl_paket);
			$object->getActiveSheet()->setCellValue('E'.$baris, $paket->tgl_kuesioner);
			$object->getActiveSheet()->setCellValue('F'.$baris, $paket->responden);
			$object->getActiveSheet()->setCellValue('G'.$baris, $paket->jumlah_soal);

			$baris++;
		 }
		 
		 $filename= "Data Paket".'.xlsx';
		 $object->getActiveSheet()->setTitle("Data Paket");
		 header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		 header('Content-Disposition: attachment;filename="'.$filename. '"');
		 header('Cache-Control: max-age=0');

		 $writer = PHPExcel_IOFactory::createwriter($object, 'Excel2007');
		 $writer->save('php://output');
		 exit;
	}

	// ----------------- Export Link Kuesioner ------------------ #
	public function export_link_pdf()
	{
		$data	= array(
			"data_paket"	=> $this->M_Universal->getMulti(NULL, "paket_soal"),
		);
	  
		 $this->load->library('pdf');
		 $this->pdf->setPaper('A4', 'landscape');
		 $this->pdf->filename = "laporan-link.pdf";
		 $this->pdf->load_view('pdf/laporan_link_pdf', $data);
	}

	public function print_link()
	{
		$data	= array(
			"data_paket"		=> $this->M_Universal->getMulti(NULL, "paket_soal"),
		);
	  
		 $this->load->view('print/print_link', $data);
	}
	
	public function export_link_excel()
	{
		$data['paket_soal'] = $this->M_Universal->getMulti(NULL, "paket_soal");
		require(APPPATH. 'libraries/PHPExcel-1.8/Classes/PHPExcel.php');
		require(APPPATH. 'libraries/PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');
		
		 $object = new PHPExcel();
		 $object->getProperties()->setCreator("Sistem e-Repo");
		 $object->getProperties()->setLastModifiedBy("Sistem e-Repo");
		 $object->getProperties()->setTitle("Link Kuesioner");
		 
		 $object->setActiveSheetIndex(0);

		 $object->getActiveSheet()->setCellValue('A1', 'No');
		 $object->getActiveSheet()->setCellValue('B1', 'Nama Paket');
		 $object->getActiveSheet()->setCellValue('C1', 'Sistem');
		 $object->getActiveSheet()->setCellValue('D1', 'Versi Sistem');
		 $object->getActiveSheet()->setCellValue('E1', 'Tanggal Kuesioner');
		 $object->getActiveSheet()->setCellValue('F1', 'Link Kuesioner');

		 $baris = 2;
		 $no = 1;

		 foreach ($data['paket_soal'] as $paket) {
			$link = base_url('kuesioner/form/') . enkrip($paket->id_paket);
			$object->getActiveSheet()->setCellValue('A'.$baris, $no++);
			$object->getActiveSheet()->setCellValue('B'.$baris, $paket->nama_paket);
			$object->getActiveSheet()->setCellValue('C'.$baris, $paket->aplikasi);
			$object->getActiveSheet()->setCellValue('D'.$baris, $paket->versi_apl_paket);
			$object->getActiveSheet()->setCellValue('E'.$baris, $paket->tgl_kuesioner);
			$object->getActiveSheet()->setCellValue('F'.$baris, $link);

		$baris++;
		}

		$filename= "Link Kuesioner".'.xlsx';
		$object->getActiveSheet()->setTitle("Link Kuesioner");
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="'.$filename. '"');
		header('Cache-Control: max-age=0');

		$writer = PHPExcel_IOFactory::createwriter($object, 'Excel2007');
		$writer->save('php://output');
		exit;
	}

	// ----------------- Export Pertanyaan ------------------ #
	public function export_pertanyaan_pdf()
	{
		$data	= array(
			"data_soal"		=> $this->M_export->get_soal(["daftar_soal.paket_id" => dekrip(uri(3))]),
			"data_paket"		=> $this->M_Universal->getMulti(["id_paket" => dekrip(uri(3))], "paket_soal"),
		);
	  
		 $this->load->library('pdf');
		 $this->pdf->setPaper('A4', 'landscape');
		 $this->pdf->filename = "laporan-pertanyaan.pdf";
		 $this->pdf->load_view('pdf/laporan_pertanyaan_pdf', $data);
	}

	public function print_pertanyaan()
	{
		$data	= array(
			"data_soal"		=> $this->M_export->get_soal(["daftar_soal.paket_id" => dekrip(uri(3))]),
			"data_paket"		=> $this->M_Universal->getMulti(["id_paket" => dekrip(uri(3))], "paket_soal"),
		);
	  
		 $this->load->view('print/print_pertanyaan', $data);
	}
	
	public function export_pertanyaan_excel()
	{
		$data['data_soal'] = $this->M_export->get_soal(["daftar_soal.paket_id" => dekrip(uri(3))]);
		$data['data_paket'] = $this->M_Universal->getMulti(["id_paket" => dekrip(uri(3))], "paket_soal");
		require(APPPATH. 'libraries/PHPExcel-1.8/Classes/PHPExcel.php');
		require(APPPATH. 'libraries/PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');
		
		 $object = new PHPExcel();
		 $object->getProperties()->setCreator("Sistem e-Repo");
		 $object->getProperties()->setLastModifiedBy("Sistem e-Repo");
		 $object->getProperties()->setTitle("Pertanyaan Kuesioner");
		 
		 $object->setActiveSheetIndex(0);

		//  $object->getActiveSheet()->setCellValue('B1', 'No');
		 $object->getActiveSheet()->setCellValue('B2', 'Nama Paket');
		 $object->getActiveSheet()->setCellValue('B3', 'Sistem');
		 $object->getActiveSheet()->setCellValue('B4', 'Versi Sistem');
		 $object->getActiveSheet()->setCellValue('B5', 'Responden');
		 $object->getActiveSheet()->setCellValue('B6', 'Jumlah Pertanyaan');
		 $object->getActiveSheet()->setCellValue('B7', 'Tanggal Kuesioner');
		 
		 $baris_paket = 1;
		 $no = 1;
		 
		 foreach ($data['data_paket'] as $data_paket) {
			// $object->getActiveSheet()->setCellValue('C'.$baris_paket++, $no++);
			$object->getActiveSheet()->setCellValue('C'.$baris_paket++, $data_paket->nama_paket);
			$object->getActiveSheet()->setCellValue('C'.$baris_paket++, $data_paket->aplikasi);
			$object->getActiveSheet()->setCellValue('C'.$baris_paket++, $data_paket->versi_apl_paket);
			$object->getActiveSheet()->setCellValue('C'.$baris_paket++, $data_paket->responden);
			$object->getActiveSheet()->setCellValue('C'.$baris_paket++, $data_paket->jumlah_soal);
			$object->getActiveSheet()->setCellValue('C'.$baris_paket++, $data_paket->tgl_kuesioner);

		$baris_paket++;
		}
		

		$object->getActiveSheet()->setCellValue('A9', 'No');
		$object->getActiveSheet()->setCellValue('B9', 'Pertanyaan');
		$object->getActiveSheet()->setCellValue('C9', 'SS');
		$object->getActiveSheet()->setCellValue('D9', 'S');
		$object->getActiveSheet()->setCellValue('E9', 'TS');
		$object->getActiveSheet()->setCellValue('F9', 'STS');
		$object->getActiveSheet()->setCellValue('G9', 'Link Kuesioner');
		 
		$baris_soal = 10;
		$no = 1;

		 foreach ($data['data_soal'] as $data_soal) {
			$link = base_url('kuesioner/form/') . enkrip($data_soal->id_paket);
			$object->getActiveSheet()->setCellValue('A'.$baris_soal, $no++);
			$object->getActiveSheet()->setCellValue('B'.$baris_soal, $data_soal->soal);
			$object->getActiveSheet()->setCellValue('C'.$baris_soal, $data_soal->sangat_setuju);
			$object->getActiveSheet()->setCellValue('D'.$baris_soal, $data_soal->setuju);
			$object->getActiveSheet()->setCellValue('E'.$baris_soal, $data_soal->tidak_setuju);
			$object->getActiveSheet()->setCellValue('F'.$baris_soal, $data_soal->sangat_tidak_setuju);
			$object->getActiveSheet()->setCellValue('G'.$baris_soal, $link);

		$baris_soal++;
		}

		$filename= "Data Pertanyaan".'.xlsx';
		$object->getActiveSheet()->setTitle("Data Pertanyaan");
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="'.$filename. '"');
		header('Cache-Control: max-age=0');

		$writer = PHPExcel_IOFactory::createwriter($object, 'Excel2007');
		$writer->save('php://output');
		exit;
	}

	// ----------------- Export Hasil Kuesioner ------------------ #
	public function export_hasil_pdf()
	{
		$data_user			= $this->M_Universal->getOne(["user_id" => $this->user_id], "user");
		$total_responden		= "id_paket_jawaban='" . dekrip(uri(3)) . "' ";
		$total_soal			= "id_paket_jawaban='" . dekrip(uri(3)) . "' ";
		// Menarik id paket
		$total_id				= "id_paket_jawaban='" . dekrip(uri(3)) . "' ";
		$total_pertanyaan		= "paket_id='" . dekrip(uri(3)) . "' ";
		
		$data	= array(
			"judul"			=> "Data Kuesioner",
			"halaman"			=> "data_responden",
			"view"			=> "data_responden",
			
			// Menarik Data paket berdasarkan id_paket
			"data_paket"		=> $this->M_Universal->getMulti(["id_paket" => dekrip(uri(3))], "paket_soal"),
			"data_identitas"	=>  $this->M_export->get_kuesioner(["kuesioner.id_paket_jawaban" => dekrip(uri(3))]),
			"total_responden"	=> $this->M_export->total_responden($total_responden),

			"data_jawaban"		=> $this->M_export->get_kuesioner(["kuesioner.id_paket_jawaban" => dekrip(uri(3))]),
			"total_pertanyaan"	=> $this->M_export->total_pertanyaan($total_pertanyaan),

			// Menghitung Nilai Tertinggi, Terendah dan Interval
			"total"			=> ($this->M_export->total_ss_p($total_id)*4)+($this->M_export->total_s_p($total_id)*3)+($this->M_export->total_ts_p($total_id)*2)+($this->M_export->total_sts_p($total_id)*1),
			"interval"		=> $this->M_export->total_responden($total_responden)/4,
			"terendah"		=> $this->M_export->total_responden($total_responden)*1,
			"tertinggi"		=> $this->M_export->total_soal($total_soal)*4,
			
			// Menghitung Skor Total Positif 
			"ss"				=> ($this->M_export->total_ss_p($total_id)),
			"s"				=> ($this->M_export->total_s_p($total_id)),
			"ts"				=> ($this->M_export->total_ts_p($total_id)),
			"sts"			=> ($this->M_export->total_sts_p($total_id)),

			"user"			=> $data_user
		);
	  
		 $this->load->library('pdf');
		 $this->pdf->setPaper('A4', 'landscape');
		 $this->pdf->filename = "laporan-hasil-kuesioner.pdf";
		 $this->pdf->load_view('pdf/laporan_hasil_kuesioner', $data);
	}

	public function print_hasil()
	{
		$data_user			= $this->M_Universal->getOne(["user_id" => $this->user_id], "user");
		$total_responden		= "id_paket_jawaban='" . dekrip(uri(3)) . "' ";
		$total_soal			= "id_paket_jawaban='" . dekrip(uri(3)) . "' ";
		// Menarik id paket
		$total_id				= "id_paket_jawaban='" . dekrip(uri(3)) . "' ";

		
		$data	= array(
			"judul"			=> "Data Kuesioner",
			"halaman"			=> "data_responden",
			"view"			=> "data_responden",
			
			// Menarik Data paket berdasarkan id_paket
			"data_paket"		=> $this->M_Universal->getMulti(["id_paket" => dekrip(uri(3))], "paket_soal"),
			"data_identitas"	=>  $this->M_export->get_kuesioner(["kuesioner.id_paket_jawaban" => dekrip(uri(3))]),

			// Menghitung Nilai Tertinggi, Terendah dan Interval
			"total"			=> ($this->M_export->total_ss_p($total_id)*4)+($this->M_export->total_s_p($total_id)*3)+($this->M_export->total_ts_p($total_id)*2)+($this->M_export->total_sts_p($total_id)*1),
			"interval"		=> $this->M_export->total_responden($total_responden)/4,
			"terendah"		=> $this->M_export->total_responden($total_responden)*1,
			"tertinggi"		=> $this->M_export->total_soal($total_soal)*4,
			
			// Menghitung Skor Total Positif 
			"ss"				=> ($this->M_export->total_ss_p($total_id))*4,
			"s"				=> ($this->M_export->total_s_p($total_id))*3,
			"ts"				=> ($this->M_export->total_ts_p($total_id))*2,
			"sts"			=> ($this->M_export->total_sts_p($total_id))*1,

			"user"			=> $data_user
		);
	  
		 $this->load->view('print/print_hasil_kuesioner', $data);
	}
	
	public function export_hasil_excel()
	{
		$total_responden		= "id_paket_jawaban='" . dekrip(uri(3)) . "' ";
		$total_soal			= "id_paket_jawaban='" . dekrip(uri(3)) . "' ";
		// Menarik id paket
		$total_id				= "id_paket_jawaban='" . dekrip(uri(3)) . "' ";

		$data["data_paket"]		= $this->M_Universal->getMulti(["id_paket" => dekrip(uri(3))], "paket_soal");
		$data["data_identitas"]	=   $this->M_export->get_kuesioner(["kuesioner.id_paket_jawaban" => dekrip(uri(3))]);

		// Menghitung Nilai Tertinggi, Terendah dan Interval
		$data["total"]		= ($this->M_export->total_ss_p($total_id)*4)+($this->M_export->total_s_p($total_id)*3)+($this->M_export->total_ts_p($total_id)*2)+($this->M_export->total_sts_p($total_id)*1);
		$data["interval"]	= $this->M_export->total_responden($total_responden)/4;
		$data["terendah"]	= $this->M_export->total_responden($total_responden)*1;
		$data["tertinggi"]	= $this->M_export->total_soal($total_soal)*4;

		$responden		= $this->M_export->total_responden($total_responden);		
		// Menghitung Skor Total Positif 
		$data["ss"]		= ($this->M_export->total_ss_p($total_id))*4;
		$data["s"]		= ($this->M_export->total_s_p($total_id))*3;
		$data["ts"]		= ($this->M_export->total_ts_p($total_id))*2;
		$data["sts"]		= ($this->M_export->total_sts_p($total_id))*1;

		// Persentase
		//  $total_id	= "id_paket_jawaban='" . $d->id_paket . "' ";
          //  $tertinggi    = $this->M_export->total_soal($total_id)*4;
          //  $terendah     = $this->M_export->total_soal($total_id)*1;
 
          //  $total 		= (($this->M_export->total_ss_p($total_id))*4)+ (($this->M_export->total_s_p($total_id))*3)+ (($this->M_export->total_ts_p($total_id))*2)+(($this->M_export->total_sts_p($total_id))*1);
                                                       
          //  $nilai 		= substr(($total / $tertinggi) * (100), 0, 5);

		//  if ($nilai <= 100 && $nilai >= 80) { 
		// 	echo $nilai '%';
		//  } else if ($nilai <= 59.9 && $nilai >= 40) {
		// 	echo $nilai '%';
		//  } else if ($nilai <= 39.9 && $nilai >= 20) {
		// 	echo $nilai '%';
		//  }  else if ($nilai <= 39.9 && $nilai >= 20) {
		// 	echo $nilai '%';
		//  } else if ($nilai <= 19.9) { 
		// 	echo $nilai '%';
		//  }
		 
		require(APPPATH. 'libraries/PHPExcel-1.8/Classes/PHPExcel.php');
		require(APPPATH. 'libraries/PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

		$object = new PHPExcel();
		$object->getProperties()->setCreator("Sistem e-Repo");
		$object->getProperties()->setLastModifiedBy("Sistem e-Repo");
		$object->getProperties()->setTitle("Hasil Kuesioner");

		$object->setActiveSheetIndex(0);

		// Data Paket
		// $object->getActiveSheet()->setCellValue('B1', 'No');
		$object->getActiveSheet()->setCellValue('B2', 'Nama Paket');
		$object->getActiveSheet()->setCellValue('B3', 'Sistem');
		$object->getActiveSheet()->setCellValue('B4', 'Versi Sistem');
		$object->getActiveSheet()->setCellValue('B5', 'Responden');
		$object->getActiveSheet()->setCellValue('B6', 'Jumlah Jawaban');
		$object->getActiveSheet()->setCellValue('B7', 'Tanggal Kuesioner');
		// $object->getActiveSheet()->setCellValue('B8', 'Persentase');

		$baris_paket = 2;
		$no = 1;

		foreach ($data['data_paket'] as $data_paket) {
		// $object->getActiveSheet()->setCellValue('C'.$baris_paket++, $no++);
		$object->getActiveSheet()->setCellValue('C'.$baris_paket++, $data_paket->nama_paket);
		$object->getActiveSheet()->setCellValue('C'.$baris_paket++, $data_paket->aplikasi);
		$object->getActiveSheet()->setCellValue('C'.$baris_paket++, $data_paket->versi_apl_paket);
		$object->getActiveSheet()->setCellValue('C'.$baris_paket++, $data_paket->responden);
		$object->getActiveSheet()->setCellValue('C'.$baris_paket++, $responden);
		$object->getActiveSheet()->setCellValue('C'.$baris_paket++, $data_paket->tgl_kuesioner);
		// $object->getActiveSheet()->setCellValue('C'.$baris_paket++, $persentase);

		$baris_paket++;
		}

		// Data Responden
		$object->getActiveSheet()->setCellValue('A9', 'No');
		$object->getActiveSheet()->setCellValue('B9', 'Id Identitas');
		$object->getActiveSheet()->setCellValue('C9', 'Nama Lengkap');
		$object->getActiveSheet()->setCellValue('D9', 'Prodi');
		$object->getActiveSheet()->setCellValue('E9', 'Sebagai');
		$object->getActiveSheet()->setCellValue('F9', 'Jenis Kelamin');
		// $object->getActiveSheet()->setCellValue('G9', '');

		$baris_soal = 10;
		$no = 1;

		foreach ($data['data_identitas'] as $data_identitas) {
		// $link = base_url('kuesioner/form/') . enkrip($data_identitas->id_paket);
		$object->getActiveSheet()->setCellValue('A'.$baris_soal, $no++);
		$object->getActiveSheet()->setCellValue('B'.$baris_soal, $data_identitas->id_identitas);
		$object->getActiveSheet()->setCellValue('C'.$baris_soal, $data_identitas->nama_lengkap);
		$object->getActiveSheet()->setCellValue('D'.$baris_soal, $data_identitas->prodi);
		$object->getActiveSheet()->setCellValue('E'.$baris_soal, $data_identitas->sebagai);
		$object->getActiveSheet()->setCellValue('F'.$baris_soal, $data_identitas->gender);
		// $object->getActiveSheet()->setCellValue('G'.$baris_soal, $link);

		$baris_soal++;
		}

		$filename= "Data Hasil Kuesioner".'.xlsx';
		$object->getActiveSheet()->setTitle("Data Hasil Kuesioner");
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="'.$filename. '"');
		header('Cache-Control: max-age=0');

		$writer = PHPExcel_IOFactory::createwriter($object, 'Excel2007');
		$writer->save('php://output');
		exit;
	}

	// ----------------- Export Komentar Kuesioner ------------------ #
	public function export_komentar_pdf()
	{
		$data_user			= $this->M_Universal->getOne(["user_id" => $this->user_id], "user");
		$total_responden		= "id_paket_jawaban='" . dekrip(uri(3)) . "' ";
		$total_soal			= "id_paket_jawaban='" . dekrip(uri(3)) . "' ";
		// Menarik id paket
		$total_id				= "id_paket_jawaban='" . dekrip(uri(3)) . "' ";

		$data = array(
			"judul"			=> "Data Kuesioner",
			"halaman"			=> "data_responden",
			"view"			=> "data_responden",
			"jml_baik"		=> $this->M_export->label_baik(["id_paket"], "klasifikasi"),
			"jml_kurang"		=> $this->M_export->label_kurang(["id_paket"], "klasifikasi"),
			// Menarik Data paket berdasarkan id_paket
			"data_paket"		=> $this->M_Universal->getMulti(["id_paket" => dekrip(uri(3))], "paket_soal"),
			"data_komentar"	=>  $this->M_export->get_klasifikasi(["klasifikasi.id_paket_jawaban" => dekrip(uri(3))]),
		);
	  
		 $this->load->library('pdf');
		 $this->pdf->setPaper('A4', 'potrait');
		 $this->pdf->filename = "laporan-hasil-kuesioner.pdf";
		 $this->pdf->load_view('pdf/laporan_komentar', $data);
	}

	public function print_komentar()
	{
		$data_user			= $this->M_Universal->getOne(["user_id" => $this->user_id], "user");
		$total_responden		= "id_paket_jawaban='" . dekrip(uri(3)) . "' ";
		$total_soal			= "id_paket_jawaban='" . dekrip(uri(3)) . "' ";
		// Menarik id paket
		$total_id				= "id_paket_jawaban='" . dekrip(uri(3)) . "' ";

		
		$data	= array(
			"judul"			=> "Data Kuesioner",
			"halaman"			=> "data_responden",
			"view"			=> "data_responden",
			"jml_baik"		=> $this->M_export->label_baik(["id_paket"], "klasifikasi"),
			"jml_kurang"		=> $this->M_export->label_kurang(["id_paket"], "klasifikasi"),
			// Menarik Data paket berdasarkan id_paket
			"data_paket"		=> $this->M_Universal->getMulti(["id_paket" => dekrip(uri(3))], "paket_soal"),
			"data_komentar"	=> $this->M_export->get_klasifikasi(["klasifikasi.id_paket_jawaban" => dekrip(uri(3))]),
		);
	  
		 $this->load->view('print/print_komentar', $data);
	}
	
	public function export_komentar_excel()
	{
		$total_responden		= "id_paket_jawaban='" . dekrip(uri(3)) . "' ";
		$total_soal			= "id_paket_jawaban='" . dekrip(uri(3)) . "' ";
		// Menarik id paket
		$total_id				= "id_paket_jawaban='" . dekrip(uri(3)) . "' ";

		$data["data_paket"]		= $this->M_Universal->getMulti(["id_paket" => dekrip(uri(3))], "paket_soal");
		$data["data_komentar"]	= $this->M_export->get_klasifikasi(["klasifikasi.id_paket_jawaban" => dekrip(uri(3))]);

		$data['komentar'] = $this->M_Universal->getMulti(NULL, "klasifikasi");

		require(APPPATH. 'libraries/PHPExcel-1.8/Classes/PHPExcel.php');
		require(APPPATH. 'libraries/PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

		$object = new PHPExcel();
		$object->getProperties()->setCreator("Sistem e-Repo");
		$object->getProperties()->setLastModifiedBy("Sistem e-Repo");
		$object->getProperties()->setTitle("Data Komentar");
		 
		$object->setActiveSheetIndex(0);

		$object->getActiveSheet()->setCellValue('A1', 'No');
		$object->getActiveSheet()->setCellValue('B1', 'ID Paket');
		$object->getActiveSheet()->setCellValue('C1', 'ID Responden');
		$object->getActiveSheet()->setCellValue('D1', 'Nama Lengkap');
		$object->getActiveSheet()->setCellValue('E1', 'Prodi');
		$object->getActiveSheet()->setCellValue('F1', 'Ulasan');
		$object->getActiveSheet()->setCellValue('G1', 'Label');

		$baris = 2;
		$no = 1;

		foreach ($data['komentar'] as $komentar) {
			$object->getActiveSheet()->setCellValue('A'.$baris, $no++);
			$object->getActiveSheet()->setCellValue('B'.$baris, $komentar->id_paket_jawaban);
			$object->getActiveSheet()->setCellValue('C'.$baris, $komentar->id_identitas);
			$object->getActiveSheet()->setCellValue('D'.$baris, $komentar->nama_lengkap);
			$object->getActiveSheet()->setCellValue('E'.$baris, $komentar->prodi);
			$object->getActiveSheet()->setCellValue('F'.$baris, $komentar->jawaban);
			$object->getActiveSheet()->setCellValue('G'.$baris, $komentar->label);

			$baris++;
		 }
		 
		$filename= "Data Komentar".'.xlsx';
		$object->getActiveSheet()->setTitle("Data Komentar");
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="'.$filename. '"');
		header('Cache-Control: max-age=0');

		$writer = PHPExcel_IOFactory::createwriter($object, 'Excel2007');
		$writer->save('php://output');
		exit;

		// $object = new PHPExcel();
		// $object->getProperties()->setCreator("Sistem e-Repo");
		// $object->getProperties()->setLastModifiedBy("Sistem e-Repo");
		// $object->getProperties()->setTitle("Hasil Kuesioner");

		// $object->setActiveSheetIndex(0);

		// // Data Paket
		// $object->getActiveSheet()->setCellValue('B2', 'Nama Paket');
		// $object->getActiveSheet()->setCellValue('B3', 'Sistem');
		// $object->getActiveSheet()->setCellValue('B4', 'Versi Sistem');
		// $object->getActiveSheet()->setCellValue('B5', 'Responden');
		// $object->getActiveSheet()->setCellValue('B6', 'Jumlah Jawaban');
		// $object->getActiveSheet()->setCellValue('B7', 'Tanggal Kuesioner');

		// $baris_paket = 2;
		// $no = 1;

		// foreach ($data['data_paket'] as $data_paket) {
		// $object->getActiveSheet()->setCellValue('C'.$baris_paket++, $data_paket->nama_paket);
		// $object->getActiveSheet()->setCellValue('C'.$baris_paket++, $data_paket->aplikasi);
		// $object->getActiveSheet()->setCellValue('C'.$baris_paket++, $data_paket->versi_apl_paket);
		// $object->getActiveSheet()->setCellValue('C'.$baris_paket++, $data_paket->responden);
		// $object->getActiveSheet()->setCellValue('C'.$baris_paket++, $responden);
		// $object->getActiveSheet()->setCellValue('C'.$baris_paket++, $data_paket->tgl_kuesioner);

		// $baris_paket++;
		// }

		// // Data Komentar
		// $object->getActiveSheet()->setCellValue('A9', 'No');
		// $object->getActiveSheet()->setCellValue('B9', 'Komentar');
		// $object->getActiveSheet()->setCellValue('C9', 'label');
		// // $object->getActiveSheet()->setCellValue('G9', '');

		// $baris_soal = 10;
		// $no = 1;

		// foreach ($data['data_komentar'] as $data_komentar) {
		// $object->getActiveSheet()->setCellValue('A'.$baris_soal, $no++);
		// $object->getActiveSheet()->setCellValue('B'.$baris_soal, $data_komentar->jawaban);
		// $object->getActiveSheet()->setCellValue('C'.$baris_soal, $data_komentar->label);

		// $baris_soal++;
		// }

		// $filename= "Data Hasil Komentar".'.xlsx';
		// $object->getActiveSheet()->setTitle("Data Hasil Komentar");
		// header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		// header('Content-Disposition: attachment;filename="'.$filename. '"');
		// header('Cache-Control: max-age=0');

		// $writer = PHPExcel_IOFactory::createwriter($object, 'Excel2007');
		// $writer->save('php://output');
		// exit;
	}

// 		public function export_komentar_excel()
// 	{
// 		$total_responden		= "id_paket_jawaban='" . dekrip(uri(3)) . "' ";
// 		$total_soal			= "id_paket_jawaban='" . dekrip(uri(3)) . "' ";
// 		// Menarik id paket
// 		$total_id				= "id_paket_jawaban='" . dekrip(uri(3)) . "' ";

// 		$data["data_paket"]		= $this->M_Universal->getMulti(["id_paket" => dekrip(uri(3))], "paket_soal");
// 		$data["data_komentar"]	= $this->M_export->get_klasifikasi(["klasifikasi.id_paket_jawaban" => dekrip(uri(3))]);

// 		require(APPPATH. 'libraries/PHPExcel-1.8/Classes/PHPExcel.php');
// 		require(APPPATH. 'libraries/PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

// 		$object = new PHPExcel();
// 		$object->getProperties()->setCreator("Sistem e-Repo");
// 		$object->getProperties()->setLastModifiedBy("Sistem e-Repo");
// 		$object->getProperties()->setTitle("Hasil Kuesioner");

// 		$object->setActiveSheetIndex(0);

// 		// Data Paket
// 		$object->getActiveSheet()->setCellValue('B2', 'Nama Paket');
// 		$object->getActiveSheet()->setCellValue('B3', 'Sistem');
// 		$object->getActiveSheet()->setCellValue('B4', 'Versi Sistem');
// 		$object->getActiveSheet()->setCellValue('B5', 'Responden');
// 		$object->getActiveSheet()->setCellValue('B6', 'Jumlah Jawaban');
// 		$object->getActiveSheet()->setCellValue('B7', 'Tanggal Kuesioner');

// 		$baris_paket = 2;
// 		$no = 1;

// 		foreach ($data['data_paket'] as $data_paket) {
// 		$object->getActiveSheet()->setCellValue('C'.$baris_paket++, $data_paket->nama_paket);
// 		$object->getActiveSheet()->setCellValue('C'.$baris_paket++, $data_paket->aplikasi);
// 		$object->getActiveSheet()->setCellValue('C'.$baris_paket++, $data_paket->versi_apl_paket);
// 		$object->getActiveSheet()->setCellValue('C'.$baris_paket++, $data_paket->responden);
// 		$object->getActiveSheet()->setCellValue('C'.$baris_paket++, $responden);
// 		$object->getActiveSheet()->setCellValue('C'.$baris_paket++, $data_paket->tgl_kuesioner);

// 		$baris_paket++;
// 		}

// 		// Data Komentar
// 		$object->getActiveSheet()->setCellValue('A9', 'No');
// 		$object->getActiveSheet()->setCellValue('B9', 'Komentar');
// 		$object->getActiveSheet()->setCellValue('C9', 'label');
// 		// $object->getActiveSheet()->setCellValue('G9', '');

// 		$baris_soal = 10;
// 		$no = 1;

// 		foreach ($data['data_komentar'] as $data_komentar) {
// 		$object->getActiveSheet()->setCellValue('A'.$baris_soal, $no++);
// 		$object->getActiveSheet()->setCellValue('B'.$baris_soal, $data_komentar->jawaban);
// 		$object->getActiveSheet()->setCellValue('C'.$baris_soal, $data_komentar->label);

// 		$baris_soal++;
// 		}

// 		$filename= "Data Hasil Komentar".'.xlsx';
// 		$object->getActiveSheet()->setTitle("Data Hasil Komentar");
// 		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
// 		header('Content-Disposition: attachment;filename="'.$filename. '"');
// 		header('Cache-Control: max-age=0');

// 		$writer = PHPExcel_IOFactory::createwriter($object, 'Excel2007');
// 		$writer->save('php://output');
// 		exit;
// 	}

	// ----------------- Export Manajerial Data ------------------ #
	public function export_user_pdf()
	{
		$data	= array(
			"data_user"		=> $this->M_Universal->getMulti(NULL, "user"),
		);
	  
		 $this->load->library('pdf');
		 $this->pdf->setPaper('A4', 'landscape');
		 $this->pdf->filename = "laporan-user.pdf";
		 $this->pdf->load_view('pdf/laporan_user', $data);
	}

	public function print_user()
	{
		$data	= array(
			"data_user"		=> $this->M_Universal->getMulti(NULL, "user"),
		);
	  
		 $this->load->view('print/print_user', $data);
	}
	
	public function export_user_excel()
	{
		$data['user'] = $this->M_Universal->getMulti(NULL, "user");
		require(APPPATH. 'libraries/PHPExcel-1.8/Classes/PHPExcel.php');
		require(APPPATH. 'libraries/PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');
		
		 $object = new PHPExcel();
		 $object->getProperties()->setCreator("Sistem e-Repo");
		 $object->getProperties()->setLastModifiedBy("Sistem e-Repo");
		 $object->getProperties()->setTitle("Data User");
		 
		 $object->setActiveSheetIndex(0);

		 $object->getActiveSheet()->setCellValue('A1', 'No');
		 $object->getActiveSheet()->setCellValue('B1', 'ID User');
		 $object->getActiveSheet()->setCellValue('C1', 'Email');
		 $object->getActiveSheet()->setCellValue('D1', 'Nama Lengkap');
		 $object->getActiveSheet()->setCellValue('E1', 'Sebagai');
		 $object->getActiveSheet()->setCellValue('F1', 'Prodi/Bidang');
		 $object->getActiveSheet()->setCellValue('G1', 'Gender');
		 $object->getActiveSheet()->setCellValue('H1', 'Created');

		 $baris = 2;
		 $no = 1;

		 foreach ($data['user'] as $user) {
			$object->getActiveSheet()->setCellValue('A'.$baris, $no++);
			$object->getActiveSheet()->setCellValue('B'.$baris, $user->username_id);
			$object->getActiveSheet()->setCellValue('C'.$baris, $user->email);
			$object->getActiveSheet()->setCellValue('D'.$baris, $user->user_namalengkap);
			$object->getActiveSheet()->setCellValue('E'.$baris, $user->user_level);
			$object->getActiveSheet()->setCellValue('F'.$baris, $user->user_prodi);
			$object->getActiveSheet()->setCellValue('G'.$baris, $user->user_gender);
			$object->getActiveSheet()->setCellValue('H'.$baris, $user->user_created);

			$baris++;
		 }
		 
		 $filename= "Data User".'.xlsx';
		 $object->getActiveSheet()->setTitle("Data User");
		 header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		 header('Content-Disposition: attachment;filename="'.$filename. '"');
		 header('Cache-Control: max-age=0');

		 $writer = PHPExcel_IOFactory::createwriter($object, 'Excel2007');
		 $writer->save('php://output');
		 exit;
	}
	
	public function print_jawaban()
	{
		$data_user			= $this->M_Universal->getOne(["user_id" => $this->user_id], "user");
		$total_responden		= "id_paket_jawaban='" . dekrip(uri(3)) . "' ";
		$total_soal			= "id_paket_jawaban='" . dekrip(uri(3)) . "' ";
		// Menarik id paket
		$total_id				= "id_paket_jawaban='" . dekrip(uri(3)) . "' ";
		$total_pertanyaan		= "paket_id='" . dekrip(uri(3)) . "' ";
		
		$data	= array(
			"judul"			=> "Data Kuesioner",
			"halaman"			=> "data_responden",
			"view"			=> "data_responden",
			
			// Menarik Data paket berdasarkan id_paket
			"data_paket"		=> $this->M_Universal->getMulti(["id_paket" => dekrip(uri(3))], "paket_soal"),
			"data_identitas"	=>  $this->M_export->get_kuesioner(["kuesioner.id_paket_jawaban" => dekrip(uri(3))]),
			"total_responden"	=> $this->M_export->total_responden($total_responden),

			"data_jawaban"		=> $this->M_export->get_kuesioner(["kuesioner.id_paket_jawaban" => dekrip(uri(3))]),
			"total_pertanyaan"	=> $this->M_export->total_pertanyaan($total_pertanyaan),

			// Menghitung Nilai Tertinggi, Terendah dan Interval
			"total"			=> ($this->M_export->total_ss_p($total_id)*4)+($this->M_export->total_s_p($total_id)*3)+($this->M_export->total_ts_p($total_id)*2)+($this->M_export->total_sts_p($total_id)*1),
			"interval"		=> $this->M_export->total_responden($total_responden)/4,
			"terendah"		=> $this->M_export->total_responden($total_responden)*1,
			"tertinggi"		=> $this->M_export->total_soal($total_soal)*4,
			
			// Menghitung Skor Total Positif 
			"ss"				=> ($this->M_export->total_ss_p($total_id)),
			"s"				=> ($this->M_export->total_s_p($total_id)),
			"ts"				=> ($this->M_export->total_ts_p($total_id)),
			"sts"			=> ($this->M_export->total_sts_p($total_id)),

			"user"			=> $data_user
		);
	  
		 $this->load->view('print/hasil_skala', $data);
	}
}