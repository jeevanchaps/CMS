<?php
class newsmodel extends CI_Model{
    public function getAllNews(){
        $this->db->select("*");
        $this->db->from("news");
        $this->db->join("category","category.id=news.category");
        $query = $this->db->get();
        if($query->num_rows() > 0){
            return $query->result_array();
        }else{
            return false;
        }
    }

    public function getRequiredNews($id = null){
        $this->db->select("*");
        $this->db->from("news");
        $this->db->where("n_id",$id);
        $query = $this->db->get();
        if($query->num_rows() > 0){
            return $query->result_array()[0];
        }else{
            return false;
        }
    }

    public function saveNews($data = null){
        if($this->db->insert("news",$data)){
            return true;
        }else{
            return false;
        }
    }

    public function updateNews($data = null, $id = null){
        $this->db->where("n_id",$id);
        if($this->db->update("news",$data)){
            return true;
        }else{
            return false;
        }
    }

    public function deleteNews($id = null){
        $this->db->where("n_id",$id);
        if($this->db->delete("news")){
            return true;
        }else{
            return false;
        }
    }

}