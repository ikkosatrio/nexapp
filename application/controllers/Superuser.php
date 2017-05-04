<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Superuser extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->blade->sebarno('ctrl', $this);
	}

	public function index()
	{
		echo $this->blade->nggambar('admin/home');
	}

	public function mapel($url=null,$id=null){
		
		$data['menu']				= "mapel";

		if($url=="create"){
			$data['type']			= "create";
			echo $this->blade->nggambar('admin.mapel.content',$data);	
			return;
		}
		else if ($url == "created" && $this->input->is_ajax_request() == true){

			
		}
		else if ($url=="update" && $id!=null){

			
		}
		else if ($url=="updated" && $id!=null && $this->input->is_ajax_request() == true){


		}
		else if ($url=="deleted" && $id != null){

		}
		else {		
			echo $this->blade->nggambar('admin.mapel.index',$data);	
			return;
		}
	}
}
