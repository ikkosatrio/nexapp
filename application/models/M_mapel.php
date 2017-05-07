<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_mapel extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	function tampil_data($table){
		$this->db->from($table);
		$this->db->join('jenjang','jenjang.id_jenjang=mapel.id_jenjang');
		return $query = $this->db->get();
		// return $this->db->get($table);
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	
	function detail($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

}

/* End of file M_mapel.php */
/* Location: ./application/models/M_mapel.php */