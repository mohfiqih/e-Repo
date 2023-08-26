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
class Rest_kuesioner extends REST_Controller {

     function __construct()
     {
         // Construct the parent class
         parent:: __construct();
 
         // Configure limits on our controller methods
         // Ensure you have created the 'limits' table and enabled 'limits' within application/config/rest.php
         $this->methods['kuesioner_get']['limit']    = 500;  // 500 requests per hour per user/key
         $this->methods['kuesioner_post']['limit']   = 100;  // 100 requests per hour per user/key
         $this->methods['kuesioner_delete']['limit'] = 50;   // 50 requests per hour per user/key
     }
 
     public function kuesioner_get()
     {
        $data = array(
			"judul"      => "Rest Kuesioner",
			"data_user"  => $this->M_Universal->getMulti(NULL, "jawaban"),
	   );

        if ($data) {
            $this->response([
                'status' => true,
                'data'   => $data
            ], REST_Controller::HTTP_NOT_FOUND);
        }
     }
     
 }