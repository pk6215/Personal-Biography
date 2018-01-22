<?php
class Blog extends CI_controller{

	public function index()
		{
			//$this->load->model('abc');
			//$this->abc->test();

			$this->load->model('authenticatea');
			$data = $this->authenticatea->getData();
			print_r($data);



			//echo "This is index funtion for blog controller";
			$this->load->view('blog_index');
		}

	public function add(){
		echo "this is add funtion in blog controller";
	}


}

?>