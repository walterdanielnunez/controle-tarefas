<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Pessoas_model extends CI_Model{
    
        public function __construct(){
            $this->load->database();
        }

        public function get_pessoas(){
            $this->db->select('id_pessoa, nome, (SELECT COUNT(id_tarefa) FROM tarefas WHERE pessoa = id_pessoa) as tarefas');
            $this->db->from('pessoas');
            $this->db->order_by("nome");
            $query = $this->db->get();
            return $query->result_array();
        }
        
        public function numero_tarefas($idPessoa, $tarefa = 0){
            $this->db->select('COUNT(id_tarefa) as tarefas');
            $this->db->from('tarefas');
            if($tarefa > 0){
                $this->db->where('id_tarefa !=', $tarefa);
            }
            $this->db->where('pessoa', $idPessoa);
            $query = $this->db->get();
            return $query->row_array();
        }
    
    
    }
