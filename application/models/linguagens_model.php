<?php
class Linguagens_model extends CI_Model {
	public function buscaTodos() {
        return $this->db->get("linguagens")->result_array();
    }

    public function salva($linguagem) {
    	$this->db->insert("linguagem", $linguagem);
 	}
}
