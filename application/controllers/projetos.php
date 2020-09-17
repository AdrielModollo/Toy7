<?php
class Projetos extends CI_Controller{

	public function projeto () {
		if($this->session->userdata("usuario_logado")) {
		$this->load->model("projetos_model");
        $projetos = $this->projetos_model->buscaTodos();

        $dados = array("projetos" => $projetos);

		$this->load->view("projetos/projeto.php", $dados);
	} else {
		redirect("inicio/index", "refresh");
		}
	}

	public function cadastroProjeto() {
		if($this->session->userdata("usuario_logado")) {
			$projeto = array(
				"Nome" => $this->input->post("Nome"),
				"Descricao" => $this->input->post("Descricao"),
			);
			
			$this->load->model("projetos_model");
			$this->projetos_model->salva($projeto);
			$this->load->view("projetos/projeto.php");

			redirect("projetos/projeto", "refresh");
			
		} else {
			redirect("inicio/index", "refresh");
			}
		}


}
