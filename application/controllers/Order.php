<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {
	protected $user;
	public function __construct(){
		parent::__construct();
		$this->user=$this->session->userdata('logUser');
	}

	public function order()
	{
		$data['mode']=$this->user['log'];
		$data['orders']=$this->order->getOrder();
		$data['username']=$this->user['nama'];
		$this->load->view('header');
		$this->load->view('nav',$data);
		$this->load->view('v_lihatOrder',$data);
		$this->load->view('footer');
	}

	public function tambahorder()
	{
		if($this->user['log']!='Pin'){
			redirect(base_url('order'),'refresh');
		}else{
			$data['mode']=$this->user['log'];
			$data['klien']=$this->klien->getKlien();
			$data['instansi']=$this->order->getInstansi();
			$data['username']=$this->user['nama'];
			$this->form_validation->set_rules('klien', 'Nama klien','required');
		
			if ($this->form_validation->run() === FALSE)
			{
				$this->load->view('header');
				$this->load->view('nav',$data);
				$this->load->view('v_buatOrder');
				$this->load->view('footer');
			}
			else
			{
				$this->order->daftar();
				redirect(base_url('order'),'refresh');
			}
		}
	}

	public function editorder($id)
	{	
		if($this->user['log']!='Pin'){
			redirect(base_url('order'),'refresh');
		}else{
			$data['mode']=$this->user['log'];
			$data['username']=$this->user['nama'];
			$data['order']=$this->order->getOrder($id);
			$data['klien']=$this->klien->getKlien();
			$data['instansi']=$this->order->getInstansi();
			$this->form_validation->set_rules('klien', 'Nama klien', 'required');
		
			if ($this->form_validation->run() === FALSE)
			{
				$this->load->view('header');
				$this->load->view('nav',$data);
				$this->load->view('v_editOrder');
				$this->load->view('footer');
			}
			else
			{
				$this->order->ubah($id);
				redirect(base_url('order'),'refresh');
			}
		}
		// $data['orders']=$this->order->getOrder($id);
	}

	public function hapusorder($id)
	{	
		if($this->user['log']!='Nin'){
			redirect(base_url('order'),'refresh');
		}else{
			$this->order->hapus($id);
			redirect(base_url('order'),'refresh');
		}
	}

	public function selesai($id){		
		if($this->user['log']!='Nin'){
			redirect(base_url('order'),'refresh');
		}else{
			$this->order->ubahStatus($id,3);
			redirect(base_url('order'),'refresh');
		}
	}
	
	public function verifikasi($id){
		if($this->user['log']!='Nin'){
			redirect(base_url('order'),'refresh');
		}else{
			$this->order->ubahStatus($id,2);
			redirect(base_url('order'),'refresh');
		}
	}
}
