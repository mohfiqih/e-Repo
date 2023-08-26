<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$autoload['packages'] = array();
$autoload['libraries'] = array('database', 'session', 'pagination', 'upload', 'form_validation', 'email');
$autoload['drivers'] = array();
$autoload['helper'] = array('url', 'universal', 'form', 'file', 'download');
$autoload['config'] = array();
$autoload['language'] = array();
$autoload['model'] = array('M_Universal');