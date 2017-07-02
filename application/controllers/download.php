<?php 

class download extends CI_Controller {

	public function download_mp3() { 
		$this->load->helper('url'); 

		$data['title'] = "Download Mp3 Kajian";
		$this->load->view('other/header', $data);
		$this->load->view('download/download_mp3'); 
		$this->load->view('other/footer'); 		 
	} 
} 
?>