<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akun extends CI_Controller {
	protected $user;
	public function __construct(){
		parent::__construct();
		$this->user=$this->session->userdata('logUser');
		if(empty($this->user['log'])){			
			redirect(base_url(),'refresh');
		}
	}
	
	public function akun()
	{
		$data['akun']=$this->akun->getAkun();
		$data['mode']=$this->user['log'];
		$data['username']=$this->user['nama'];
		if($this->user['log']!='Nin'){
			redirect(base_url('klien'),'refresh');
		}else{
			$this->load->view('header');
			$this->load->view('nav',$data);
			$this->load->view('v_lihatAkun',$data);
			$this->load->view('footer');
		}
	}

	public function tambahakun()
	{
		$data['mode']=$this->user['log'];
		$data['username']=$this->user['nama'];
		$this->form_validation->set_rules(
			'username', 'Username',
			'is_unique[akun.username]',
			array(
					'required'      => 'Harap isi %s.',
					'is_unique'     => '%s sudah ada.'
			)
		);
		$this->form_validation->set_rules('status', 'Status', 'trim');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');
	
		if($this->user['log']!='Nin'){
			redirect(base_url('klien'),'refresh');
		}else{
			if ($this->form_validation->run() === FALSE)
			{
				$this->load->view('header');
				$this->load->view('nav',$data);
				$this->load->view('v_buatAkun');
				$this->load->view('footer');
		
			}
			else
			{
				$this->akun->daftar();
				redirect(base_url('akun'),'refresh');
			}
		}
	}

	public function editakun($username)
	{
		$data['mode']=$this->user['log'];
		$data['username']=$this->user['nama'];
		$data['akun']=$this->akun->getAkun($username);
		$this->form_validation->set_rules('status', 'Status', 'trim');
	
		if($this->user['log']!='Nin'){
			redirect(base_url('klien'),'refresh');
		}else{
			if ($this->form_validation->run() === FALSE)
			{
				$this->load->view('header');
				$this->load->view('nav',$data);
				$this->load->view('v_editAkun',$data);
				$this->load->view('footer');
		
			}
			else
			{
				$this->akun->ubah($username);
				redirect(base_url('akun'),'refresh');
			}
		}
	}

	public function hapusakun($username)
	{
		if($this->user['log']!='Nin'){
			redirect(base_url('klien'),'refresh');
		}else{
			$this->akun->hapus($username);
			redirect(base_url('akun'),'refresh');
		}
	}

	public function monitor(){
		if($this->user['log']!='Nin'){
			redirect(base_url('klien'),'refresh');
		}else{
			$data['mode']=$this->user['log'];
			$data['username']=$this->user['nama'];
			$data['monitor']=$this->order->getMonitor();
			$this->load->view('header');
			$this->load->view('nav',$data);
			$this->load->view('v_lihatMonitoringKerja');
			$this->load->view('footer');
		}

	}

	public function produktivitas(){
		if($this->user['log']!='Nin'){
			redirect(base_url('klien'),'refresh');
		}else{
			$data['produktif']=$this->akun->getProduktivitas();
			$data['mode']=$this->user['log'];
			$data['username']=$this->user['nama'];
			$this->load->view('header');
			$this->load->view('nav',$data);
			$this->load->view('v_lihatProduktivitasPegawai');
			$this->load->view('footer');
		}

	}

	public function log(){
		if($this->user['log']!='Nin'){
			redirect(base_url('klien'),'refresh');
		}else{
			$data['mode']=$this->user['log'];
			$data['username']=$this->user['nama'];
			$data['log']=$this->akun->getLog();
			$this->load->view('header');
			$this->load->view('nav',$data);
			$this->load->view('v_logAktivitasPegawai');
			$this->load->view('footer');
		}
	}

	public function logout(){
        $this->session->sess_destroy();
        redirect(base_url(),'refresh');
	}

}
