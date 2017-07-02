<?php 

class buku_tamu_ctrl extends CI_Controller {

	public function buku_tamu() { 
		$this->load->helper('url'); 

		$data['title'] = "Teknologi";
		$this->load->view('other/header', $data);
		$this->load->view('buku_tamu'); 
		$this->load->view('other/footer'); 		 
	}
} 
?>