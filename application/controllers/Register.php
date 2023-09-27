<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index()
	{
    $data['head'] = "I N F O R M A S I";
		$tmp['konten'] = $this->load->view('welcome/register',$data,TRUE);
		$this->load->view('template',$tmp);
	}
}