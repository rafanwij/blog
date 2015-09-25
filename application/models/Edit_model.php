<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class edit_model extends CI_Model {
	function getData($postId){
		$query = $this->db->query("SELECT * FROM post WHERE postActivity = 'A' AND postId = '".$postId."'");
		if ($query != null && $query->num_rows() > 0) 
			return $query;		
		else return false;
	}
	function updateData($postId,$postTitle,$postContent,$imagePath){
		$query = $this->db->query("UPDATE post SET postTitle = '".$postTitle."', postContent = '".$postContent.$imagePath."' WHERE postId = '".$postId."'");
	}
}