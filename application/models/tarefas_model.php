<?php
class Tarefas_model extends CI_Model {
	public function buscaTodos() {
        return $this->db->get("tarefas")->result_array();
    }

    public function salva($tarefa) {
    	$this->db->insert("tarefas", $tarefa);
 	}
}
