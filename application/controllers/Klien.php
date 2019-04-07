<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Klien extends CI_Controller {
	protected $user;
	public function __construct(){
		parent::__construct();
		$this->user=$this->session->userdata('logUser');
		if(empty($this->user['log'])){			
			redirect(base_url(),'refresh');
		}
	}
	
	public function klien()
	{
		$data['klien']=$this->klien->getKlien();
		$data['username']=$this->user['nama'];
		$data['mode']=$this->user['log'];
		$this->load->view('header');
		$this->load->view('nav',$data);
		$this->load->view('v_lihatKlien');
		$this->load->view('footer');
	}

	public function tambahklien()
	{
		if($this->user['log']!='Pin'){
			redirect(base_url('klien'),'refresh');
		}else{
			$data['username']=$this->user['nama'];
			$data['mode']=$this->user['log'];
			$this->form_validation->set_rules(
				'nomor_ktp', 'Nomor KTP',
				'is_unique[klien.nomor_ktp]',
				array(
						'is_unique'     => '%s sudah ada.'
				)
			);
		
			if ($this->form_validation->run() === FALSE)
			{
				$this->load->view('header');
				$this->load->view('nav',$data);
				$this->load->view('v_buatKlien');
				$this->load->view('footer');
		
			}
			else
			{
				$this->klien->daftar();
				redirect(base_url('klien'),'refresh');
			}
		}
	}

	public function editklien($ktp)
	{
		$data['username']=$this->user['nama'];
		$data['mode']=$this->user['log'];
		$data['klien']=$this->klien->getKlien($ktp);
		$this->form_validation->set_rules('nama', 'Nama', 'required');
	
		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('header');
			$this->load->view('nav',$data);
			$this->load->view('v_editKlien',$data);
			$this->load->view('footer');
	
		}
		else
		{
			$this->klien->ubah($ktp);
			redirect(base_url('klien'),'refresh');
		}
	}

	public function hapusklien($ktp)
	{
		if($this->user['log']!='Nin'){
			redirect(base_url('klien'),'refresh');
		}else{
			$this->klien->hapus($ktp);
			redirect(base_url('klien'),'refresh');
		}
	}

	public function riwayat($nomor_ktp)
	{
		echo json_encode($this->klien->getRiwayatKlien($nomor_ktp));
	}
}
