<?php
class Categorymodel extends CI_Model{
	public function getAllCategory(){
		$this->db->select("*");
		$this->db->from("category");
		$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->result_array();
		}else{
			return false;
		}
	}
	
	public function requiredCategory($id = null){
		$this->db->select("*");
		$this->db->from("category");
		$this->db->where("id",$id);
		$query = $this->db->get();
		if($query->num_rows() > 0){
			$result = $query->result_array();
			return $result[0];
		}else{
			return false;
		}
	}
	
	public function save($data = null){
		if($this->db->insert("category",$data)){
			return true;
		}else{
			return false;
		}
	}
	
	public function update($data = null, $id = null){
		$this->db->where("id",$id);
		if($this->db->update("category",$data)){
			return true;
		}else{
			return false;
		}
	}
	
	public function delete($id = null){
		$this->db->where("id",$id);
		if($this->db->delete("category")){
			return true;
		}else{
			return false;
		}
	}
}
?>