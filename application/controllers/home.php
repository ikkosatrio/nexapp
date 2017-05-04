<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class home extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        echo $this->blade->nggambar('home');
    }

    function smp(){
    	echo $this->blade->nggambar('mapel_smp/home');
    }

    function esq() {
    	echo $this->blade->nggambar('esq_smp');
    }

    function ice() {
    	echo $this->blade->nggambar('ice_smp');
    }
}
