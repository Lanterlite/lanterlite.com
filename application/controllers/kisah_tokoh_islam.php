<?php 
class kisah_tokoh_islam extends CI_Controller {

	public function kisah_sahabat_nabi() { 
		$this->load->helper('url'); 
		$data['title'] = "Kisah Sahabat Nabi";
		$this->load->view('other/header', $data);
		$this->load->view('kti/ksn/all');
		$this->load->view('other/footer'); 
	}
	
	public function kisah_nabi_dan_rasul() { 
		$this->load->helper('url'); 
		$data['title'] = "Kisah Nabi dan Rasul";
		$this->load->view('other/header', $data);
		$this->load->view('kti/knr/all');
		$this->load->view('other/footer'); 
	}
	
}