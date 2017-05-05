<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Superuser extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->blade->sebarno('ctrl', $this);
		$this->load->model('m_jenjang');
		$this->load->model('m_mapel');
	}

	public function index()
	{
		$data['menu']				= "dashboard";
		echo $this->blade->nggambar('admin/home',$data);
	}

	// Start Mapel
	public function mapel($url=null,$id=null){
		
		$data['menu']				= "mapel";
		$data['mapel'] = $this->m_mapel->tampil_data('mapel')->result();
		$data['jenjang'] = $this->m_jenjang->tampil_data('jenjang')->result();

		if($url=="create"){
			$data['type']			= "create";
			echo $this->blade->nggambar('admin.mapel.content',$data);	
			return;
		}
		else if ($url == "created" && $this->input->is_ajax_request() == true){
			$nm_mapel = $this->input->post('nm_mapel');
			$nm_jenjang = $this->input->post('jenjang');
			$data = array(
				'nm_mapel' => $nm_mapel,
				'id_jenjang' => $nm_jenjang
			);

			if($this->m_mapel->input_data($data,'mapel')){
				echo goResult(true,"Data Telah Di Tambahkan");
				return;
			}
		}
		else if ($url=="update" && $id!=null){
			$data['type']			= "update";
			
			$where = array('id_mapel' => $id);
			
			$data['mapel'] = $this->m_mapel->detail($where,'mapel')->row();
			echo $this->blade->nggambar('admin.mapel.content',$data);	
			
		}
		else if ($url=="updated" && $id!=null && $this->input->is_ajax_request() == true){
			$nm_mapel = $this->input->post('nm_mapel');
			$nm_jenjang = $this->input->post('jenjang');
		 
			$data = array(
				'nm_mapel' => $nm_mapel,
				'id_jenjang' => $nm_jenjang
			);
		 
			$where = array(
				'id_mapel' => $id
			);
		 
			if($this->m_mapel->update_data($where,$data,'mapel')){
				echo goResult(true,"Data Telah Di Perbarui");
				return;
			}
		}
		else if ($url=="deleted" && $id != null){
			$where = array('id_mapel' => $id);
			if ($this->m_mapel->hapus_data($where,'mapel')) {
			}
			redirect('superuser/mapel');	
		}
		else {		
			echo $this->blade->nggambar('admin.mapel.index',$data);	
			return;
		}
	}
	// End Mapel
	
	//Start Jenjang 
	public function jenjang($url=null,$id=null){
		
		$data['menu']				= "jenjang";
		$data['jenjang'] = $this->m_jenjang->tampil_data('jenjang')->result();
		if($url=="create"){
			$data['type']			= "create";
			echo $this->blade->nggambar('admin.jenjang.content',$data);	
			return;
		}
		else if ($url == "created" && $this->input->is_ajax_request() == true){
			$nm_jenjang = $this->input->post('nm_jenjang');

			$data = array(
				'nm_jenjang' => $nm_jenjang
			);

			if($this->m_jenjang->input_data($data,'jenjang')){
				echo goResult(true,"Data Telah Di Tambahkan");
				return;
			}
		}
		else if ($url=="update" && $id!=null){
			
			$data['type']			= "update";
			
			$where = array('id_jenjang' => $id);
			
			$data['jenjang'] = $this->m_jenjang->detail($where,'jenjang')->row();
			echo $this->blade->nggambar('admin.jenjang.content',$data);	

		}
		else if ($url=="updated" && $id!=null && $this->input->is_ajax_request() == true){
			$nm_jenjang = $this->input->post('nm_jenjang');
		 
			$data = array(
				'nm_jenjang' => $nm_jenjang
			);
		 
			$where = array(
				'id_jenjang' => $id
			);
		 
			if($this->m_jenjang->update_data($where,$data,'jenjang')){
				echo goResult(true,"Data Telah Di Perbarui");
				return;
			}
		}
		else if ($url=="deleted" && $id != null){
			$where = array('id_jenjang' => $id);
			$this->m_jenjang->hapus_data($where,'jenjang');
			redirect('superuser/jenjang');
		}
		else {		
			echo $this->blade->nggambar('admin.jenjang.index',$data);	
			return;
		}
	}
	// End Mapel
}
