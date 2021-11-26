<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagina extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->helper('url', 'form');
	}


	public function index(){		
		$dados['titulo'] = 'Album';
		$this->load->view('home', $dados);
	}

	public function fotos(){		
		$dados['titulo'] = 'Album';
		$this->load->view('fotos', $dados);
	}


}
