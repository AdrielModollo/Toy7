<?php
class Linguagens extends CI_Controller{

	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata("usuario_logado")){
			redirect("inicio/index");
		}
		$this->load->model("linguagens_model");
	}

	public function linguagem () {
        $linguagens = $this->linguagens_model->buscaTodos();

        $dados = array("linguagens" => $linguagens);

		$this->load->view("linguagens/linguagem.php", $dados);
	}

	public function cadastroLinguagem () {
			$linguagem = array(
				"Nome" => $this->input->post("Nome"),
			);
			
			$this->linguagens_model->salva($linguagem);
			$this->load->view("linguagens/linguagem.php");

			redirect("linguagens/linguagem", "refresh");
			
		} 

	}


