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
		$imageName='';
		$title = $this->input->post('title');
		$content = $this->input->post('content');
		$id = $this->input->post('postId');
		//image config
		$config['upload_path'] = './upload/';
		$config['allowed_types']='gif|jpg|jpeg|png';
		$this->load->library('upload',$config);
		$this->upload->do_upload();
		$data =  $this->upload->data();
		$imageName = $data['file_name'];
		if(!$imageName || $imageName == ''){
			$imagePath = '';
		}
		else{
			$imagePath = 'upload/'.$data['file_name'];
		}

	$this->load->model('Edit_model','edit');
	$this->edit->updateData($id,$title,$content,$imagePath);

	redirect('/dashboard','refresh');
	}
}
