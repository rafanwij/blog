<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class blogpost extends CI_Controller {
	public function index()
	{	
		if($this->uri->segment(3)=='f'){
			$this->session->set_userdata('currentPage',0);
		}
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
					$this->session->set_userdata('sumPage',$sumPage);
					if(!$this->session->userdata('currentPage')){
						$data = array(
							'currentPage' => 0
							);
						$this->session->set_userdata($data);
					}
					$currentPage = $this->session->userdata('currentPage');
					$item_perPage = 3;
					$position = $currentPage*$item_perPage;
					$result = $this->dashboard->getData($position,$item_perPage);
					
					for($i=0;$i<$result->num_rows();$i++){
						$content = substr($result->row($i)->postContent, 0,300).'...';
						$detailUrl = base_url().'index.php/blogpost/detail/'.$result->row($i)->postId;
						$picUrl= base_url().'application/assets/pic/chef07.png';
						$date = $result->row()->postDate;
						$Date = date("d M Y", strtotime($date));
						$text = $text.'<div class="blog-post image-post" style="display:block;">
	<div class="post-head" style="float:left;">		
			<img alt="" src="'.$picUrl.'">		
	</div>
	<!-- Post Content -->
	<div class="post-content">
		<div style="inline-block;margin-top:3.5em;">
			<div id="postContent1" class="col-md-10 col-sm-10 col-xs-10" style="text-align:start;height:150px;vertical-align:bottom;display:table-cell;">
				<h2><a href="#">'.$result->row($i)->postTitle.'</a></h2>
				<ul class="post-meta">
					<li>'.$Date.'</li>
				</ul>
				</div>
		</div>
		<p style="margin-top:0.5em;">'.$content.'</p>
		<a class="main-button" style="float:right;" href="'.$detailUrl.'">Read More <i class="fa fa-angle-right"></i></a>
	</div>';
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
			$this->load->view('blogpost_view',$msg);
		}
		else{
			redirect('/login','refresh');
		}
	}
	public function older(){
		$text='';
		$this->load->model('dashboard_model','dashboard');
		$currentPage = $this->session->userdata('currentPage')+1;
		if($currentPage+1 > $this->session->userdata('sumPage')){
			$currentPage=$currentPage-1;
		}
		$this->session->set_userdata('currentPage',$currentPage);
		$item_perPage = 3;
		$position = $currentPage*$item_perPage;
		$result = $this->dashboard->getData($position,$item_perPage);

		for($i=0;$i<$result->num_rows();$i++){
			$content = substr($result->row($i)->postContent, 0,300).'...';
			$detailUrl = base_url().'index.php/blogpost/detail/'.$result->row($i)->postId;
			$picUrl=base_url().'application/assets/pic/chef07.png';
			$date = $result->row()->postDate;
			$Date = date("d M Y", strtotime($date));
			$text = $text.'<div class="blog-post image-post" style="display:block;">
	<div class="post-head" style="float:left;">		
			<img alt="" src="'.$picUrl.'">		
	</div>
	<!-- Post Content -->
	<div class="post-content">
		<div style="inline-block;margin-top:3.5em;">
			<div id="postContent1" class="col-md-10 col-sm-10 col-xs-10" style="text-align:start;height:150px;vertical-align:bottom;display:table-cell;">
				<h2><a href="#">'.$result->row($i)->postTitle.'</a></h2>
				<ul class="post-meta">
					<li>'.$Date.'</li>
				</ul>
				</div>
		</div>
		<p style="margin-top:0.5em;">'.$content.'</p>
		<a class="main-button" style="float:right;" href="'.$detailUrl.'">Read More <i class="fa fa-angle-right"></i></a>
	</div>';
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
		$this->load->view('blogpost_view',$msg);
	}

	public function newer(){
		$text='';
		$this->load->model('dashboard_model','dashboard');
		$currentPage = $this->session->userdata('currentPage')-1;
		if($currentPage < 0){
			$currentPage=0;
		}
		$this->session->set_userdata('currentPage',$currentPage);
		$item_perPage = 3;
		$position = $currentPage*$item_perPage;
		$result = $this->dashboard->getData($position,$item_perPage);

		for($i=0;$i<$result->num_rows();$i++)	{
			$content = substr($result->row($i)->postContent, 0,300).'...';
			$detailUrl = base_url().'index.php/blogpost/detail/'.$result->row($i)->postId;
			$picUrl= base_url().'application/assets/pic/chef07.png';			
			$date = $result->row()->postDate;
			$Date = date("d M Y", strtotime($date));
			$text = $text.'<div class="blog-post image-post" style="display:block;">
	<div class="post-head" style="float:left;">		
			<img alt="" src="'.$picUrl.'">		
	</div>
	<!-- Post Content -->
	<div class="post-content">
		<div style="inline-block;margin-top:3.5em;">
			<div id="postContent1" class="col-md-10 col-sm-10 col-xs-10" style="text-align:start;height:150px;vertical-align:bottom;display:table-cell;">
				<h2><a href="#">'.$result->row($i)->postTitle.'</a></h2>
				<ul class="post-meta">
					<li>'.$Date.'</li>
				</ul>
				</div>
		</div>
		<p style="margin-top:0.5em;">'.$content.'</p>
		<a class="main-button" style="float:right;" href="'.$detailUrl.'">Read More <i class="fa fa-angle-right"></i></a>
	</div>';
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
		$this->load->view('blogpost_view',$msg);
	}

	public function detail($postId)
	{
		$this->load->model('dashboard_model','dashboard');
		$result=$this->dashboard->getDetailPost($postId);
		$detail['title']=$result->row()->postTitle;
		$detail['content']=$result->row()->postContent;
		$detail['date']=$result->row()->postDate;
		$this->load->view('blogdetail_view',$detail);
	}

}

