

<?php
class Users extends CI_Controller
{

// this is from udemy



	public function show()
	{


		$this->load->database();
		$this->load->model('User_model');


		$data['results'] = $this->User_model->get_users(5);

		$this->load->view('User_view', $data);

	}


	public function insert()

	{

		$name = "ali";
		$username = "ali";
		$password = "secret";

		$this->load->database();
		$this->load->model('User_model');

		$this->User_model->creat_users([

			'name' => $name,
			'username' => $username,
			'password' => $password



]);

}


	public function update()

	{
		$id = 3;
		$name = "will";
		$username = "wi";
		$password = "newpass";

		$this->load->database();
		$this->load->model('User_model');

		$this->User_model->update_users([

			'name' => $name,
			'username' => $username,
			'password' => $password



		],$id);

	}



	public function delete(){

		$id=4;
		$this->load->database();
		$this->load->model('User_model');
		$this->User_model->delete_users($id);

}


}
