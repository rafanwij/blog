<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class createpost_model extends CI_Model
{
	function __construct() 
	{
		parent::__construct();
	}

	function createPost($title,$content,$imagePath){
		//account status A = active , I = inactive
		$queryString = "INSERT INTO post VALUES ('',?,?,now(),?,'A')";
		$query = $this->db->query($queryString,array($title,$content,$imagePath));
		return $query;		
	}
}