<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
    $data['head'] = "L O G I N";
		$tmp['konten'] = $this->load->view('welcome/login',$data,TRUE);
		$this->load->view('template',$tmp);
	}

	public function cek_login()
    {
		$u = $this->input->post('cus_email');
		$pw = $this->input->post('password');

		$cek = $this->customer_model->verify($u,$pw);

		if (count($cek) > 0)
		{
			$id_user = $cek['CUSTOMER_ID'];
			$login = array(
				'username_customer' => $u,
				'login_customer' => $id_user,
				'login_status' => TRUE
			);
			$this->session->set_userdata($login);
			redirect('home','refresh');
		}
		else
		{
			$this->session->set_flashdata('message', '<br>Username atau Password Anda Salah<br>');
			redirect('login','refresh');
		}
    }
}