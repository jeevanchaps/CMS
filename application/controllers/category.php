<?php
class Category extends CI_Controller{
	public function index(){
		$this->load->model('categorymodel');
		$data['category'] = $this->categorymodel->getAllCategory();
		$this->load->view('admin/category',$data);
	}
	
	public function add(){
		$this->load->view('admin/addcategory');
	}
	
	public function saveCategory(){
		$this->load->model('categorymodel');
		$category_name = $this->input->post('category_name');
		$data = array(
		'category' => $category_name
		);
		$result = $this->categorymodel->save($data);
		if($result){
			$this->session->set_userdata('succ_msg','Data Added Succcessfully');
			redirect('category');
		}else{
			redirect('category');
		}
	}
	
	public function editcategory($id){
		$this->load->model('categorymodel');
		$data['category'] = $this->categorymodel->requiredCategory($id);
		$this->load->view('admin/editcategory',$data);
	}
	
	public function updateCategory(){
		$this->load->model('categorymodel');
		$name = $this->input->post('category_name');
		$id = $this->input->post('id');
		$data = array(
		 'category' => $name
		);
		$result = $this->categorymodel->update($data,$id);
		if($result){
			$this->session->set_userdata('succ_msg','Data Updated Succcessfully');
			redirect('category');
		}else{
			redirect('category');
		}
	}
	
	public function deletecategory($id){
		$this->load->model('categorymodel');
		$result = $this->categorymodel->delete($id);
		if($result){
			$this->session->set_userdata('succ_msg','Data Deleted Succcessfully');
			redirect('category');
		}else{
			redirect('category');
		}
	}
}
?>