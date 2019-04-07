<?php
class Akun_model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
        }
        
        public function getAkun($username=FALSE){
	        if ($username === FALSE)
	        {
                $query = $this->db->get('akun');
                return $query->result_array();
	        }
	        $query = $this->db->get_where('akun', array('username' => $username));
	        return $query->row_array();
        }

        
        public function getLog($id=FALSE){
	        if ($id === FALSE)
	        {
                        $this->db->select('id, a.username, nama_lengkap, privil, IP, aktivitas, waktu');
                        $this->db->from('log_aktivitas_pegawai l');
                        $this->db->join('akun a','a.username=l.username');
                        $this->db->where('privil',2);
                $query = $this->db->get();
                return $query->result_array();
	        }
                $this->db->select('id, a.username, nama_lengkap, privil, IP, aktivitas, waktu');
                $this->db->from('log_aktivitas_pegawai l');
                $this->db->join('akun a','a.username=l.username');
                $this->db->where('privil',2);
                $this->db->where('id',$id);
                $query = $this->db->get();
	        return $query->row_array();
        }

        public function getProduktivitas($id=FALSE){
	        if ($id === FALSE)
	        {
                        $this->db->select('a.nama_lengkap as nama_petugas, 
                        sum((select count(*) from orders o where o.id=oj.id_order and o.status>1)) as jumlah_order, 
                        sum((select count(*) from orders o where o.id=oj.id_order and o.status=2)) as order_jalan, 
                        sum((select count(*) from orders o where o.id=oj.id_order and o.status=3)) as order_selesai');
                        $this->db->from('orderjob oj');
                        $this->db->join('akun a','a.username=oj.user_admin');
                        $this->db->group_by('a.nama_lengkap');
                        $query = $this->db->get();
                        return $query->result_array();
	        }
                $this->db->select('a.nama_lengkap as nama_petugas, 
                sum((select count(*) from orders o where o.id=oj.id_order and o.status>1)) as jumlah_order, 
                sum((select count(*) from orders o where o.id=oj.id_order and o.status=2)) as order_jalan, 
                sum((select count(*) from orders o where o.id=oj.id_order and o.status=3)) as order_selesai');
                $this->db->from('orderjob oj');
                $this->db->join('akun a','a.username=oj.user_admin');
                $this->db->group_by('a.nama_lengkap');
                $this->db->where('id', $id);
                $query = $this->db->get();
	        return $query->row_array();
        }

        public function check(){                
                $password=md5($this->input->post('password'));
                $username=$this->input->post('username');
                $data = array(
                        'username' =>$username,
                        'password' => $password,
                );
                $cek= $this->db->get_where('akun', $data)->num_rows();
                $iduser= $this->db->get_where('akun', array('username' => $username))->row_array();
                if($cek>0 && $iduser['status']==1){
                        if($iduser['privil']==1){
                                $data_session=array(
                                        'username' => $iduser['username'],
                                        'nama' => $iduser['nama_lengkap'],
                                                'log'=>'Nin',
                                        );
                        }else{
                                $data_session=array(
                                        'username' => $iduser['username'],
                                        'nama' => $iduser['nama_lengkap'],
                                                'log'=>'Pin',
                                        );
                        }
                        $this->session->set_userdata('logUser',$data_session);
                        redirect(base_url('klien'),'refresh');
                }else{
                echo "<script type='text/javascript'>alert('Username atau password salah, atau usernamemu tidak aktif.');</script>";
                redirect(base_url(),'refresh');
                }
        }

        public function tracelog($str){
                $user_data = $this->session->userdata('logUser');                                
        	$data = array(
		        'username' => $user_data['username'],
		        'ip' => $this->input->ip_address(),
		        'aktivitas' => $str,
			);

                $this->db->insert('log_aktivitas_pegawai', $data);
        }
		
        public function daftar(){                
        	$data = array(
		        'username' => $this->input->post('username'),
		        'nama_lengkap' => $this->input->post('nama'),
		        'password' => md5($this->input->post('password')),
		        'privil' => $this->input->post('privil'),
		        'status' => $this->input->post('status'),
			);

                $this->db->insert('akun', $data);
        }

        public function ubah($username){ 
                if($this->input->post('status')){
                        $status=$this->input->post('status');
                }else{
                        $status=0;
                }
                if($this->input->post('password')){                              
                        $data = array(
                                'nama_lengkap' => $this->input->post('nama'),
                                'password' => md5($this->input->post('password')),
                                'privil' => $this->input->post('privil'),
                                'status' => $status,
                                );
                }else{                        
                        $data = array(
                                'nama_lengkap' => $this->input->post('nama'),
                                'privil' => $this->input->post('privil'),
                                'status' => $status,
                                );
                }
                $this->db->where('username',$username);
                $this->db->update('akun', $data);

        }

        public function hapus($username){
                $this->db->where('username',$username);
                $this->db->delete('akun');
        }

}