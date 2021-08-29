<?php

class User_model extends CI_Model{

	public function get_users($username){

		$this->db->where('id',$username);
	$query = $this->db->get('users');

	return $query->result();




//		$query = $this->db->query("select * from users");

//		return $query->num_rows();				// return number of rows in db
//
//		return $query->num_fields();			// return number of columns count in db


	}

public function creat_users($data){

	$this->db->insert('users',$data);


}
	public function update_users($data,$id){
		$this->db->where(['id'=>$id]);
		$this->db->update('users',$data);


	}


	public function delete_users($id){

		$this->db->where(['id'=>$id]);
		$this->db->delete('users');

	}



}




