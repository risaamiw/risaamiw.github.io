<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Content extends CI_Controller
{
    public function __construct()
    {
        parent::__construct(); {
            $this->load->model('admin/indok_model');
            $this->load->model('admin/kontak_model');
            $this->load->model('admin/buletin_model');
            $this->load->model('admin/dokpen_model');
        }
    }

    public function tentang()
    {
        $this->load->view('template/header');
        $this->load->view('rfc2350/tentang-csirt');
        $this->load->view('template/footer');
    }
    public function kebijakan()
    {
        $this->load->view('template/header');
        $this->load->view('rfc2350/kebijakan');
        $this->load->view('template/footer');
    }
    public function siber()
    {
        $this->load->view('template/header');
        $this->load->view('siber/aduan_siber');
        $this->load->view('template/footer');
    }
    public function indok()
    {
        $query = $this->indok_model->daftar_indok();
        $data = array('indok' => $query);
        $this->load->view('template/header');
        $this->load->view('rfc2350/informasi-dokumen', $data);
        $this->load->view('template/footer');
    }
    public function informasi()
    {
        $query = $this->kontak_model->daftar_kontak();
        $data = array('kontak' => $query);
        $this->load->view('template/header');
        $this->load->view('rfc2350/informasi_kontak', $data);
        $this->load->view('template/footer');
    }
    public function alper()
    {
        $this->load->view('template/header');
        $this->load->view('rfc2350/alamat');
        $this->load->view('template/footer');
    }
    public function dokpen()
    {
        $query = $this->dokpen_model->daftar_dokpen();
        $data = array('dokpen' => $query);
        $this->load->view('template/header');
        $this->load->view('rfc2350/dokpen', $data);
        $this->load->view('template/footer');
    }
    public function profil()
    {
        $this->load->view('template/header');
        $this->load->view('landing/profil');
        $this->load->view('template/footer');
    }
    public function layanan()
    {
        $this->load->view('template/header');
        $this->load->view('landing/layanan');
        $this->load->view('template/footer');
    }
    public function hubungi()
    {
        $this->load->view('template/header');
        $this->load->view('landing/hubungi');
        $this->load->view('template/footer');
    }
    public function berita($offset = 0)
    {
        $this->load->library('pagination');
        $config['base_url'] = site_url('content/berita/');
        $config['total_rows'] = $this->buletin_model->countAll();
        $config['per_page'] = 3;

        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';


        $data['pagination'] = $this->pagination->create_links($config);
        $this->pagination->initialize($config);

        $query = $this->buletin_model->daftar_buletin($config['per_page'], $offset);
        $data = array('buletin' => $query);
        $this->load->view('template/header');
        $this->load->view('landing/berita', $data);
        $this->load->view('template/footer');
    }
    public function view($id)
    {
        $query = $this->buletin_model->detail_buletin($id);
        $data = array('buletin' => $query);
        $this->load->view('template/header');
        $this->load->view('berita/berita1', $data);
        $this->load->view('template/footer');
    }
    public function berita2()
    {
        $this->load->view('template/header');
        $this->load->view('berita/berita2');
        $this->load->view('template/footer');
    }
    public function berita3()
    {
        $this->load->view('template/header');
        $this->load->view('berita/berita3');
        $this->load->view('template/footer');
    }
}
