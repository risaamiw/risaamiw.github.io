<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{
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

            $this->data['link_active'] = 'Profil';

            //buat permission
            if (!$this->tank_auth->permit($this->data['link_active'])) {
                redirect('Home');
            }

            $this->load->model("Showmenu_model");
            $this->data['ShowMenu'] = $this->Showmenu_model->getShowMenu();

            $OpenShowMenu = $this->Showmenu_model->getOpenShowMenu($this->data);

            $this->data['openMenu'] = $this->Showmenu_model->getDataOpenMenu($OpenShowMenu->id_menu_parent);
            $this->load->model('Profil_model');
        }
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('name', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('gender', 'gender', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        if ($this->form_validation->run() === FALSE) {

            $profile = $this->tank_auth->get_user_profile($this->data['user_id']);
            $data = array(
                'nama_lengkap' => $profile['name'],
                'username' => $this->tank_auth->get_username(),
                'email' => $this->tank_auth->get_email(),
                'gender' => $profile['gender'],
                'alamat' => $profile['alamat'],
                'tanggal_lahir' => $profile['tanggal_lahir'],
            );
        } else {
            $this->load->library('upload');
            $upload_image = $_FILES['foto']['name'];
            $path = './assets/media/profiles/';
            if (!is_dir($path)) {
                mkdir($path, 0777, true);
            }

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png|jpeg|';
                $config['max_size'] = '1500';
                $config['upload_path'] = $path;

                $this->upload->initialize($config);

                if ($this->upload->do_upload('foto')) {
                    $new_image = $this->upload->data('file_name');
                    // $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $data = array(
                'username' => $this->input->post('Username'),
                'name' => $this->input->post('nama_lengkap'),
                'email' => $this->input->post('Email'),
                'gender' => $this->input->post('gender'),
                'alamat' => $this->input->post('alamat'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'foto' => $new_image
            );
            redirect(base_url() . 'Profil/profil/');
        }
        $this->data['title'] = 'Profil Saya';
        $this->data['breadcrumbs'][] = [
            'active' => FALSE,
            'text' => 'Profil Saya',
            'class' => 'breadcrumb-item pe-3 text-gray-400',
            'href' => site_url('Profil')
        ];

        $this->load->view('component/header', $this->data);
        $this->load->view('component/sidebar', $this->data);
        $this->load->view('profil', $data);
        $this->load->view('component/footer');
    }
}
