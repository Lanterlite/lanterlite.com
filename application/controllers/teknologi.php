<?php 

class teknologi extends CI_Controller {

	public function diver() { 
		$this->load->helper('url'); 

		$data['title'] = "Teknologi";
		$this->load->view('other/header', $data);
		$this->load->view('tek/diver'); 
		$this->load->view('other/footer'); 		 
	} 
} 
?>