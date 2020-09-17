<?php
class Projetos_model extends CI_Model {
	public function buscaTodos() {
        return $this->db->get("projetos")->result_array();
    }

    public function salva($projeto) {
    	$this->db->insert("projetos", $projeto);
 	}
}
