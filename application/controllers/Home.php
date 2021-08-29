<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function Naz()
	{

		$this->load->database();
		$query = $this->db->get("users");
		// select * from name table
		echo 'name';
	}


}
