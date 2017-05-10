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

	public function smp($url=null, $id=null){
    	$data['halaman']  = "smp";
        $data = $this->data;
    	if ($url == "bindo") {
    		$data['name'] = "bindo";
    		echo $this->blade->nggambar('mapel_smp.bindo_smp', $data);
    		return;

            // if ($tes == "nonsastra") {
            //     $data['name'] = "nonsastra";
            //     echo $this->blade->nggambar('mapel_smp.kisi_bindo.nonsastra', $data);
            //     return;
            // }
    	} elseif ($url == "matematika") {
            $data['name'] = "MTK";
            echo $this->blade->nggambar('mapel_smp.mtk_smp', $data);
            return;
        } elseif ($url == "bing") {
            $data['name'] = "bing";
            echo $this->blade->nggambar('mapel_smp.bing_smp', $data);
            return;
        } elseif ($url == "materi") {
            $data['name'] = "materi";
            echo $this->blade->nggambar('mapel_smp.home', $data);
            return;
        } elseif ($url == "nonsastra") {
            $data['name'] = "nonsastra";
            echo $this->blade->nggambar('mapel_smp.kisi_bindo.nonsastra', $data);
            return;
        } elseif ($url == "sastra") {
            $data['name'] = "sastra";
            echo $this->blade->nggambar('mapel_smp.kisi_bindo.sastra', $data);
            return;
        } elseif ($url == "menulis") {
            $data['name'] = "menulis";
            echo $this->blade->nggambar('mapel_smp.kisi_bindo.menulis', $data);
            return;
        } elseif ($url == "menyunting") {
            $data['name'] = "menyunting";
            echo $this->blade->nggambar('mapel_smp.kisi_bindo.menyunting', $data);
            return;
        } elseif ($url == "tanda_baca") {
            $data['name'] = "tanda_baca";
            echo $this->blade->nggambar('mapel_smp.kisi_bindo.tanda_baca', $data);
            return;
        } elseif ($url == "short") {
            $data['name'] = "short";
            echo $this->blade->nggambar('mapel_smp.kisi_bing.short',$data);
            return;
        } elseif ($url == "letter") {
            $data['name'] = "letter";
            echo $this->blade->nggambar('mapel_smp.kisi_bing.letters',$data);
            return;
        } elseif ($url == "invite") {
            $data['name'] = "invite";
            echo $this->blade->nggambar('mapel_smp.kisi_bing.invite',$data);
            return;
        } elseif ($url == "anoun") {
           $data['name'] = "anoun";
            echo $this->blade->nggambar('mapel_smp.kisi_bing.anoun',$data);
            return; 
        } elseif ($url == "advert") {
            $data['name'] = "advert";
            echo $this->blade->nggambar('mapel_smp.kisi_bing.advertis',$data);
            return; 
            
        } else {
            echo $this->blade->nggambar('main');
            return;
        } 
    } 

    public function sma($url=null, $id=null) {
        $data['halaman'] = "sma";
        $data = $this->data;
        if ($url == "materi_sma") {
            $data['name'] = "materi_sma";
            echo $this->blade->nggambar('mapel_sma.home', $data);
            return;
        }
    }

    public function esq() {
        $data['halaman'] = "esq";
        $data = $this->data;
    	echo $this->blade->nggambar('esq_smp',$data);
    }

    public function ice() {
        $data = $this->data;
        $data['halaman'] = "ice";
    	echo $this->blade->nggambar('ice_smp',$data);
    }

}

/* End of file Main.php */
/* Location: ./application/controllers/Main.php */