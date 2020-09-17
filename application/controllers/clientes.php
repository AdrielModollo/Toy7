<?php
class Clientes extends CI_Controller{

	public function cliente () {
		if($this->session->userdata("usuario_logado")) {
		$this->load->model("clientes_model");
        $clientes = $this->clientes_model->buscaTodos();

        $dados = array("clientes" => $clientes);

		$this->load->view("clientes/cliente.php", $dados);
	} else {
		redirect("inicio/index", "refresh");
		}
	}

	
	public function cadastroCliente () {
		if($this->session->userdata("usuario_logado")) {
			$cliente = array(
				"Nome" => $this->input->post("Nome"),
				"Servidor" => $this->input->post("Servidor"),
				"status" => $this->input->post("status"),
			);
			
			$this->load->model("clientes_model");
			$this->clientes_model->salva($cliente);
			$this->load->view("clientes/cliente.php");

			redirect("cliente/clientes", "refresh");
			
		} else {
			redirect("inicio/index", "refresh");
			}
		}

	

}


