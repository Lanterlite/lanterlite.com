<?php

class Users extends CI_Controller{
	

	function __construct()
	{
		parent::__construct();
			$this->load->helper('url');
			$this->load->model('users_model');
	}

	public function index()
	{
		$data['user_list'] = $this->users_model->get_all_users();
		$this->load->view('other/show_users', $data);
	}
	
	public function add_form()
	{
		$this->load->view('other/insert');
	}
	
	public function insert_user_db()
	{
		$udata['name'] = $this->input->post('name');
		$udata['email'] = $this->input->post('email');
		$res = $this->users_model->insert_users_to_db($udata);
		if($res)
		{
			header('location:'.base_url()."users/".$this->index());
		}
	}
}
