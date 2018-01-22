<?php
class UserModel extends MY_Model
{
	public function getusers()
	{
		$this->load->database();
		//$q = $this->db->query('SELECT * FROM user_accounts');
		$q = $this->db->get('user_accounts');
		//print_r($q);
		//$result =$q->result();
		//print_r($result);
		return $q->result_array();


		/*return[
			['firstname' => 'First User', 'lastname' => 'Last Name'],
			['secondname' => 'Second User', 'lastname' => 'Second Name'],
			['thirdname' => 'Third User', 'lastname' => 'Third Name']
			
		];*/
		$this->testmodel();
	}
}
?>