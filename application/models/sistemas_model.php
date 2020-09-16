<?php
class Sistemas_model extends CI_Model {
	public function buscaTodos() {
        return $this->db->get("sistema")->result_array();
    }

    public function salva($sistema) {
    	$this->db->insert("sistema", $sistema);
 	}
}
