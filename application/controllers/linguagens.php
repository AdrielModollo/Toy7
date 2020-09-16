<?php
class Linguagens extends CI_Controller{

	public function linguagem () {
		$this->load->model("linguagens_model");
        $linguagens = $this->linguagens_model->buscaTodos();

        $dados = array("linguagens" => $linguagens);

		$this->load->view("linguagens/linguagem.php", $dados);
	}

}
