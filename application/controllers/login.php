<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {
	public function index()
	{	
		if($this->session->userdata('username') != null && $this->session->userdata('username') !="")
		{
			redirect('/dashboard','refresh');
		}

		$error['err'] = '';
		$this->load->view('login_view',$error);
	}

	public function input(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$this->load->model('login_model','login');

		$query = $this->login->login($username,$password);
		
		if($query == false){
			$error['err'] = 'Invalid username or password';
			$this->load->view('login_view',$error);
		}
		else if($this->session->userdata('username') != null && $this->session->userdata('username') !="")
		{
			redirect('/dashboard','refresh');
		}
		else{
			$data = array (
					'username' => $query->row(0)->username
				);
			$this->session->set_userdata($data);
			redirect('/dashboard','refresh');
		}
	}

	public function logout(){
		$this->session->unset_userdata('username');
		redirect('/login','refresh');
	}
}
