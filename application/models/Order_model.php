<?php
class Order_model extends CI_Model {

        public function __construct()
        {
        	parent::__construct();
        }
		
        public function getInstansi($id=false){                
	        if ($id === FALSE)
	        {
                $query = $this->db->get('instansi');
                return $query->result_array();
	        }
	        $query = $this->db->get_where('instansi', array('id' => $id));
	        return $query->row_array();
        }

        public function getOrder($id=false){                
	        if ($id === FALSE)
	        {
                        $this->db->select('o.id,k.nama_lengkap as nama_klien,o.progress,o.id_instansi,k.nomor_ktp,o.pekerjaan,o.jenis_pekerjaan,o.nama_pekerjaan,o.tgl_mulai,o.tgl_selesai,o.keterangan,o.status,a.nama_lengkap as nama_petugas');
                        $this->db->from('klien k');
                        $this->db->join('orderjob oj', 'k.nomor_ktp = oj.nomor_ktp');
                        $this->db->join('akun a', 'a.username = oj.user_admin');
                        $this->db->join('orders o', 'o.id = oj.id_order');
                        $this->db->join('instansi i', 'o.id_instansi = i.id');
                        $query = $this->db->get();
                        return $query->result_array();
	        }
                $this->db->select('o.id,k.nama_lengkap as nama_klien,o.progress,o.id_instansi,k.nomor_ktp,o.pekerjaan,o.jenis_pekerjaan,o.nama_pekerjaan,o.tgl_mulai,o.tgl_selesai,o.keterangan,o.status,a.nama_lengkap as nama_petugas');
                $this->db->from('klien k');
                $this->db->join('orderjob oj', 'k.nomor_ktp = oj.nomor_ktp');
                $this->db->join('akun a', 'a.username = oj.user_admin');
                $this->db->join('orders o', 'o.id = oj.id_order');
                $this->db->join('instansi i', 'o.id_instansi = i.id');
                $this->db->where('o.id', $id);
                $query = $this->db->get();
	        return $query->row_array();
        }

        public function getMonitor($id=false){                
	        if ($id === FALSE)
	        {
                        $this->db->select('o.nama_pekerjaan,o.tgl_mulai,o.tgl_selesai,o.progress,o.keterangan,o.status,a.nama_lengkap as nama_petugas');
                        $this->db->from('akun a');
                        $this->db->join('orderjob oj', 'a.username = oj.user_admin');
                        $this->db->join('orders o', 'o.id = oj.id_order');
                        $query = $this->db->get();
                        return $query->result_array();
	        }
                $this->db->select('o.nama_pekerjaan,o.tgl_mulai,o.tgl_selesai,o.progress,o.keterangan,o.status,a.nama_lengkap as nama_petugas');
                $this->db->from('akun a');
                $this->db->join('orderjob oj', 'a.username = oj.user_admin');
                $this->db->join('orders o', 'o.id = oj.id_order');
                $this->db->where('o.id', $id);
                $query = $this->db->get();
	        return $query->row_array();
        }

        
        public function daftar(){  
                $tgl = explode(" - ",$this->input->post('tgl'));  
                $mulai = date("Y-m-d",strtotime($tgl[0]));           
                $selesai = date("Y-m-d",strtotime($tgl[1]));

        	$data = array(
		        'pekerjaan' => $this->input->post('pekerjaan'),
		        'nama_pekerjaan' => $this->input->post('nama_pekerjaan'),
		        'jenis_pekerjaan' => $this->input->post('jenis_pekerjaan'),
                        'tgl_mulai' => $mulai,
                        'tgl_selesai' => $selesai,
		        'keterangan' => $this->input->post('keterangan'),
		        'id_instansi' => $this->input->post('instansi'),
		        'progress' => "Menunggu verifikasi bu Dewi",
		        'status' => 1,
			);
                $this->db->insert('orders', $data);                
                $this->db->select('id');
                $order = $this->db->get_where('orders', $data)->row_array();
                
                $user_data = $this->session->userdata('logUser'); 
        	$data = array(
		        'user_admin' => $user_data['username'],
		        'id_order' => $order['id'],
		        'nomor_ktp' => $this->input->post('klien')
			);
                        $this->db->insert('orderjob', $data);
                        $this->akun->tracelog("Menambah order pekerjaan ".$this->input->post('nama_pekerjaan'));               
        }

        public function ubah($id){                 
                $tgl = explode(" - ",$this->input->post('tgl'));  
                $mulai = date("Y-m-d",strtotime($tgl[0]));           
                $selesai = date("Y-m-d",strtotime($tgl[1]));
        	$data = array(
		        'pekerjaan' => $this->input->post('pekerjaan'),
		        'nama_pekerjaan' => $this->input->post('nama_pekerjaan'),
		        'jenis_pekerjaan' => $this->input->post('jenis_pekerjaan'),
                        'tgl_mulai' => $mulai,
                        'tgl_selesai' => $selesai,
		        'keterangan' => $this->input->post('keterangan'),
		        'id_instansi' => $this->input->post('instansi'),
		        'progress' => $this->input->post('progress'),
			);
                        $this->db->where('id',$id);
                $this->db->update('orders', $data);                
                $this->db->select('id');
                
        	$data = array(
		        'id_order' => $id,
		        'nomor_ktp' => $this->input->post('klien')
			);
                        $this->db->where('id_order',$id);
                        $this->db->update('orderjob', $data);   
                        $this->akun->tracelog("Mengubah order pekerjaan ".$this->input->post('nama_pekerjaan'));
        }

        public function ubahStatus($id, $stat){
        	$data = array(
		        'status' => $stat
			);
                $this->db->where('id',$id);
                $this->db->update('orders', $data);   
        }

        public function hapus($id){
                $this->db->where('id_order',$id);
                $this->db->delete('orderjob');
                $this->db->where('id',$id);
                $this->db->delete('orders');
        }

}