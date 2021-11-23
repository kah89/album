<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagina extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->helper('url', 'form');
		$this->load->model('option_model', 'option');
	}


	public function index(){		
		$dados['titulo'] = 'Album';
		$this->load->view('home', $dados);
	}


}
