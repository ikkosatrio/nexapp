<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_riwayat extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	function tampil_data($table){
		return $this->db->get($table);
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function detail($where,$table){
		$this->db->join('mapel','mapel.id_mapel=riwayat.id_mapel');	
		return $this->db->get_where($table,$where);
	}

}

/* End of file M_riwayat.php */
/* Location: ./application/controllers/M_riwayat.php */