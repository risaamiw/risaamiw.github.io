<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dokpen extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */

    public function __construct()
    {
        parent::__construct();

        $this->load->library('tank_auth');

        if (!$this->tank_auth->is_logged_in()) {
            redirect('/auth/login/');
        } else {
            $this->data['dataUser'] = $this->session->userdata('data_ldap');

            $this->data['user_id'] = $this->tank_auth->get_user_id();
            $this->data['username'] = $this->tank_auth->get_username();
            $this->data['email'] = $this->tank_auth->get_email();

            $profile = $this->tank_auth->get_user_profile($this->data['user_id']);

            $this->data['profile_name'] = $profile['name'];
            $this->data['profile_foto'] = $profile['foto'];

            foreach ($this->tank_auth->get_roles($this->data['user_id']) as $val) {
                $this->data['role_id'] = $val['role_id'];
                $this->data['role'] = $val['role'];
                $this->data['full_name_role'] = $val['full'];
            }

            $this->data['link_active'] = 'Dokpen';

            //buat permission
            if (!$this->tank_auth->permit($this->data['link_active'])) {
                redirect('Home');
            }

            $this->load->model("Showmenu_model");
            $this->data['ShowMenu'] = $this->Showmenu_model->getShowMenu();

            $OpenShowMenu = $this->Showmenu_model->getOpenShowMenu($this->data);

            $this->data['openMenu'] = $this->Showmenu_model->getDataOpenMenu($OpenShowMenu->id_menu_parent);
            $this->load->model('admin/dokpen_model');
        }
    }

    public function index()
    {
        $query = $this->dokpen_model->daftar_dokpen();
        $data = array('dokpen' => $query);
        $this->data['title'] = 'Dokumen Legal Pendukung';

        $this->data['breadcrumbs'][] = [
            'active' => FALSE,
            'text' => 'Dokumen Legal Pendukung',
            'class' => 'breadcrumb-item pe-3 text-gray-400',
            'href' => site_url('Dokpen')
        ];

        $this->load->view('component/header', $this->data);
        $this->load->view('component/sidebar', $this->data);
        $this->load->view('admin/dokpen/dokpen_view', $data);
        $this->load->view('component/footer');
    }

    public function tambahDokpen()
    {
        $this->form_validation->set_rules('judul', 'judul', 'required');
        if ($this->form_validation->run() === FALSE) {
        } else {
            $this->load->library('upload');
            $upload_file = $_FILES['isi']['name'];
            $path = './assets/dokpen/';
            if (!is_dir($path)) {
                mkdir($path, 0777, true);
            }

            if ($upload_file) {
                $config['allowed_types'] = 'pdf|docx|xls|ppt';
                $config['upload_path'] = $path;

                $this->upload->initialize($config);

                if ($this->upload->do_upload('isi')) {
                    $new_file = $this->upload->data('file_name');
                    // $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $data = array(
                'judul' => $this->input->post('judul'),
                'isi' => $new_file
            );
            $this->dokpen_model->tambah($data);
            redirect(base_url() . 'content/dokpen/');
        }
        $this->data['title'] = 'Dokumen Legal Pendukung';
        $this->data['breadcrumbs'][] = [
            'active' => FALSE,
            'text' => 'Tambah Dokpen',
            'class' => 'breadcrumb-item pe-3 text-gray-400',
            'href' => site_url('Dokpen')
        ];

        $this->load->view('component/header', $this->data);
        $this->load->view('component/sidebar', $this->data);
        $this->load->view('admin/dokpen/tambah_dokpen');
        $this->load->view('component/footer');
    }

    public function editDokpen($id)
    {
        $this->form_validation->set_rules('judul', 'judul', 'required');
        if ($this->form_validation->run() === FALSE) {
            $data['dokpen_csirt'] = $this->dokpen_model->detail_dokpen();
            $data['detail'] = $this->dokpen_model->detail_dokpen($id);
            $data = array(
                'dokpen_csirt' => $this->dokpen_model->detail_dokpen(),
                'detail' => $this->dokpen_model->detail_dokpen($id)
            );
            // Kalau tidak ada error dokpen diupdate
        } else {
            $this->load->library('upload');
            $upload_file = $_FILES['isi']['name'];
            $path = './assets/dokpen/';
            if (!is_dir($path)) {
                mkdir($path, 0777, true);
            }

            if ($upload_file) {
                $config['allowed_types'] = 'pdf|docx|xls|ppt';
                $config['upload_path'] = $path;

                $this->upload->initialize($config);

                if ($this->upload->do_upload('isi')) {
                    $new_file = $this->upload->data('file_name');
                    // $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $data = array(
                'id_dokpen' => $id,
                'judul' => $this->input->post('judul'),
                'isi' => $new_file
            );
            $this->dokpen_model->edit_dokpen($data);
            redirect(base_url() . 'content/dokpen/');
        }
        $this->data['title'] = 'Dokumen Legal Pendukung';
        $this->data['breadcrumbs'][] = [
            'active' => FALSE,
            'text' => 'Edit Dokpen',
            'class' => 'breadcrumb-item pe-3 text-gray-400',
            'href' => site_url('Dokpen')
        ];

        $this->load->view('component/header', $this->data);
        $this->load->view('component/sidebar', $this->data);
        $this->load->view('admin/dokpen/edit_dokpen', $data);
        $this->load->view('component/footer');
    }


    public function deleteDokpen($id)
    {
        $this->dokpen_model->delete_dokpen($id);
        redirect(base_url() . 'content/dokpen/');
    }
}
