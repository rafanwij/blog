<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class edit extends CI_Controller {
	public function __construct(){
		parent:: __construct();
		$this->load->library(array('session','encrypt'));
	}
	public function index(){

	}
	public function edit()
	{	
		$postId = $this->uri->segment(3);
		$this->load->model('edit_model','edit');
		$query = $this->edit->getData($postId);
		$msg = array (
				'id' => $postId,
				'title' => $query->row(0)->postTitle,
				'content' => $query->row(0)->postContent
			);
		$this->load->view('edit_view',$msg); 
	}
	public function save(){
		$imagePath="";
		$title = $this->input->post('title');
		$content = $this->input->post('content');
		$id = $this->input->post('postId');
		if(!$imagePath || $imagePath== ''){
			$imagePath = '';
		}

	$this->load->model('Edit_model','edit');
	$this->edit->updateData($id,$title,$content,$imagePath);

	redirect('/dashboard','refresh');
	}
}
