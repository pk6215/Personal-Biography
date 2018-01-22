<?php
class Login extends MY_Controller
{
	public function index()
	{
		if( $this->session->userdata('user_id') )
			return redirect('admin/dashboard');


		$this->load->helper('form');
		$this->load->view('public/admin_login');
		//$this->load->helper('html');
		//echo base_url();
	}
	public function admin_login()
	{
		//echo "Reached Admin Login Form";
		$this->load->library('form_validation');
		

		//$this->form_validation->set_rules('username','User Name','required|alpha|trim');
		//$this->form_validation->set_rules('password', 'Password', 'required');

		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

		if($this->form_validation->run('admin_login1') ){//if validation passes
			//Sucess
			$username=$this->input->post('username');
			$password=$this->input->post('password');
			//echo 'Hello <span style="color:blue;font-weight:bold;">"' . $username . '"</span> Thanks for visit us';
			$this->load->model('loginmodel');
			$login_id =$this->loginmodel->login_valid($username, $password);
			if($login_id)
			{
				$this->load->library('session');
				$this->session->set_userdata('user_id', $login_id);
				//$this->load->view('admin/dashboard');
				return redirect('admin/dashboard');

				//echo "Password Matched";
			}else
			{
				echo "Password Do Not Matched";
			}
			

		}else{
			//Failed
			$this->load->view('public/admin_login');
			
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('user_id');
		return redirect('login');

	}

	 
}
?>