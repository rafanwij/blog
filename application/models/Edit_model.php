<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class edit_model extends CI_Model {
	function getData($postId){
		$queryString = "SELECT * FROM post WHERE postActivity = 'A' AND postId = ?";
		$query = $this->db->query($queryString,array($postId));
		if ($query != null && $query->num_rows() > 0) 
			return $query;		
		else return false;
	}
	function updateData($postId,$postTitle,$postContent,$imagePath){
		if($imagePath!=''){
			$queryString = "UPDATE post SET postTitle = ?, postContent = ?, imagePath = ? WHERE postId = ?";
			$query = $this->db->query($queryString, array($postTitle,$postContent,$imagePath, $postId));
		}
		else{
			$queryString = "UPDATE post SET postTitle = ?, postContent = ? WHERE postId = ?";
			$query = $this->db->query($queryString,array($postTitle,$postContent,$postId));
		}
	}
}