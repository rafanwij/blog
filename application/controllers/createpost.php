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
			$error['err'] = '';
			$this->load->view('createpost_view',$error);
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
			//image config
			$config['upload_path'] = './upload/';
			$config['allowed_types']='gif|jpg|jpeg|png';
			$this->load->library('upload',$config);
			$this->upload->do_upload();
			$data =  $this->upload->data();
			$error['err'] = $this->upload->display_errors();
			if(!$this->upload->do_upload()){			
					$this->load->view('createpost_view',$error);
			}else{
				$imagePath = 'upload/'.$data['file_name'];
				$this->load->model('createpost_model','createpost');
				$query = $this->createpost->createpost($title,$content,$imagePath);
				$this->session->set_userdata('currentPage',0);
				redirect('/dashboard','refresh');
			}			
		}
		else{
			redirect('/login','refresh');
		}
	}
}
