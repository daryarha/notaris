<?php
class Protokol_model extends CI_Model {

        public function __construct()
        {
        	parent::__construct();
        }
                
        public function getProtokol($no_akta=false){
                
	        if ($no_akta === FALSE)
	        {
                        $this->db->select('no_protokol, tgl_akta, o.nama_pekerjaan, nama_file, id_order, no_lemari');
                        $this->db->from('protokol p');
                        $this->db->join('orders o','o.id=p.id_order');
                $query = $this->db->get();
                return $query->result_array();
	        }
                $this->db->select('no_protokol, tgl_akta, o.nama_pekerjaan, nama_file, id_order, no_lemari');
                $this->db->from('protokol p');
                $this->db->join('orders o','o.id=p.id_order');
                $this->db->where('no_protokol', $no_akta);
	        $query = $this->db->get();
	        return $query->row_array();
        }

        public function daftar($filename=false){               
                $tgl = date("Y-m-d",strtotime($this->input->post('tgl_akta')));  
        	$data = array(
		        'no_protokol' => $this->input->post('no_protokol'),
		        'tgl_akta' => $tgl,
		        'no_lemari' => $this->input->post('no_lemari'),
		        'id_order' => $this->input->post('id_order'),
		        'nama_file' => $filename,
			);
                $this->db->insert('protokol', $data);
        }

        public function ubah($no_protokol=false,$filename=false){ 
                $tgl = date("Y-m-d",strtotime($this->input->post('tgl_akta'))); 
                if($filename){   
                        $data = array(
                                'tgl_akta' => $tgl,
                                'no_lemari' => $this->input->post('no_lemari'),
                                'id_order' => $this->input->post('id_order'),
                                'nama_file' => $filename
                        );
                }else{                      
                        $data = array(
                                'tgl_akta' => $tgl,
                                'no_lemari' => $this->input->post('no_lemari'),
                                'id_order' => $this->input->post('id_order')
                        );
                }
                $this->db->where('no_protokol',$no_protokol);
                $this->db->update('protokol', $data);

        }

        public function hapus($no_protokol){
                $this->db->where('no_protokol',$no_protokol);
                $this->db->delete('protokol');
        }
		

}