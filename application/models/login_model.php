<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login_model extends CI_Model
{
	function __construct() 
	{
		parent::__construct();
	}

	function login($username,$password){
		//account status A = active , I = inactive
		$query = $this->db->query("SELECT * FROM msuser WHERE username = '".$username."' 
			AND password = '".$password."' AND status = 'A'");
		if ($query != null && $query->num_rows() > 0) 
			return $query;		
		else return false;
	}
}