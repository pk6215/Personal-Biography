<?php
class Testvalidation extends MY_controller
{
	public function newuser()
	{
		$this->load->helper('url', 'html');
		$this->load->view('admin/test_validation');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

		if($this->form_validation->run('testvalidation')==false)
		{
			echo "string";
		}else
		{
			echo "noooo";
		}
	}
}

?>