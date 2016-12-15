<?php
class Adminmodel extends CI_Model
{
    public function loginCheck($username, $password)
    {
        $this->db->select("*");
        $this->db->from("user");
        $this->db->where("user", $username);
        $this->db->where("password", $password);
        $query = $this->db->get();
        if($query->num_rows()>0){
            return $query->result_array();
        }else{
            return false;
        }

    }
   
}


