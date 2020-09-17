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

	public function cadastroProgramador() {
		if($this->session->userdata("usuario_logado")) {
			$programador = array(
				"Nome" => $this->input->post("Nome"),
			);
			
			$this->load->model("programadores_model");
			$this->programadores_model->salva($programador);
			$this->load->view("programadores/programador.php");

			redirect("programadores/programador", "refresh");
			
		} else {
			redirect("inicio/index", "refresh");
			}
		}

}
