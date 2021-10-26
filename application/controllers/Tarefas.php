<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tarefas extends CI_Controller{

	public $data = array();

	function __Construct(){
		parent::__construct();
		$this->data["tarefas"] = $this->Tarefas_model->get_tarefas();
		$this->data["prioridades"] = $this->Tarefas_model->prioridades();
		$this->data["status"] = $this->Tarefas_model->status();
	}

	public function index(){
		$this->data["titulo"] = "Tarefas";
		$this->load->view('tarefas/lista', $this->data);
	}

	public function editar(){
		$idTarefa = $this->uri->segment(3);
		$tarefa = (isset($this->data["dados"])) ? $this->data["dados"] : $this->Tarefas_model->get_tarefa($idTarefa);
		if(!empty($tarefa)){
			$pessoas = $this->Pessoas_model->get_pessoas();
			$this->data["titulo"] = "Editar tarefa";
			$this->data["id_tarefa"] = $idTarefa;
			$this->data["tarefa"] = $tarefa;
			$this->data["pessoas"] = $pessoas;
			$this->load->view('tarefas/editar', $this->data);
		}else{
			redirect("./tarefas");
		}
		
	}

	public function nova(){
		$pessoas = $this->Pessoas_model->get_pessoas();
		$this->data["titulo"] = "Nova tarefa";
		$this->data["pessoas"] = $pessoas;
		$this->load->view('tarefas/nova', $this->data);
	}

	public function add(){
		$pessoa = $this->input->post("pessoa");
		$dados = array(
			'nome_tarefa' => $this->input->post("nome_tarefa"),
			'prioridade'  => $this->input->post("prioridade"),
			'status'  => $this->input->post("status"),
			'pessoa' => $pessoa
		);
		$tarefasPessoa = $this->Pessoas_model->numero_tarefas($pessoa)["tarefas"];
		if($tarefasPessoa < 3){
			if($this->Tarefas_model->adiciona_tarefa($dados)){
				redirect("./tarefas");
			}else{
				$this->data["error"] = "Não foi possível adicionar a tarefa. Tente novamente.";
				$this->data["dados"] = $dados;
				$this->nova();
			}
		}else{
			$this->data["error"] = "Pessoa já atingiu o limite de 3 tarefas.";
			$this->data["dados"] = $dados;
			$this->nova();
		}
	}

	public function save(){
		$idTarefa = $this->uri->segment(3);
		$pessoa = $this->input->post("pessoa");
		$dados = array(
			'nome_tarefa' => $this->input->post("nome_tarefa"),
			'prioridade'  => $this->input->post("prioridade"),
			'status'  => $this->input->post("status"),
			'pessoa' => $pessoa
		);
		$tarefasPessoa = $this->Pessoas_model->numero_tarefas($pessoa, $idTarefa)["tarefas"];
		if($tarefasPessoa < 3){
			if($this->Tarefas_model->edit_tarefa($dados, $idTarefa)){
				redirect("./tarefas");
			}else{
				$this->data["error"] = "Não foi possível editar a tarefa. Tente novamente.";
				$this->data["dados"] = $dados;
				$this->editar($dados);
			}
		}else{
			$this->data["error"] = "Pessoa já atingiu o limite de 3 tarefas.";
			$this->data["dados"] = $dados;
			$this->editar();
		}
	}

	public function excluir(){
		$idTarefa = $this->input->post("id_tarefa");
		if($this->Tarefas_model->delete($idTarefa)){
			redirect("./tarefas");
		}else{
			$this->data["error"] = "Não foi possível excluir a tarefa. Tente novamente.";
			$this->index();
		}
	}

}
