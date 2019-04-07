<?php
class Klien_model extends CI_Model {

        public function __construct()
        {
        	parent::__construct();
        }
                
        
        
        public function getKlien($ktp=FALSE){
	        if ($ktp === FALSE)
	        {
                $query = $this->db->get('klien');
                return $query->result_array();
	        }
	        $query = $this->db->get_where('klien', array('nomor_ktp' => $ktp));
	        return $query->row_array();
        }
		
        
        public function getRiwayatKlien($ktp=FALSE){           
	        if ($ktp === FALSE)
	        {
                        $this->db->select('o.id,k.nama_lengkap as nama_klien,o.id_instansi,k.nomor_ktp,o.pekerjaan,o.jenis_pekerjaan,o.nama_pekerjaan,o.tgl_mulai,o.tgl_selesai,o.keterangan,o.status,a.nama_lengkap as nama_petugas');
                        $this->db->from('klien k');
                        $this->db->join('orderjob oj', 'k.nomor_ktp = oj.nomor_ktp');
                        $this->db->join('akun a', 'a.username = oj.user_admin');
                        $this->db->join('orders o', 'o.id = oj.id_order');
                        $this->db->join('instansi i', 'o.id_instansi = i.id');
                        $query = $this->db->get();
                        return $query->result_array();
	        }
                $this->db->select('o.pekerjaan,o.nama_pekerjaan,o.tgl_mulai,o.tgl_selesai,o.status,a.nama_lengkap as nama_petugas');
                $this->db->from('klien k');
                $this->db->join('orderjob oj', 'k.nomor_ktp = oj.nomor_ktp');
                $this->db->join('akun a', 'a.username = oj.user_admin');
                $this->db->join('orders o', 'o.id = oj.id_order');
                $this->db->where('k.nomor_ktp', $ktp);
                $query = $this->db->get();
	        return $query->result_array();
        }

        public function daftar(){
                $ttl = date("Y-m-d",strtotime($this->input->post('ttl')));                
        	$data = array(
		        'nomor_ktp' => $this->input->post('nomor_ktp'),
		        'nama_lengkap' => $this->input->post('nama'),
		        'tanggallahir' => $ttl,
		        'nomor_hp' => $this->input->post('nomor_hp'),
			);

                $this->db->insert('klien', $data);
                $this->akun->tracelog("Menambah klien ".$this->input->post('nama'));
        }

        public function ubah($ktp){      
                $ttl = date("Y-m-d",strtotime($this->input->post('ttl')));  
        	$data = array(
		        'nama_lengkap' => $this->input->post('nama'),
		        'tanggallahir' => $ttl,
		        'nomor_hp' => $this->input->post('nomor_hp'),
			);

                $this->db->where('nomor_ktp',$ktp);
                $this->db->update('klien', $data);
                $this->akun->tracelog("Mengubah data klien ".$this->input->post('nama'));
        }

        public function hapus($ktp){
                $this->db->where('nomor_ktp',$ktp);
                $this->db->delete('klien');
        }

}