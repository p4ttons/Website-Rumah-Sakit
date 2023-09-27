<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Finddoktor extends CI_Controller {

	public function index()
	{
    $data['head'] = "H O M E";
	$tmp['konten'] = $this->load->view('welcome/finddoktor',$data,TRUE);
	$this->load->view('template',$tmp);
	}
}