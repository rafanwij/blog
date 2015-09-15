<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class createpost extends CI_Controller {
	public function __construct(){
		parent:: __construct();
		$this->load->library(array('session','encrypt'));
	}
	public function index()
	{
		if($this->session->userdata('username') != null && $this->session->userdata('username') !="")
		{
			$this->load->view('createpost_view');
		}
		else{
			redirect('/login','refresh');
		}
	}
	public function createPost(){
		if($this->session->userdata('username') != null && $this->session->userdata('username') !="")
		{
			$title = $this->input->post('title');
			$content = $this->input->post('content');
			$imagePath = '';
			
			$this->load->model('createpost_model','createpost');
			$query = $this->createpost->createpost($title,$content,$imagePath);
			$this->session->set_userdata('currentPage',0);
			redirect('/dashboard','refresh');
		}
		else{
			redirect('/login','refresh');
		}
	}
}
