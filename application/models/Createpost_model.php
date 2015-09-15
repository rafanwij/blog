<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class createpost_model extends CI_Model
{
	function __construct() 
	{
		parent::__construct();
	}

	function createPost($title,$content,$imagePath){
		//account status A = active , I = inactive
		$query = $this->db->query("INSERT INTO post VALUES ('','".$title."','".$content."',now(),'".$imagePath."','A')");
		return $query;		
	}
}