<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
require APPPATH . '/libraries/REST_Controller.php';

// use namespace

use GuzzleHttp\Psr7\Response;
use Restserver\Libraries\REST_Controller;

/**
 * This is an example of a few basic user interaction methods you could use
 * all done with a hardcoded array
 *
 * @package         CodeIgniter
 * @subpackage      Rest Server
 * @category        Controller
 * @author          Phil Sturgeon, Chris Kacerguis
 * @license         MIT
 * @link            https: //github.com/chriskacerguis/codeigniter-restserver
 */
class Rest_jawaban extends REST_Controller {

     function __construct()
     {
         // Construct the parent class
         parent:: __construct();
         $this->load->model('M_jawaban');
 
         // Configure limits on our controller methods
         // Ensure you have created the 'limits' table and enabled 'limits' within application/config/rest.php
         $this->methods['jawaban_get']['limit']    = 500;  // 500 requests per hour per user/key
         $this->methods['jawaban_post']['limit']   = 100;  // 100 requests per hour per user/key
         $this->methods['jawaban_delete']['limit'] = 50;   // 50 requests per hour per user/key
     }
 
     public function jawaban_get()
     {
        $id = $this->get('id');
        
        if ($id === null) {
            $jawaban = $this->M_jawaban->getJawaban();
        } else {
            $jawaban = $this->M_jawaban->getJawaban($id);
        }

        if ($jawaban) {
            $this->response([
                'status' => true,
                'data'   => $jawaban
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status'    => false,
                'message'   => 'ID Not Found'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
     }

     public function jawaban_delete()
     {
        $id = $this->delete('id');

        if ($id === null) {
            $this->response([
                'status'    => false,
                'message'   => 'Tidak Ada Data!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        } else {
            if ($this->M_jawaban->deleteJawaban($id) > 0) {
                    // OK
                    $this->response([
                        'status'    => true,
                        'id'        => $id,
                        'message'   => 'Data Berhasil di Hapus!'
                    ], REST_Controller::HTTP_NO_CONTENT);
            } else {
                    // not found
                    $this->response([
                        'status'    => false,
                        'message'   => 'Id Not Found.'
                    ], REST_Controller::HTTP_BAD_REQUEST);
            }
        }
     }

     public function jawaban_post()
     {
        $this->db->order_by('id_soal', 'asc');
		$id_soal 		= $this->db->get_where('daftar_soal', array('paket_id'=> $this->input->post("id_paket_jawaban")));
		$kategori_soal = $this->db->get_where('daftar_soal', array('kategori_soal'=> $this->input->post("kategori_soal")));
		$data= [];
		foreach ($id_soal->result() as $row) {
			$data[] = array(
				"id_respon"		    => $this->input->post("id_respon"),
				"id_identitas"		=> $this->input->post("id_identitas"),
				"id_paket_jawaban"	=> $this->input->post("id_paket_jawaban"),
				"id_soal_jawaban"	=> $row->id_soal,
				"kategori_soal"	    => $row->kategori_soal,
				"jawaban"			=> $this->input->post("jawaban" .$row->id_soal)
			);
		}

        if ($this->db->insert_batch('jawaban', $data)) {
             $this->response([
                'status'    => true,
                'message'   => 'Kuesioner Berhasil Di isi.'
             ], REST_Controller::HTTP_CREATED);
        } else {
            # id not found
            $this->response([
                'status'    => false,
                'message'   => 'Gagal Isi Kuesioner.'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
     }
 }