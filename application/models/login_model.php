<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login_model extends CI_Model
{
	function __construct() 
	{
		parent::__construct();
	}

	function login($username,$password){
		//account status A = active , I = inactive
		$queryString = "SELECT * FROM msuser WHERE username = ? AND password = ? AND status = 'A'";
		$query = $this->db->query($queryString,array($username,$password));
		if ($query != null && $query->num_rows() > 0) 
			return $query;		
		else return false;
	}
}