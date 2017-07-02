<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->helper('url'); 

		$data['title'] = "Lanterlite";
		$this->load->view('other/header', $data);
		$this->load->view('welcome');
		$this->load->view('other/footer');
	}
}
