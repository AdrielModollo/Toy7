<?php
class Tarefas extends CI_Controller{

	public function listarTarefas () {
		$this->load->model("tarefas_model");
        $tarefas = $this->tarefas_model->buscaTodos();

        $dados = array("tarefas" => $tarefas);
		$this->load->view("tarefas/listarTarefas.php", $dados);
	}

    public function formulario() {
        $this->load->view("tarefas/formulario");
    }

    public function novo(){
    	$usuarioLogado = $this->session->userdata("usuario_logado");

	    $tarefa = array(
	        "nome" => $this->input->post("nome"),
	        "descricao" => $this->input->post("descricao"),
	        "usuario_id" => $usuarioLogado["id"],
	        "preco" => $this->input->post("preco")
	    );
	    	    
		$this->load->model("tarefas_model");
	    $this->tarefas_model->salva($tarefa);
	    $this->session->set_flashdata("success", "tarefa salva com sucesso");

	    redirect("/");
	}
}
