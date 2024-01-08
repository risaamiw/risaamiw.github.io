<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class indok extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('admin/indok_model');
    }


    public function index()
    {
        $query = $this->indok_model->daftar_indok();
        $data = array('indok' => $query);
        $this->load->view('indok/indok_views', $data);
    }

    public function tambah()
    {

        $this->form_validation->set_rules('judul', 'judul', 'required');
        $this->form_validation->set_rules('isi', 'isi', 'required');
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('indok/tambah_indok');
        } else {
            $data = array(
                'no' => $this->input->post('no'),
                'judul' => $this->input->post('judul'),
                'isi' => $this->input->post('isi'),
            );
            $this->indok_model->tambah($data);
            redirect(base_url() . 'content/indok/');
        }
    }

    public function edit($id)
    {
        $this->form_validation->set_rules('no', 'no', 'required');
        $this->form_validation->set_rules('judul', 'judul', 'required');
        $this->form_validation->set_rules('isi', 'isi', 'required');
        if ($this->form_validation->run() === FALSE) {
            $data['indok_csirt'] = $this->indok_model->detail_indok();
            $data['detail'] = $this->indok_model->detail_indok($id);
            $data = array(
                'indok_csirt' => $this->indok_model->detail_indok(),
                'detail' => $this->indok_model->detail_indok($id)
            );
            $this->load->view('indok/edit_indok', $data);
            // Kalau tidak ada error indok diupdate
        } else {
            $data = array(

                'id_indok' => $id,
                'no' => $this->input->post('no'),
                'judul' => $this->input->post('judul'),
                'isi' => $this->input->post('isi'),
            );
            $this->indok_model->edit_indok($data);
            redirect(base_url() . 'content/indok/');
        }
    }

    public function delete($id)
    {
        $this->indok_model->delete_indok($id);
        redirect(base_url() . 'content/indok/');
    }
}
