<?php
class Linguagens extends CI_Controller{

	public function linguagem () {
		if($this->session->userdata("usuario_logado")) {
		$this->load->model("linguagens_model");
        $linguagens = $this->linguagens_model->buscaTodos();

        $dados = array("linguagens" => $linguagens);

		$this->load->view("linguagens/linguagem.php", $dados);
	} else {
		redirect("inicio/index", "refresh");
		}
	}

}
