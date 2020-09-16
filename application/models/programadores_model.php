<?php
class Programadores_model extends CI_Model {
	public function buscaTodos() {
        return $this->db->get("programador")->result_array();
    }

    public function salva($programador) {
    	$this->db->insert("programador", $programador);
 	}
}
