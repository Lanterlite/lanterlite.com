<?php 

class ensiklopedi_islam extends CI_Controller {

	public function rumah_tangga() { 
		$this->load->helper('url'); 

		$data['title'] = "Ensiklopedi Islam";
		$this->load->view('other/header', $data);
		$this->load->view('ei/rumah_tangga'); 
		$this->load->view('other/footer'); 		 
	} 
} 
?>