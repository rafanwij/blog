<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {
	public function __construct(){
		parent:: __construct();
		$this->load->library(array('session','encrypt'));
	}
	public function index()
	{	
		$this->session->unset_userdata('sumPage','currentPage');
		$msg['previous'] = 'style="visibility:hidden;"';
		$msg['next']='style="visibility:hidden;"';
		$msg['page']='';

		if($this->session->userdata('username') != null && $this->session->userdata('username') !="")
		{	 
			$text='';
			$this->load->model('dashboard_model','dashboard');
				$query = $this->dashboard->countPage();
				if($query != false){
					$sumRow = $query->num_rows();
					$sumPage = ceil($sumRow / 3);
					$data = array(
						'sumPage' => $sumPage,
						'currentPage' => 0
						);
					$this->session->set_userdata($data);
					$currentPage = $this->session->userdata('currentPage');
					$item_perPage = 3;
					$position = $currentPage*$item_perPage;
					$result = $this->dashboard->getData($position,$item_perPage);

					for($i=0;$i<$result->num_rows();$i++){
						$content = substr($result->row($i)->postContent, 0,400).'...';
						$text = $text.'<h2>'.$result->row($i)->postTitle.'</h2><hr>'.$content.'</p><a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a><hr>';
					}
					$msg['text'] = $text;

					$page = $currentPage+1;
					$msg['page'] = $page.' of '.$sumPage;

					if($currentPage == 0){
						$msg['previous'] = 'style="visibility:hidden;"';
					}
					else{
						$msg['previous'] = '';
					}
					if($currentPage+1 >= $sumPage){
						$msg['next'] = 'style="visibility:hidden;"';
					}
					else{
						$msg['next'] = '';
					}
				}
				else{
					$msg['text']="No data avaiable";
				}
			$this->load->view('dashboard_view',$msg);
		}
		else{
			redirect('/login','refresh');
		}
	}
	public function older(){
		$text='';
		$this->load->model('dashboard_model','dashboard');
		$currentPage = $this->session->userdata('currentPage')+1;
		$this->session->set_userdata('currentPage',$currentPage);
		$item_perPage = 3;
		$position = $currentPage*$item_perPage;
		$result = $this->dashboard->getData($position,$item_perPage);

		for($i=0;$i<$result->num_rows();$i++){
			$content = substr($result->row($i)->postContent, 0,400).'...';
			$text = $text.'<h2>'.$result->row($i)->postTitle.'</h2><hr>'.$content.'</p><a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a><hr>';
		}
		$msg['text'] = $text;
		$sumPage = $this->session->userdata('sumPage');
		$page = $currentPage+1;
		$msg['page'] = $page.' of '.$sumPage;

		if($currentPage == 0){
			$msg['previous'] = 'style="visibility:hidden;"';
		}
		else{
			$msg['previous'] = '';
		}
		if($currentPage+1 >= $sumPage){
			$msg['next'] = 'style="visibility:hidden;"';
		}
		else{
			$msg['next'] = '';
		}
		$this->load->view('dashboard_view',$msg);
	}

	public function newer(){
		$text='';
		$this->load->model('dashboard_model','dashboard');
		$currentPage = $this->session->userdata('currentPage')-1;
		$this->session->set_userdata('currentPage',$currentPage);
		$item_perPage = 3;
		$position = $currentPage*$item_perPage;
		$result = $this->dashboard->getData($position,$item_perPage);

		for($i=0;$i<$result->num_rows();$i++){
			$content = substr($result->row($i)->postContent, 0,400).'...';
			$text = $text.'<h2>'.$result->row($i)->postTitle.'</h2><hr>'.$content.'</p><a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a><hr>';
		}
		$msg['text'] = $text;
		$sumPage = $this->session->userdata('sumPage');
		$page = $currentPage+1;
		$msg['page'] = $page.' of '.$sumPage;

		if($currentPage == 0){
			$msg['previous'] = 'style="visibility:hidden;"';
		}
		else{
			$msg['previous'] = '';
		}
		if($currentPage+1 >= $sumPage){
			$msg['next'] = 'style="visibility:hidden;"';
		}
		else{
			$msg['next'] = '';
		}
		$this->load->view('dashboard_view',$msg);
	}
}
