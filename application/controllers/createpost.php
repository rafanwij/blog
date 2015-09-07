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
}
