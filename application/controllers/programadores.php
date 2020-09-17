<?php
class Programadores extends CI_Controller{

	public function programador () {
	 if($this->session->userdata("usuario_logado")) {
		$this->load->model("programadores_model");
        $programadores = $this->programadores_model->buscaTodos();

        $dados = array("programadores" => $programadores);

		$this->load->view("programadores/programador.php", $dados);
	} else {
		redirect("inicio/index", "refresh");
		}
	}

}
