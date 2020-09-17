<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios extends CI_Controller {	
    public function cadastro() {
		if($this->session->userdata("usuario_logado")) {
	    $usuario = array(
	        "nome" => $this->input->post("nome"),
	        "email" => $this->input->post("email"),
	        "senha" => md5($this->input->post("senha"))
	    );
	    
        $this->load->model("usuarios_model");
        $this->usuarios_model->salva($usuario);
		$this->load->view("usuarios/cadastro.php");
		
	} else {
		redirect("inicio/index", "refresh");
		}
	}
	
}
