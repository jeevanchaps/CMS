<?php

class User extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('usermodel');
    }
    public function index(){
        $data['user'] = $this->usermodel->getAllUser();
        $this->load->view('admin/user',$data);
    }
    public function add(){
		$this->load->view('admin/adduser');
	}
	
	public function saveUser(){
		$first_name = $this->input->post('first_name');
		$last_name = $this->input->post('last_name');
		$email = $this->input->post('email');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$data = array(
		'user' => $username,
		'password' => $password,
		'first_name' => $first_name,
		'last_name' => $last_name,
		'email' => $email
		);
		$result = $this->usermodel->save($data);
		if($result){
			$this->session->set_userdata('succ_msg','Data Added Succcessfully');
			redirect('user');
		}else{
			redirect('user');
		}
	}
	
	public function edituser($id){
		$data['user'] = $this->usermodel->getRequiredUser($id);
		$this->load->view('admin/edituser',$data);
	}
	
	public function updateuser(){
		$first_name = $this->input->post('first_name');
		$last_name = $this->input->post('last_name');
		$email = $this->input->post('email');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$id = $this->input->post('userid');
		$data = array(
		'user' => $username,
		'password' => $password,
		'first_name' => $first_name,
		'last_name' => $last_name,
		'email' => $email
		);
		
		$result = $this->usermodel->update($data,$id);
		if($result){
			$this->session->set_userdata('succ_msg','Data Updated Succcessfully');
			redirect('user');
		}else{
			redirect('user');
		}
	}
	
	public function deleteuser($id){
		$result = $this->usermodel->delete($id);
		if($result){
			$this->session->set_userdata('succ_msg','Data Deleted Succcessfully');
			redirect('user');
		}else{
			redirect('user');
		}
	}
}
















?>