<?php
class Clientes extends CI_Controller{

	public function cliente () {
		$this->load->model("clientes_model");
        $clientes = $this->clientes_model->buscaTodos();

        $dados = array("clientes" => $clientes);

		$this->load->view("clientes/cliente.php", $dados);
	}

}
