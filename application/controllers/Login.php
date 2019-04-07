<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$user_data = $this->session->userdata('logUser');
		if($user_data['log']=='Nin' || $user_data['log']=='Pin'){			
			redirect(base_url('klien'),'refresh');
		}
	}

	public function log()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('login');	
		}
		else
		{
			$this->akun->check();
		}
	}
}
