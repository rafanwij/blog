<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	public function index()
	{
		$this->load->view('login_view');
	}

	public function input(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$this->load->model('login_model','login');

		$query = $this->login->login($username,$password);
		
		if($query == false){
			$this->load->view('false');
		}
		else{
			$this->load->view('dashboard');
		}
	}
}
