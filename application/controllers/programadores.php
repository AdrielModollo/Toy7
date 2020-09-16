<?php
class Programadores extends CI_Controller{

	public function programador () {
		$this->load->model("programadores_model");
        $programadores = $this->programadores_model->buscaTodos();

        $dados = array("projetos" => $programadores);

		$this->load->view("programadores/programador.php", $dados);
	}

}
