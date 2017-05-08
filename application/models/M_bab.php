<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_bab extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	function tampil_data($table){
		$this->db->from($table);
		$this->db->join('mapel','mapel.id_mapel=bab.id_mapel');
		$this->db->join('jenjang','jenjang.id_jenjang=mapel.id_jenjang');
		return $query = $this->db->get();
		// return $this->db->get($table);
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
		return $this->db->insert_id();
	}
	
	function detail($where,$table){
		$this->db->join('mapel','mapel.id_mapel=bab.id_mapel');
		$this->db->join('jenjang','jenjang.id_jenjang=mapel.id_jenjang');		
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

/* End of file M_bab.php */
/* Location: ./application/models/M_bab.php */