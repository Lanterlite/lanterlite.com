<?php 
class karya_lanterlite extends CI_Controller {

	public function aplikasi_android() {
		$this->load->helper('url'); 
		$data['title'] = "Aplikasi Android";
		$this->load->view('other/header', $data);
		$this->load->view('kl/aa/all'); 
		$this->load->view('other/footer'); 		 
	} 

	public function aplikasi_desktop() {
		$this->load->helper('url'); 
		$data['title'] = "Aplikasi Desktop";
		$this->load->view('other/header', $data);
		$this->load->view('kl/ad/all'); 
		$this->load->view('other/footer'); 		 
	} 

	public function aplikasi_web() {
		$this->load->helper('url'); 
		$data['title'] = "Aplikasi Web";
		$this->load->view('other/header', $data);
		$this->load->view('kl/aw/all'); 
		$this->load->view('other/footer'); 		 
	} 

} 
?>