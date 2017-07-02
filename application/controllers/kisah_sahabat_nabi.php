<?php 
class kisah_sahabat_nabi extends CI_Controller {

	public function abu_bakr() { 
		$this->load->helper('url'); 
		$data['title'] = "Kisah Sahabat Nabi";
		$this->load->view('other/header', $data);
		$this->load->view('kti/ksn/abu_bakr');
		$this->load->view('other/footer'); 
	}
	
	public function umar_bin_khattab() { 
		$this->load->helper('url'); 
		$data['title'] = "Kisah Sahabat Nabi";
		$this->load->view('other/header', $data);
		$this->load->view('kti/ksn/umar_bin_khattab');
		$this->load->view('other/footer'); 
	}

	public function utsman_bin_affan() { 
		$this->load->helper('url'); 
		$data['title'] = "Kisah Sahabat Nabi";
		$this->load->view('other/header', $data);
		$this->load->view('kti/ksn/utsman_bin_affan');
		$this->load->view('other/footer'); 
	}

	public function ali_bin_abi_thalib() { 
		$this->load->helper('url'); 
		$data['title'] = "Kisah Sahabat Nabi";
		$this->load->view('other/header', $data);
		$this->load->view('kti/ksn/ali_bin_abi_thalib');
		$this->load->view('other/footer'); 
	}
	
}