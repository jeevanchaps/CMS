<?php
class News extends CI_Controller{
    public function __construct(){

        parent::__construct();
        $this->load->model('newsmodel');
        $this->load->model('categorymodel');
        if($this->session->userdata('login') != true){
            redirect('admin');
        }
    }

    public function index(){
        $data['news'] = $this->newsmodel->getAllNews();
        $this->load->view('admin/news',$data);
    }

    public function addNews(){
        $data['category'] = $this->categorymodel->getAllCategory();
        $this->load->view('admin/addnews',$data);
    }

    public function saveNews(){
        $news_title = $this->input->post('title');
        $news_description = $this->input->post('description');
        $news_date = $this->input->post('date');
        $category_id = $this->input->post('category');
        $image = $_FILES['image']['name'];

        if(move_uploaded_file($_FILES['image']['tmp_name'], 'assets/img/'.$image))
        {
            $data = array(
                'category' => $category_id,
                'title' => $news_title,
                'date' => $news_date,
                'image' => $image,
                'description' => $news_description
            );
            $result = $this->newsmodel->savenews($data);
            if($result){
                $this->_create_thumbnail($image,20,20);
                $this->session->set_userdata('succ_msg','News Added Succcessfully');
                redirect('news');
            }else{
                redirect('user');
            }
        }else{
            echo "File not copy";
            die();
        }

    }



    function _create_thumbnail($fileName,$width,$height)
    {
        $this->load->library('image_lib');
        $config['image_library'] = 'gd2';
        $config['source_image'] = 'assets/img/'.$fileName;
        $config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = TRUE;
        $config['width'] = $width;
        $config['height'] = $height;
        $config['new_image'] = 'assets/thumbimg/'.$fileName;
        $this->image_lib->initialize($config);
        if(!$this->image_lib->resize())
        {
            echo $this->image_lib->display_errors();
        }
    }



    public function editnews($id){
        $this->load->model('categorymodel');
        $data['category']=$this->categorymodel->getAllCategory();
        $this->load->model('newsmodel');
        $data['user'] = $this->newsmodel->getRequiredNews($id);
        $this->load->view('admin/editnews',$data);
    }

    public function updateNews(){
        $news_title = $this->input->post('news_title');
        $news_description = $this->input->post('email');
        $id = $this->input->post('newsid');
        $data = array(
            'news_title' => $news_title,
            'news_description' => $news_description,

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