<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Protokol extends CI_Controller {

	protected $user;
	public function __construct(){
		parent::__construct();
		$this->user=$this->session->userdata('logUser');
		if(empty($this->user['log'])){			
			redirect(base_url(),'refresh');
		}
	}

	public function protokol()
	{
		$data['protokol']=$this->protokol->getProtokol();
		$data['mode']=$this->user['log'];
		$data['username']=$this->user['nama'];
		$this->load->view('header');
		$this->load->view('nav',$data);
		$this->load->view('v_lihatProtokolNotaris');
		$this->load->view('footer');
	}

	public function tambahprotokol()
	{	
		if($this->user['log']!='Nin'){
			redirect(base_url('protokol'),'refresh');
		}else{
			$config['upload_path']   = './uploads/file_protokol/';
			$config['allowed_types'] = 'pdf';
			$this->load->library('upload', $config);
			
			if (!$this->upload->do_upload('nama_file'))
			{
				$data['error'] = $this->upload->display_errors();
				$data['mode']=$this->user['log'];
				$data['username']=$this->user['nama'];
				$data['order']=$this->order->getOrder();
				$this->load->view('header');
				$this->load->view('nav',$data);
				$this->load->view('v_buatProtokolNotaris');
				$this->load->view('footer');
			}else{
				$filename = $this->upload->data('file_name');
				$this->protokol->daftar($filename);
				redirect(base_url('protokol'),'refresh');
			}
		}
	}

	public function editprotokol($no_akta)
	{ 	
		if($this->user['log']!='Nin'){
			redirect(base_url('protokol'),'refresh');
		}else{			
			$config['upload_path']   = './uploads/file_protokol/';
			$config['allowed_types'] = 'pdf';
			$this->load->library('upload', $config);
			$this->form_validation->set_rules('id_order', 'Order','required');
			if ($this->form_validation->run() === FALSE)
			{
				$data['error'] = $this->upload->display_errors();
				$data['mode']=$this->user['log'];
				$data['username']=$this->user['nama'];
				$data['protokol']=$this->protokol->getProtokol($no_akta);
				$data['order']=$this->order->getOrder();
				$this->load->view('header');
				$this->load->view('nav',$data);
				$this->load->view('v_editProtokolNotaris');
				$this->load->view('footer');
			}
			else
			{
				if($this->upload->do_upload('nama_file')){
					// echo "sini";
					$filename = $this->upload->data('file_name');
					$this->protokol->ubah($no_akta,$filename);
				}else{
					// echo "sana";
					$this->protokol->ubah($no_akta);
				}
				redirect(base_url('protokol'),'refresh');
			}
		}
	}

	public function hapusprotokol($no_akta)
	{	
		if($this->user['log']!='Nin'){
			redirect(base_url('protokol'),'refresh');
		}else{
			$this->protokol->hapus($no_akta);
			redirect(base_url('protokol'),'refresh');
		}
	}
}
