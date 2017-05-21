<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Landing extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_config');
		$this->data['config'] 			= $this->m_config->ambil('config',1)->row();
	}

	public function index()
	{
		$data 		= $this->data;
		$data['menu'] = "Welcome";
		echo $this->blade->nggambar('main.landing.index',$data);
	}

}

/* End of file Landing.php */
/* Location: ./application/controllers/Landing.php */