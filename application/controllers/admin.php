<?php
class Admin extends MY_Controller
{
	
	public function dashboard()
	{
		$this->load->helper('form');

		//echo "welcome admin login form";
		$this->load->model('articlesmodel', 'articles');
		


		$this->load->library('pagination');
		$config = [

			'base_url'	 		=> base_url('admin/dashboard'),
			'per_page'   		=> 5,
			'total_rows' 		=> $this->articles->num_rows(),
			'full_tag_open'		=> "<ul class='pagination'>",
			'full_tag_close'	=> '</ul>',
			'first_tag_open'	=> '<li>',
			'first_tag_close'	=> '</li>',
			'last_tag_open'		=> '<li>',
			'last_tag_close'	=> '</li>',
			'next_tag_open'		=> '<li>',
			'next_tag_close'	=> '</li>',
			'prev_tag_open'		=> '<li>',
			'prev_tag_close'	=> '</li>',
			'num_tag_open'		=> '<li>',
			'num_tag_close'		=> '</li>',
			'cur_tag_open'		=> '<li class="active"><a>',
			'cur_tag_close'		=> '</a></li>'

		];
		$this->pagination->initialize($config);

		$articles = $this->articles->articles_list( $config['per_page'], $this->uri->segment(3) );
		
		$this->load->view('admin/dashboard', ['articles'=>$articles] );

	}
	public function add_article()
	{
		$this->load->helper('form');
		$this->load->view('admin/add_article');

	}

	public function store_article()
	{
		$config = 	[
						'upload_path' 	=> './uploads',
						'allowed_types'	=> 'jpg|png|jpeg|gif'
					];
		$this->load->library('upload', $config);
		$this->load->library('form_validation');
		$this->load->helper('form', 'url');
		$this->form_validation->set_rules('articletitle', 'Article Title', 'required');
		$this->form_validation->set_rules('articlebody', 'Article Body', 'required');
		$this->form_validation->set_rules('userfile', 'Image Upload');
		if($this->form_validation->run() && $this->upload->do_upload())
		{
			$post = $this->input->post();
			unset($post['submit']);
			
			$data = $this->upload->data();
						//print_r($data);
			$image_path = base_url("uploads/" . $data['raw_name'] . $data['file_ext']);
			//echo $image_path;exit;
			$post['image_path'] = $image_path;

			$this->load->model('articlesmodel', 'articles');
			if($this->articles->add_articles($post))
			{
				$this->session->set_flashdata('feedback', 'Article added sucessfully');
				$this->session->set_flashdata('feedback', 'alert_sucess');
			}else
			{
				$this->session->set_flashdata('feedback', 'Please try agian');
				$this->session->set_flashdata('feedback', 'alert_danger');
			}
			return redirect('admin/dashboard');

		}else
		{
			$upload_error = $this->upload->display_errors();
			$this->load->view('admin/add_article', compact($upload_error));
		}


		/*$this->load->library('form_validation');
		if($this->form_validation->run('store_article1')){

			
			echo "file valid....";
		}else
		{
			echo validation_errors();
		}*/
	}

	public function edit_article($article_id)
	{
		$this->load->helper('form');
		$this->load->model('articlesmodel', 'articles');
		$article = $this->articles->find_article($article_id);
		$this->load->view('admin/edit_article', ['article'=>$article]);


		
	}

	public function update_article($article_id)
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('articletitle', 'Article Title', 'required');
		$this->form_validation->set_rules('articlebody', 'Article Body', 'required');
		if($this->form_validation->run())
		{
			$post = $this->input->post();
			unset($post['submit']);
			$this->load->model('articlesmodel', 'articles');
			if($this->articles->update_article($article_id ,$post))
			{
				$this->session->set_flashdata('feedback', "Article Update sucessfully");
				$this->session->set_flashdata('feedback_class', 'alert_sucess');
			}else
			{
				$this->session->set_flashdata('feedback', "Please try agian");
				$this->session->set_flashdata('feedback_class', 'alert_danger');
			}
			return redirect('admin/dashboard');

		}else
		{
			$this->load->view('admin/edit_article');
		}
	}

	public function delete_article()
	{

		$article_id = $this->input->post('article_id');
		$this->load->model('articlesmodel', 'articles');
		
		if($this->articles->delete_articles($article_id))
			{
				$this->session->set_flashdata('feedback', "Article Deleted sucessfully");
				$this->session->set_flashdata('feedback_class', 'alert_sucess');
			}else
			{
				$this->session->set_flashdata('feedback', "Article Failed to Delete");
				$this->session->set_flashdata('feedback_class', 'alert_danger');
			}
			return redirect('admin/dashboard');
	}

	public function _construct()
	{
		parent::_construct();
		if(! $this->session->userdata('user_id'))
		{
			return redirect('login');
		}
	}
}
?>