<?php

class Clientes_model extends CI_Model {
	public function buscaTodos() {
        return $this->db->get("clientes")->result_array();
    }

    function buscaCodigoNome(){
        $query = $this->db->query('SELECT codigo,nome FROM clientes');
        $clientes = $query->result_array();
        
        $clientesMapeados = [];  
        
        foreach ($clientes as $cliente) {  
            $clientesMapeados[$cliente['codigo']] = $cliente['nome']; 
        }

        return $clientesMapeados;
    }

    public function salva($cliente) {
    	$this->db->insert("clientes", $cliente);
     }

     public function excluir($Codigo)
     {
         $this->db->where('Codigo', $Codigo);
         $sql =  $this->db->delete('clientes');
        
         return $sql;       
     }

     public function atualizar($Nome, $Servidor, $Status) {
        $this->db->SET('Nome', 'Nome = Nome');
        $this->db->SET('Servidor', 'Servidor = Servidor');
        $this->db->SET('status', 'Status = status'); 
        $this->db->where('Codigo', $Codigo);
        $sql = $this->db->update('clientes');

        return $sql;
    }
 
}
