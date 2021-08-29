<?php

class Crud_model extends CI_Model{


function display_records()
{

$query =$this->db->get("users");

return $query->result();

}



}





