<?php
class Tarefas_model extends CI_Model {
	public function buscaTodos() {
        return $this->db->select('*');    
        $this->db->from('tarefas');
        $this->db->join('clientes', 'tarefas.idCliente = clientes.codigo');
        $this->db->join('projetos', 'projetos.codigo = tarefas.idProjeto');
        $this->db->join('linguagens', 'linguagens.codigo = tarefas.idLinguagem.t');
        $query = $this->db->get("tarefas")->result_array();
    }

    public function salva($tarefa) {
    	$this->db->insert("tarefas", $tarefa);
 	}
}
