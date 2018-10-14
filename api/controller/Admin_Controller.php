<?php 
if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');
class Admin_Controller extends Base_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		
	}

	public function Signin(){
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		$this->model->load('Admin');
		$result = $this->model->Admin->Signin($user_name, $password);

		if ($result != null) {
			echo json_encode($result);
		}else{
			echo "{\"message\": false}";
		}
	}

	public function Signup(){
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		$name = $_POST['name'];

		$this->model->load('Admin');
		$reslut = $this->model->Admin->Signup($user_name, $password, $name);

		if ($result) {
			echo "{\"message\": true}";
		}else{
			echo "{\"message\": false}";
		}
	}

	public function FindUserName(){
		$user_name = $_POST['user_name'];

		$this->model->load('Admin');
		$result = $this->model->Admin->FindUserName($user_name);

		if ($result) {
			echo "{\"message\": true}";
		}else{
			echo "{\"message\": false}";
		}
	}

	public function updateToken(){
		$this->model->load('Admin');
		$result = $this->model->Admin->updateToken($_POST['id'], $_POST['token']);

		if ($result) {
			echo "{\"message\": true}";
		}else{
			echo "{\"message\": false}";
		}
	}

	public function sendNotification(){
		$this->model->load('Admin');
		$this->model->Admin->sendNotification("123412434");
	}

}

?>