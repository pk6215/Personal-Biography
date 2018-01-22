<?php
class Loginmodel extends CI_Model
{
	public function login_valid($username, $password)
	{
		//$q = $this->db->query('SELECT * FROM users where username = $username and password = $password');
		//count($a->rows());


		$q = $this->db->where(['uname'=>$username, 'pass'=>$password])
					->get('users');
		if( $q->num_rows() )
		{
			echo "<pre>";
			//print_r($q->row() );exit;
			//$row = $q->row();
			//return $row->id;

			return $q->row()->id;

			//return TRUE;
		}else
		{
			return FALSE;
		}

	}
}
?>