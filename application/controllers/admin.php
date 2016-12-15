<?php
class Admin extends CI_Controller{
    public function index(){
        $this->load->view('admin/login');
    }
    public function login(){
        $this->load->model('adminmodel');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $result = $this->adminmodel->loginCheck($username,$password);
        if($result){
            $this->session->set_userdata('login',true);
            redirect('dashboard');
        }else{
            $this->session->set_userdata("error_msg","Invalid username and password");
            redirect('admin');
        }

    }
    public function logout(){
        session_destroy();
        redirect('admin');
    }
}
?>
















?>