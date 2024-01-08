<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->library(array('session', 'tank_auth'));
		$this->load->helper('url');
	}

	function index()
	{
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
			$this->load->view('shared/header', $data);
			$this->load->view('shared/nav', $data);
			$this->load->view('shared/nav_left', $data);
			$this->load->view('dashboard/home', $data);
			$this->load->view('shared/footer', $data);
		}
	}

	/**
	 * Open a notice page
	 * @param  string $page Filename of the page to open w/o the .php extension
	 */
	public function notice($page){

		if($this->session->flashdata('tankauth_allow_notice')){
			// Check for $data
			if($this->session->flashdata('tankauth_notice_data')) extract($this->session->flashdata('tankauth_notice_data'));
			
			switch($page){
				
				// Registration
				case 'registration-success':
					$data['page_title'] = 'Sukses Mendaftar';
					break;
				case 'registration-disabled':
					$data['page_title'] = 'Registration Disabled';
					break;	

				
				// Activation
				case 'activation-sent':
					$data['email'] = $email;
					$data['page_title'] = 'Aktivasi Email Dikirim';
					break;
				case 'activation-complete':
					$data['login_link'] = base_url('auth/login');
					$data['page_title'] = 'Aktivasi Berhasil';
					break;
				case 'activation-failed':
					$data['page_title'] = 'Aktivasi Gagal';
					break;
				
				
				// Password
				case 'password-changed':
					$data['page_title'] = 'Password Changed';
					break;
				case 'password-sent':
					$data['page_title'] = 'Kata sandi baru telah dikirim';
					break;
				case 'password-reset':
					$data['page_title'] = 'Password Reset';
					break;
				case 'password-failed':
					$data['page_title'] = 'Password Failed';
					break;
				
				
				// Email
				case 'email-sent':
					$data['email'] = $new_email;
					$data['page_title'] = 'Confirmation Email Sent';
					break;
				case 'email-activated':
					$data['login_link'] = base_url('auth/login');
					$data['page_title'] = 'Your Email has been Activated';
					break;
				case 'email-failed':
					$data['page_title'] = 'Email Sending Failed';
					break;
				
				
				// User + Account
				case 'user-banned':
					$data['page_title'] = 'You have been Banned.';
					break;
				case 'user-deleted':
					$data['page_title'] = 'Your account has been Deleted.';
					break;
				case 'acct-unapproved':
					$data['logout_link'] = base_url('auth/logout');
					$data['page_title'] = 'Account not yet Approved';
					break;
				case 'logout-success':
					$data['page_title'] = 'Logged Out';
					break;
				
				default:
					redirect('/auth/login');
			}
			
			if($this->session->flashdata('is_logged_out')) $this->tank_auth->logout();
			
			$data['body_class'] = $page;
			$this->load->view('landing/'.$page, $data);
		}
		else {
			redirect('/auth/login');
		}

	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
