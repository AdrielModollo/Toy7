<?php
class Clientes_model extends CI_Model {
	public function buscaTodos() {
        return $this->db->get("clientes")->result_array();
    }

    public function salva($cliente) {
    	$this->db->insert("cliente", $cliente);
 	}
}
