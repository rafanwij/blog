<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class blogpost_model extends CI_Model
{
	function __construct() 
	{
		parent::__construct();
	}

	function countPage(){
		$query = $this->db->query("SELECT * FROM post WHERE postActivity = 'A' ");
		if ($query != null && $query->num_rows() > 0) 
			return $query;		
		else return false;
	}
	function getData($position,$item_perPage){
		$query = $this->db->query("SELECT postId,postTitle,postContent,postDate,SUBSTRING_INDEX( imagePath,  'upload' , -1 ) AS imagePath, postActivity FROM post WHERE postActivity = 'A' ORDER BY postId DESC LIMIT ".$position.",".$item_perPage);
		if ($query != null && $query->num_rows() > 0) 
			return $query;		
		else return false;
	}
	function deleteData($postId){
		$query = $this->db->query("UPDATE post SET postActivity = 'I' WHERE postId =  ".$postId."");
		return $query;
	}
	function getDetailPost($postId){
		$query = $this->db->query("SELECT postId,postTitle,postContent,postDate,SUBSTRING_INDEX( imagePath,  'upload' , -1 ) AS imagePath, postActivity FROM post WHERE postActivity='A' AND postId=".$postId);
		if ($query != null && $query->num_rows() > 0) 
			return $query;		
		else return false;
	}
}