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

	public function updateToken($id, $token){
		$conn = FT_Database::instance()->getConnection();
		$sql = "UPDATE admin SET token = \"$token\" WHERE id = $id";

		$result = mysqli_query($conn, $sql);
		if ($result) return true;
		else return false;
	}

	public function sendNotification($name){
		$conn = FT_Database::instance()->getConnection();
		$sql = "SELECT * FROM admin";
		$result = mysqli_query($conn, $sql);

		if ($result) {
			echo "success";
		}

		while ($row = mysqli_fetch_assoc($result)) {
			$url = 'https://fcm.googleapis.com/fcm/send';
				$headers = array(
					'Content-Type : application/json',
					'Authorization : key=AAAAgLlu6eA:APA91bGBVtLtYfUw2SrkjBqqgjybBu9FQgD9UB8X5A9M1Sid4JtItB7IZeUWp5t9dWZG3qazdpSVMvQv31n3pp2RznGUoCkIkaxuwwDSuMR3toau-UWZ1zc7KAlUoJ3h6pGBpVP4ecRd'
				);

			$fields = array(
					'notification' => array(
						'body' => "$name, vừa mới đăng ký",
						'title' => 'New-People'
					),
					'to' => $row['token']
				);

			$ch = curl_init ();
			 curl_setopt ( $ch, CURLOPT_URL, $url );
			 curl_setopt ( $ch, CURLOPT_POST, true );
			 curl_setopt ( $ch, CURLOPT_HTTPHEADER, $headers );
			 curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, true );
			 curl_setopt ( $ch, CURLOPT_POSTFIELDS, json_encode($fields) );
			 // $result = curl_exec ( $ch );
			 echo curl_exec ( $ch );
			 curl_close ( $ch );
		}
	}
}

?>