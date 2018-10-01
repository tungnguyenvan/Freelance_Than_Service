<?php 
class Admin_Model{
	public $id;
	public $user_name;
	public $password;
	public $name;

	public function Register(){

	}

	public function Signin($user_name, $password){
		$conn = FT_Database::instance()->getConnection();
		$sql = "SELECT * FROM admin WHERE user_name = \"$user_name\" AND password = \"$password\"";
		$result = mysqli_query($conn, $sql);

		if (!$result) die ('Error: ');

		$admin = new Admin_Model();

		if ($result->num_rows > 0){
			$row = mysqli_fetch_assoc($result);
			$admin->id = $row['id'];
			$admin->user_name = $row['user_name'];
			$admin->password = $row['password'];
			$admin->name = $row['name'];
			return $admin;
		}
	}

	public function Signup($user_name, $password, $name){
		$conn = FT_Database::instance()->getConnection();
		$sql = "INSERT INTO admin(user_name, password, name) VALUES ($user_name, $password, $name)";
		$result = mysqli_query($conn, $sql);

		if ($result) {
			return true;
		}
		return false;
	}

	public function FindUserName($user_name){
		$conn = FT_Database::instance()->getConnection();
		$sql = "SELECT * FROM admin WHERE user_name = \"$user_name\"";
		$result = mysqli_query($conn, $sql);

		if (!$result) die ('Error: ');

		if ($result->num_rows > 0) {
			return true;
		}
		return false;
	}
}

?>