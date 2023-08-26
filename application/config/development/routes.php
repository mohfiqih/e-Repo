<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// $route['prosesUpload'] = "bankberkas/prosesUpload";
$route['prosesUpload']             = "manajerial/prosesUpload";
$route['default_controller']       = 'berkas'; 

$route['default_controller']	     = 'rest_server';
$route['default_controller']	     = 'dasbor';
$route['404_override']			= '';
$route['translate_uri_dashes']	= FALSE;

$route['login']				= 'auth/login';
$route['auth/user']		          = 'auth/user';
$route['forgotPassword']	          = 'auth/forgotPassword';
$route['export']                   = 'export';
$route['logout']				= 'auth/logout';