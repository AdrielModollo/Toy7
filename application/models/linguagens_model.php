<?php
class Linguagens_model extends CI_Model {
	public function buscaTodos() {
        return $this->db->get("linguagens")->result_array();
    }

    function buscaCodigoNome(){
        $query = $this->db->query('SELECT codigo,nome FROM linguagens');
        $linguagens = $query->result_array();
        
        $linguagensMapeados = [];  
        
        foreach ($linguagens as $linguagem) {  
            $linguagensMapeados[$linguagem['codigo']] = $linguagem['nome']; 
        }

        return $linguagensMapeados;
    }


    public function salva($linguagem) {
    	$this->db->insert("linguagens", $linguagem);
 	}
}
