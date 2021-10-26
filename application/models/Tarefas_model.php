<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Tarefas_model extends CI_Model{
    
        public function __construct(){
            $this->load->database();
        }

        public function get_tarefas(){
            $this->db->select('*');
            $this->db->from('tarefas');
            $this->db->join('pessoas', 'pessoas.id_pessoa = tarefas.pessoa');
            $this->db->order_by("prioridade DESC, status");
            $query = $this->db->get();
            return $query->result_array();
        }

        public function get_tarefa($id){
            $this->db->select('nome_tarefa, prioridade, status, pessoa');
            $this->db->from('tarefas');
            $this->db->where('id_tarefa', $id);
            $this->db->limit(1);
            $query = $this->db->get();
            return $query->row_array();
        }

        public function prioridades(){
            $prioridades[1] = "Baixa";
            $prioridades[2] = "Normal";
            $prioridades[3] = "Alta";
            return $prioridades;
        }
    
        public function status(){
            $status[0] = "Pendente";
            $status[1] = "Em andamento";
            $status[2] = "Concluída";
            return $status;
        }

        public function adiciona_tarefa($dados){
            return $this->db->insert('tarefas', $dados);
        }

        public function edit_tarefa($dados, $idTarefa){
            $this->db->where('id_tarefa', $idTarefa);
            return $this->db->update('tarefas', $dados);
        }

        public function delete($idTarefa){
            $this->db->where('id_tarefa', $idTarefa);
            return $this->db->delete('tarefas');
        }


    
    
    
    }
