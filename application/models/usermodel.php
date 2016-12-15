<?php
class Usermodel extends CI_Model{
    public function getAllUser(){
        $this->db->select("*");
        $this->db->from("user");
        $query = $this->db->get();
        if($query->num_rows() > 0){
            return $query->result_array();
        }else{
            return false;
        }
    }
    public function getRequiredUser($id = null){
        $this->db->select("*");
        $this->db->from("user");
        $this->db->where("id",$id);
        $query = $this->db->get();
        if($query->num_rows() > 0){
            $result = $query->result_array();
            return $result[0];
        }else{
            return false;
        }
    }
    
    public function searchUser($username = null){
        $this->db->select("*");
        $this->db->from("user");
        $this->db->where("user",$username);
        $query = $this->db->get();
        if($query->num_rows() > 0){
            $result = $query->result_array();
            return $result;
        }else{
            return false;
        }
    }
    
    public function save($data = null){
        if($this->db->insert("user",$data)){
            return true;
        }else{
            return false;
        }
    }
    
    public function update($data = null, $id = null){
        $this->db->where("id",$id);
        if($this->db->update("user",$data)){
            return true;
        }else{
            return false;
        }
    }
    
    public function delete($id = null){
        $this->db->where("id",$id);
        if($this->db->delete("user")){
            return true;
        }else{
            return false;
        }
    }
}




?>