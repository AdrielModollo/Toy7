<?php

class Clientes extends CI_Controller{

	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata("usuario_logado")){
			redirect("inicio/index");
		}
		$this->load->model("clientes_model");
	}

	public function cliente () {
        $clientes = $this->clientes_model->buscaTodos();

        $dados = array("clientes" => $clientes);

		$this->load->view("clientes/cliente.php", $dados);
	} 
	
	public function cadastroCliente () {
		$cliente = array(
			"Nome" => $this->input->post("Nome"),
			"Servidor" => $this->input->post("Servidor"),
			"status" => $this->input->post("status"),
		);
		
		$this->clientes_model->salva($cliente);
		$this->load->view("clientes/cliente.php");

		redirect("clientes/cliente", "refresh");
	}

	public function delete($Codigo) {
		$this->clientes_model->excluir($Codigo);
		$this->load->view("clientes/cliente.php");

		redirect("clientes/cliente", "refresh");
		}

		public function editar_cadastro($Nome, $Servidor, $Status) {
			$cliente = array(
				"Nome" => $this->input->post("Nome"),
				"Servidor" => $this->input->post("Servidor"),
				"Status" => $this->input->post("Status"),
			);
			
			$this->clientes_model->atualizar($Nome, $Servidor, $Status);    
			$this->load->view("clientes/editar_cadastro.php");
	
			redirect("clientes/cliente", "refresh");
			}
		}