<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	public function index()
	{
    // digunakan untuk menampilkan list dokter
    $data['head'] = "N E W S";
	$data['hasil'] = $this->news_model->get_all();

    $tmp['konten'] = $this->load->view('news/home',$data,TRUE);
	$this->load->view('template',$tmp);
	}

    // digunakan untuk menampilkan detail berita
    public function detail($id=0)
    {
    $data['head'] = "N E W S - Detail";
	$data['hasil'] = $this->news_model->get_detail_by_id($id);

    $tmp['konten'] = $this->load->view('news/detail',$data,TRUE);
	$this->load->view('template',$tmp);
    }
}
?>