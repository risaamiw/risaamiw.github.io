<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Kontak extends CI_Controller

{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/kontak_model');
    }

    public function index()
    {
        $query = $this->kontak_model->daftar_kontak();
        $data = array('kontak' => $query);
        $this->load->view('rfc2350/informasi_kontak', $data);
    }
}
