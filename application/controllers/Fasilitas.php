<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class fituritas extends CI_Controller {

	public function index()
	{
    $data['head'] = "H O M E";
	$tmp['konten'] = $this->load->view('welcome/fituritas',$data,TRUE);
	$this->load->view('template',$tmp);
	}
}