<?php
echo "<pre>";
class Users extends MY_controller
{
	public function index()
	{
		//echo "This is users function";
		$this->load->model('usermodel');
		$data['users'] = $this->usermodel->getusers();
		//print_r($users);
		$this->load->view('user_list', $data);
		$this->load->helper('array');
		test();

		$arr =['abc'=>'ABC', 'xyz'=>'XYZ'];
		echo '<br><br>' . element('xyz', $arr, 'Recored Not Found').'<br><br>';
		$this->load->library('test');
		$this->test->abcd();

		echo "<br><br>";
		//$this->load->library('email');
		//$this->email->newemail();

	}
}
?>