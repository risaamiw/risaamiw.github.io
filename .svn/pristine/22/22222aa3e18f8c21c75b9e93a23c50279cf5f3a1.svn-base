<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Berita extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/berita_model');
    }

    public function index()
    {
        $query = $this->berita_model->daftar_berita();
        $data = array('berita' => $query);
        $this->load->view('admin/berita/berita_views', $data);
    }

    public function tambah()
    {
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('isi', 'Isi berita', 'required');
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('admin./berita/tambah_berita');
        } else {
            $data = array(
                'judul' => $this->input->post('judul'),
                'isi' => $this->input->post('isi'),
                'status_berita' => $this->input->post('status_berita'),
                'id_user' => $this->input->post('id_user')
            );
            $this->berita_model->tambah($data);
            redirect(base_url() . 'admin/berita/');
        }
    }

    public function edit($id)
    {
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('isi', 'Isi berita', 'required');
        if ($this->form_validation->run() === FALSE) {
            $data['berita_csirt'] = $this->berita_model->detail_berita();
            $data['detail'] = $this->berita_model->detail_berita($id);
            $data = array(
                'berita_csirt' => $this->berita_model->detail_berita(),
                'detail' => $this->berita_model->detail_berita($id)
            );
            $this->load->view('admin/berita/edit_berita', $data);
            // Kalau tidak ada error berita diupdate
        } else {
            $data = array(
                'id_berita' => $this->input->post('id_berita'),
                'judul' => $this->input->post('judul'),
                'isi' => $this->input->post('isi'),
                'status_berita' => $this->input->post('status_berita'),
                'id_user' => $this->input->post('id_user')
            );
            $this->berita_model->edit_berita($data);
            redirect(base_url() . 'admin/berita/');
        }
    }

    public function delete($id)
    {
        $this->berita_model->delete_berita($id);
        redirect(base_url() . 'admin/berita/');
    }
}
