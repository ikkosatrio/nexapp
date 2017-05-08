<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->blade->sebarno('ctrl', $this);
		$this->load->model('m_jenjang');
		$this->load->model('m_mapel');
		$this->load->model('m_bab');
		$this->load->model('m_config');
		$this->load->model('m_materi');
		$this->load->model('m_soal');

		$this->data['config'] 			= $this->m_config->ambil('config',1)->row();
	}

	public function index()
	{
		$data 		= $this->data;
		$data['menu'] = "home";
		$data['mapel']   = $this->m_mapel->tampil_data('mapel')->result();
		$data['jenjang'] = $this->m_jenjang->tampil_data('jenjang')->result();
		echo $this->blade->nggambar('main.home',$data);
	}

	public function prediksi($url=null,$id=null)
	{
		$data         = $this->data;
		$data['menu'] = "prediksi";
		$where = array(
				'id_mapel' => $url
			);
		$data['mapel']   = $this->m_mapel->detail($where,'mapel')->row();
		
		if ($url=="start" && $id!=null) {
			$where = array(
				'mapel.id_mapel' => $id
			);
			$data['soal']   = $this->m_soal->soal_mulai($where,'soal')->result();
			echo $this->blade->nggambar('main.prediksi.start',$data);	
		}else{

		echo $this->blade->nggambar('main.prediksi.index',$data);
		}
	}

}

/* End of file Main.php */
/* Location: ./application/controllers/Main.php */