<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller{

	 function __construct(){
		parent :: __construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('option_model', 'option');
		$this->load->model('usuario_model');
	

	}

	public function index(){
		redirect('usuario/listar', 'refresh');
	
	}





	public function listar(){
		//verificar se usuário esta logado
		verificar_login();

		//carregar a view
		$dados['nome'] = 'Codeigniter - Listagem de usuários';
		$dados['h2'] = 'Listagem de usuários';
		$dados['tela'] = 'Listar';
		$dados['usuario'] = $this->usuario_model->get(10);
		$this->load->view('painel/usuarios', $dados);
	}





public function cadastrar(){
		//verificar se usuário esta logado
		verificar_login();

		//regras d validação
		$this->form_validation->set_rules('nome','NOME', 'trim|required');
		$this->form_validation->set_rules('email','EMAIL', 'trim|required');

		//verificar a validação
		if($this->form_validation->run() == FALSE):
			if('validation_errors'()):
				set_msg('validation_errors'());
			endif;
		
			
			$dados_insert['nome'] = to_bd($dados_form['nome']);
			$dados_insert['email'] = to_bd($dados_form['email']);

			//salvar no banco de dados
			if($id = $this->usuario_model->salvar($dados_insert)):
				set_msg('<p>usuario cadastrado com sucesso!</p>');
				redirect('usuario/editar/'.$id, 'refresh');
			else:
				set_msg('<p>Erro! Usuário não cadastrada.</p>');
			endif;
		endif;


		//carregar a view
		$dados['nome'] = 'Codeigniter - Cadastro de usuário';
		$dados['h2'] = 'Cadastro de usuário';
		$dados['tela'] = 'Cadastrar';
		$this->load->view('painel/usuarios', $dados);
	}






	public function excluir(){
	//verificar se o usuário est logado
	verificar_login();

	//verifica se foi passado o id da notícia
	$id = $this->uri->segment(3);
	if($id > 0):
		//id informado, continuar com exclusão
		if($usuario = $this->usuario_model->get_single($id)):
		$dados['usuario'] = $usuario;
		else:
			set_msg('<p>Usuário inexistente! Escolha um usuário para excluir!</p>');
			redirect('usuario/listar', 'refresh');
		endif;
	else:
		set_msg('<p>Você deve escolher um usuário para excluir!</p>');
			redirect('usuario/listar', 'refresh');
	endif;

	//regras de validação
	$this->form_validation->set_rules('enviar', 'ENVIAR', 'trim|required');

	//verificar a validação
		if($this->form_validation->run() == FALSE):
			if('validation_errors'()):
				set_msg('validation_errors'());
			endif;
		else:
			$imagem = 'uploads/'.$usuario->imagem;
			if($this->usuario->excluir($id)):
				set_msg('<p>Notícia excluída com sucesso!</p>');
				redirect('usuario/listar', 'refresh');
			else:
				set_msg('<p>Erro! Nenhuma notícia foi excluída!</p>');
			endif;
		endif;

	//carregar a view
		$dados['nome'] = 'Codeigniter - Exclusão de usuário';
		$dados['h2'] = 'Exclusão de usuário';
		$dados['tela'] = 'Excluir';
		$this->load->view('painel/usuario', $dados);
	}	






	public function editar(){
	//verificar se o usuário est logado
	verificar_login();

	//verifica se foi passado o id da notícia
	

	//regras de validação
		$this->form_validation->set_rules('nome','NOME', 'trim|required');
		$this->form_validation->set_rules('email','EMAIL', 'trim|required');

	//verificar a validação
		if($this->form_validation->run() == FALSE):
			if('validation_errors'()):
				set_msg('validation_errors'());
			endif;

		endif;

	//carregar a view
		$dados['nome'] = ' Alteração de usuário';
		$dados['h2'] = 'Alteração de usuário';
		$dados['tela'] = 'Editar';
		$this->load->view('painel/usuarios', $dados);
	}	

}
