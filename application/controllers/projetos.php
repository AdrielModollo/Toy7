<?php
class Projetos extends CI_Controller{

	public function projeto () {
		$this->load->model("projetos_model");
        $projetos = $this->projetos_model->buscaTodos();

        $dados = array("projetos" => $projetos);

		$this->load->view("projetos/projeto.php", $dados);
	}

}
