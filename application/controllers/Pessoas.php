<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pessoas extends CI_Controller{

	public function index(){
		$data["titulo"] = "Pessoas";
		$data["pessoas"] = $this->Pessoas_model->get_pessoas();
		$this->load->view('pessoas/lista', $data);
	}



}
