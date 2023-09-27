<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Kontak extends CI_Controller
{
    public  function __construct()
    {
        parent::__construct();
        //digunakan untuk memastikan bahwa halaman ini dapat diakses jika session bernilai TRUE 
        if ($this->session->userdata("login_status") == FALSE)
        {
            $this->session->set_flashdata("message","access denied");
            redirect("admin/login",'refresh');
        }
    }
    //1. fungsi untuk menampilkan data dari database
    public function index()
    {
        $data['judul'] = 'Daftar Komentar';

        //ambil data dari database tabel kontakegory
        //load kontak_model
        $data['hasil'] = $this->kontak_model->get_all();

        //load file view
        $tmp['konten'] = $this->load->view('admin/kontak/home',$data,TRUE);
        $this->load->view('admin/template',$tmp);
    }
    //2. fungsi untuk tambah data
    public function add()
    {
        if($_SERVER['REQUEST_METHOD'] == "POST")
        {
            $this->form_validation->set_rules('nama', 'Nama', 'trim|required|xss_clean');

            if($this->form_validation->run() == FALSE)
            {
                $data ['err'] = validation_errors();
                $tmp['konten'] = $this->load->view("admin/kontak/add",$data,TRUE);
            }
            else
            {
                $aksi = $this->kontak_model->add();
                if ($aksi)
                {
                    $this->session->set_flashdata("message","Komentar berhasil dikirim");
                    redirect('kontak','refresh');
                }
                else
                {
                    $this->session->set_flashdata("message","gagal menyimpan data baru");
                    redirect('admin/kontak/add','refresh');
                }
            }
        }
        $data['judul'] = "Daftar Kontak";

        //load template
        $tmp['konten'] = $this->load->view("admin/kontak/add",$data,TRUE);
        $this->load->view("admin/template",$tmp);
    }
    //3. fungsi untuk edit data
    public function edit($id=0)
    {
     if($_SERVER['REQUEST_METHOD'] == "POST")
     {
        $data_kontak = $this->kontak_model->get_detail_by_id($id);
        if(count($data_kontak) > 0)
        {
            $aksi = $this->kontak_model->update_by_admin($id);
            if ($aksi)
            {
                $this->session->set_flashdata("message","data berhasil disimpan");
                redirect('admin/kontak','refresh');
            }
            else{
                $this->sessionn->set_flashdata("message","gagal mengubah data");
                redirect('admin/kontak/edit/'.$id,'refresh');
            }
        }
        else
        {
            $this->session->set_flashdata("message","data gagal diedit karena tidak ada data");
            redirect('admin/kontak/edit/'.$id,'refresh');
        }
     }
     else
     {
        $data_kontak = $this->kontak_model->get_detail_by_id($id);
        $data['judul'] = "Edit Data Kategori " .$data_kontak['NAMA'];
        $data['hasil'] = $this->kontak_model->get_detail_by_id($id);

        //load template
        $tmp['konten'] = $this->load->view("admin/kontak/edit",$data,TRUE);
        $this->load->view("admin/template",$tmp);
     }
    }
    //4. fungsi untuk hapus data
    public function delete($id=0)
    {
        //get data
        $data_kontak = $this->kontak_model->get_detail_by_id($id);
        if (count($data_kontak) > 0)
        {
            //hapus data dari database
            $aksi = $this->kontak_model->delete($id);

            if ($aksi)
            {
                //jika query berhasil
                $this->session->set_flashdata("message","data berhasil dihapus");
                redirect('admin/kontak','refresh');
            }
            else
            {
            //jika query gagal
            $this->session->set_flashdata("message","data gagal dihapus karena gagal query");
            redirect('admin/kontak','refresh');
            }
        }
        else
        {
            //jika tidak ditemukan data
            $this->session->set_flashdata("message","data gagal dihapus karena tidak ada datanya");
            redirect('admin/kontak','refresh');
        }

    }
}