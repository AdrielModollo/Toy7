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

}
