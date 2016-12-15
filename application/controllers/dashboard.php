<?php
class Dashboard extends CI_Controller{
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('login') != true){
			redirect('admin');
		}

	}
	public function index(){
		$this->load->view('admin/dashboard');
	}
}