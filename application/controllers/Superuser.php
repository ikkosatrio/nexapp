<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Superuser extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();

		if(!$this->session->userdata('auth')){
			redirect('auth');
		}

		$this->blade->sebarno('ctrl', $this);
		$this->load->model('m_jenjang');
		$this->load->model('m_mapel');
		$this->load->model('m_bab');
		$this->load->model('m_config');
		$this->load->model('m_materi');
		$this->load->model('m_soal');

		$this->load->library('session');

		$this->data['config'] 			= $this->m_config->ambil('config',1)->row();
	}

	public function index()
	{	
		$data 		= $this->data;
		$data['menu'] = "dashboard";
		echo $this->blade->nggambar('admin.home',$data);
	}

	// Start Mapel
	public function mapel($url=null,$id=null){
		
		$data            = $this->data;
		$data['menu']    = "mapel";
		$data['mapel']   = $this->m_mapel->tampil_data('mapel')->result();
		$data['jenjang'] = $this->m_jenjang->tampil_data('jenjang')->result();

		if($url=="create"){
			$data['type']			= "create";
			echo $this->blade->nggambar('admin.mapel.content',$data);	
			return;
		}
		else if ($url == "created" && $this->input->is_ajax_request() == true){
			$nm_mapel   = $this->input->post('nm_mapel');
			$nm_jenjang = $this->input->post('jenjang');
			$data = array(
				'nm_mapel'   => $nm_mapel,
				'id_jenjang' => $nm_jenjang
			);

			if($this->m_mapel->input_data($data,'mapel')){
				echo goResult(true,"Data Telah Di Tambahkan");
				return;
			}
		}
		else if ($url=="update" && $id!=null){
			$data['type']  = "update";
			
			$where         = array('id_mapel' => $id);
			
			$data['mapel'] = $this->m_mapel->detail($where,'mapel')->row();
			echo $this->blade->nggambar('admin.mapel.content',$data);	
			
		}
		else if ($url=="updated" && $id!=null && $this->input->is_ajax_request() == true){
			$nm_mapel   = $this->input->post('nm_mapel');
			$nm_jenjang = $this->input->post('jenjang');
		 
			$data = array(
				'nm_mapel'   => $nm_mapel,
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
		$data            = $this->data;
		$data['menu']    = "jenjang";
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
			
			$data['type']    = "update";
			
			$where           = array('id_jenjang' => $id);
			
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
	
	//Start Bab
	public function bab($url=null,$id=null){
		$data          = $this->data;
		$data['menu']  = "bab";
		$data['bab']   = $this->m_bab->tampil_data('bab')->result();
		$data['mapel'] = $this->m_mapel->tampil_data('mapel')->result();

		if($url=="create"){
			$data['type']			= "create";
			echo $this->blade->nggambar('admin.bab.content',$data);	
			return;
		}
		else if ($url == "created" && $this->input->is_ajax_request() == true){
			$nm_bab     = $this->input->post('nm_bab');
			$nm_mapel   = $this->input->post('mapel');
			$materis    = $this->input->post('materi[]');
			$isiMateris = $this->input->post('isiMateri[]');

			$data = array(
				'nm_bab'   => $nm_bab,
				'id_mapel' => $nm_mapel
			);

			if($id = $this->m_bab->input_data($data,'bab')){
				foreach ($materis as $key => $result) {
					$data = array(
						'judul_materi' => $result,
						'isi_materi'   => $isiMateris[$key],
						'id_bab'       => $id
					);
					$this->m_materi->input_data($data,'materi');
				}
				echo goResult(true,"Data Telah Di Tambahkan");
				return;
			}
		}
		else if ($url=="update" && $id!=null){
			$data['type']			= "update";
			
			$where = array('id_bab' => $id);
			
			$data['bab'] = $this->m_bab->detail($where,'bab')->row();
			echo $this->blade->nggambar('admin.bab.content',$data);	
			
		}
		else if ($url=="updated" && $id!=null && $this->input->is_ajax_request() == true){
			$nm_bab   = $this->input->post('nm_bab');
			$nm_mapel = $this->input->post('mapel');
			
			$data = array(
				'nm_bab'   => $nm_bab,
				'id_mapel' => $nm_mapel
			);
		 
			$where = array(
				'id_bab' => $id
			);
		 
			if($this->m_bab->update_data($where,$data,'bab')){
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
			echo $this->blade->nggambar('admin.bab.index',$data);	
			return;
		}
	}
	//Start Bab
	
	//Start Soal
	public function soal($url=null,$id=null,$id_soal=null){
		$data          = $this->data;
		$data['menu']  = "bab";
		$data['bab']   = $this->m_bab->tampil_data('bab')->result();
		$data['mapel'] = $this->m_mapel->tampil_data('mapel')->result();
		$data['soal'] = $this->m_soal->tampil_data('soal')->result();

		if($url=="create"){
			$data['type']			= "create";
			
			$where = array('id_bab' => $id);
			
			$data['bab'] = $this->m_bab->detail($where,'bab')->row();
			echo $this->blade->nggambar('admin.soal.content',$data);	
		}
		else if ($url == "created" && $this->input->is_ajax_request() == true){
			$id_bab     = $id;
			$soal       = $this->input->post('isiSoal');
			$pembahasan = $this->input->post('pembahasan');
			$jawaban    = $this->input->post('jawaban');
			
			$pilihA     = $this->input->post('pilihA');
			$pilihB     = $this->input->post('pilihB');
			$pilihC     = $this->input->post('pilihC');
			$pilihD     = $this->input->post('pilihD');


			$data = array(
				'isi_soal'   => $soal,
				'pilihA'     => $pilihA,
				'pilihB'     => $pilihB,
				'pilihC'     => $pilihC,
				'pilihD'     => $pilihD,
				'jawaban'    => $jawaban,
				'pembahasan' => $pembahasan,
				'id_bab'     => $id_bab
			);

		if($id = $this->m_soal->input_data($data,'soal')){
				echo goResult(true,"Data Telah Di Tambahkan");
				return;
			}
		}
		else if ($url=="list") {
			$where        = array('soal.id_bab' => $id);
			$where2       = array('id_bab' => $id);
			$data['bab']  = $this->m_bab->detail($where2,'bab')->row();
			$data['soal'] = $this->m_soal->tampil_data_per_bab($where,'soal')->result();
			echo $this->blade->nggambar('admin.soal.index_bab',$data);
		}
		else if ($url=="update") {
			$data['type'] = "update";
			$where        = array('id_soal' => $id_soal);
			$where2       = array('id_bab' => $id);
			$data['bab']  = $this->m_bab->detail($where2,'bab')->row();
			$data['soal'] = $this->m_soal->tampil_data_per_bab($where,'soal')->row();
			echo $this->blade->nggambar('admin.soal.content',$data);
		}
		else if ($url=="updated" && $id!=null && $this->input->is_ajax_request() == true){
			// $id_bab     = $id;
			$soal       = $this->input->post('isiSoal');
			$pembahasan = $this->input->post('pembahasan');
			$jawaban    = $this->input->post('jawaban');
			
			$pilihA     = $this->input->post('pilihA');
			$pilihB     = $this->input->post('pilihB');
			$pilihC     = $this->input->post('pilihC');
			$pilihD     = $this->input->post('pilihD');


			$data = array(
				'isi_soal'   => $soal,
				'pilihA'     => $pilihA,
				'pilihB'     => $pilihB,
				'pilihC'     => $pilihC,
				'pilihD'     => $pilihD,
				'jawaban'    => $jawaban,
				'pembahasan' => $pembahasan
			);
		 
			$where = array(
				'id_soal' => $id
			);
		 
			if($this->m_soal->update_data($where,$data,'soal')){
				echo goResult(true,"Data Telah Di Perbarui");
				return;
			}
		}
		else if ($url=="deleted") {
			$where = array('id_soal' => $id_soal);
			if ($this->m_soal->hapus_data($where,'soal')) {
			}
			redirect('superuser/soal/list/'.$id);
		}
		else {		
			echo $this->blade->nggambar('admin.soal.index',$data);	
			return;
		}
	}
	//End Soal  
	
	// Start Config
	public function config ($type=null){
		$data         = $this->data;
		$data         = $this->data;
		$data['menu'] = "config";

		if ($this->input->is_ajax_request()) {

			switch ($type) {

				case 'update':					

					$logoname 		= $data['config']->logo;
					$iconname 		= $data['config']->icon;

					if (!empty($_FILES['logo']['name'])) {
						$upload 	= $this->upload('./assets/images/website/config/logo/','logo');

						if($upload['auth']	== false){
							echo goResult(false,$upload['msg']);
							return;
						}

						$logoname 	= $upload['msg']['file_name'];
						if(!empty($logoname)){remFile(base_url().'assets/images/website/config/logo/'.$data['config']->logo);}
					}

					if (!empty($_FILES['icon']['name'])) {
						$upload 	= $this->upload('./assets/images/website/config/icon/','icon');
						if($upload['auth']	== false){
							echo goResult(false,$upload['msg']);
							return;
						}

						$iconname 	= $upload['msg']['file_name'];
						if(!empty($iconname)){remFile(base_url().'assets/images/website/config/icon/'.$data['config']->icon);}
					}
					
					$id             = 1;
					$name           = $this->input->post('name');
					$email          = $this->input->post('email');
					$phone          = $this->input->post('phone');
					$address        = $this->input->post('address');
					$description    = $this->input->post('description');
					$meta_deskripsi = $this->input->post('meta_deskripsi');
					$meta_keyword   = $this->input->post('meta_keyword');
					
					$data = array(
						'name'           => $name,
						'email'          => $email,
						'phone'          => $phone,
						'address'        => $address,
						'description'    => $description,
						'icon'           => $iconname,
						'logo'           => $logoname,
						'meta_deskripsi' => $meta_deskripsi,
						'meta_keyword'   => $meta_keyword
					);
				 
					$where = array(
						'id' => $id
					);

					if($this->m_config->update_data($where,$data,'config')){
						echo goResult(true,"Data Telah Di Perbarui");
						return;
					}

					break;
				
				default:
					echo goResult(false,"Konfigurasi Telah Di Simpan");
					return;
					break;
			}
		   return;
		}

		echo $this->blade->nggambar('admin.config.index',$data);
		return;
	}
	// End Config
	 
	


	//fungsi global
	private function upload($dir,$name ='userfile'){
		$config['upload_path']      = $dir;
        $config['allowed_types']    = 'gif|jpg|png';
        $config['max_size']         = 2000;
        $config['encrypt_name'] 	= FALSE;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload($name))
        {		
        		$data['auth'] 	= false;
                $data['msg'] 	= $this->upload->display_errors();
                return $data;
        }
        else
        {
        		$data['auth']	= true;
        		$data['msg']	= $this->upload->data();
        		return $data;
        }
	}

	private function upload_files($path,$files){
        $config = array(
            'upload_path'   => $path,
            'allowed_types' => 'jpg|gif|png',
            'max_size'		=> '2000',
            'overwrite'     => false,
            'encrypt_name'  => FALSE                  
        );

        $this->load->library('upload', $config);

        $images 		= array();
        $data['msg']	= array();
        $data['auth']	= false;
        foreach ($files['name'] as $key => $image) {
            $_FILES['images[]']['name']= $files['name'][$key];
            $_FILES['images[]']['type']= $files['type'][$key];
            $_FILES['images[]']['tmp_name']= $files['tmp_name'][$key];
            $_FILES['images[]']['error']= $files['error'][$key];
            $_FILES['images[]']['size']= $files['size'][$key];

            $this->upload->initialize($config);

            if ($this->upload->do_upload('images[]')) {
            	$data['auth']		= true;
            	array_push($data['msg'],$this->upload->data());
            } else {
            	$data['auth']		= ($data['auth']==true) ? true : false;
            	array_push($data['msg'],$this->upload->display_errors());
            }
        }

        return $data;
    } 
}
