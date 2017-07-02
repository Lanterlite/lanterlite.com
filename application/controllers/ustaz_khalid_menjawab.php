<?php 
class ustaz_khalid_menjawab extends CI_Controller {

	public function rumah_tangga() {
		$this->load->helper('url'); 
		$data['title'] = "Ustaz Khalid Menjawab";
		$this->load->view('other/header', $data);
		$this->load->view('ukm/rumah_tangga'); 
		$this->load->view('other/footer'); 		 
	} 
} 
?>