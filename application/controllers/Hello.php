<?php
class Hello extends CI_Controller{
	public function index(){
		$this->load->view('includes/header');
		$this->load->view('includes/sidebar');
		$this->load->view('includes/footer');
		$this->load->view('hello');
	}
}






?>