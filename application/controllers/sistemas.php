<?php
class Sistemas extends CI_Controller{

	public function sistema () {
		if($this->session->userdata("usuario_logado")) {
		$this->load->model("sistemas_model");
        $sistemas = $this->sistemas_model->buscaTodos();

        $dados = array("sistemas" => $sistemas);

		$this->load->view("sistemas/sistema.php", $dados);
	} else {
		redirect("inicio/index", "refresh");
		}
	}

}
