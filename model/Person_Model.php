<?php 

class Person_Model{
	public $id;
	public $name;
	public $phone;
	public $zalo;
	public $job;
	public $birthday;
	public $CMND;
	public $SHK;
	public $XNDS;
	public $GKS;
	public $GKH;
	public $khac1;
	public $khac2;
	public $khac3;
	public $khac4;
	public $khac5;
	public $address;
	public $argee;
	public $blood;
	public $description;
	public $date_register;
	public $status;

	public function getNewPerson($limit){
		$conn = FT_Database::instance()->getConnection();
		$sql = "SELECT * FROM person WHERE status = 0 ORDER BY id DESC";
		$result = mysqli_query($conn, $sql);

		if (!$result) die ('Error: ');

		$list_person = array();
		while ($row = mysqli_fetch_assoc($result)) {
			$person = new Person_Model();
			$person->id = $row['id'];
			$person->name = $row['name'];
			$person->phone = $row['phone'];
			$person->zalo = $row['zalo'];
			$person->job = $row['job'];
			$person->birthday = $row['birthday'];
			$person->CMND = $row['CMND'];
			$person->SHK = $row['SHK'];
			$person->XNDS = $row['XNDS'];
			$person->GKS = $row['GKS'];
			$person->GKH = $row['GKH'];
			$person->khac1 = $row['khac1'];
			$person->khac2 = $row['khac2'];
			$person->khac3 = $row['khac3'];
			$person->khac4 = $row['khac4'];
			$person->khac5 = $row['khac5'];
			$person->address = $row['address'];
			$person->argee = $row['Argee'];
			$person->blood = $row['blood'];
			$person->description = $row['description'];
			$person->date_register = $row['date_register'];
			$person->status = $row['status'];

			array_push($list_person, $person);
		}
		return $list_person;
	}

	public function getPersonFromDate($date_register){
		$conn = FT_Database::instance()->getConnection();
		$sql = "SELECT * FROM person WHERE date_register = \"$date_register\" ORDER BY id DESC";
		$result = mysqli_query($conn, $sql);

		if (!$result) die ('Error: ');

		$list_person = array();
		while ($row = mysqli_fetch_assoc($result)) {
			$person = new Person_Model();
			$person->id = $row['id'];
			$person->name = $row['name'];
			$person->phone = $row['phone'];
			$person->zalo = $row['zalo'];
			$person->job = $row['job'];
			$person->birthday = $row['birthday'];
			$person->CMND = $row['CMND'];
			$person->SHK = $row['SHK'];
			$person->XNDS = $row['XNDS'];
			$person->GKS = $row['GKS'];
			$person->GKH = $row['GKH'];
			$person->khac1 = $row['khac1'];
			$person->khac2 = $row['khac2'];
			$person->khac3 = $row['khac3'];
			$person->khac4 = $row['khac4'];
			$person->khac5 = $row['khac5'];
			$person->address = $row['address'];
			$person->argee = $row['Argee'];
			$person->blood = $row['blood'];
			$person->description = $row['description'];
			$person->date_register = $row['date_register'];
			$person->status = $row['status'];

			array_push($list_person, $person);
		}
		return $list_person;
	}

	public function updatePerson($id, $name, $phone, $zalo, $job, $birthday, $CMND, $SHK, $XNDS, $GKS,$GKH, $khac1, $khac2, $khac3, $khac4, $khac5, $address, $argee, $blood, $description, $date_register, $status){
		$conn = FT_Database::instance()->getConnection();
		$sql = "UPDATE person SET name = \"$name\", phone = \"$phone\", zalo = \"$zalo\", job = \"$job\", birthday = \"$birthday\", CMND = \"$CMND\" ,SHK = \"$SHK\", XNDS = \"$XNDS\", GKS = \"$GKS\", GKH = \"$GKH\", khac1 = \"$khac1\", khac2 = \"$khac2\", khac3 = \"$khac3\", khac4 = \"$khac4\", khac5 = \"$khac5\", address = \"$address\", Argee = \"$argee\", blood = \"$blood\", description = \"$description\", date_register = \"$date_register\", status = \"$status\" WHERE id = $id";

		$result = mysqli_query($conn, $sql);
		if ($result) {
			return true;
		}
		return false;
	}

	public function savePerson($name, $phone, $zalo, $job, $birthday, $CMND, $address, $argee, $blood, $date_register){
		$conn = FT_Database::instance()->getConnection();
		$sql = "INSERT INTO person(name, phone, zalo, job, birthday, CMND, address, Argee, blood, date_register, status) VALUES (\"$name\", \"$phone\", \"$zalo\", \"$job\", \"$birthday\", \"$CMND\", \"$address\", $argee, $blood, \"$date_register\", 0)";
		$result = mysqli_query($conn, $sql);

		if ($result) {
			return true;
		}
		return false;
	}

	public function activePerson($id, $status){
		$conn = FT_Database::instance()->getConnection();
		$sql = "UPDATE person SET status = $status WHERE id = $id";
		$result = mysqli_query($conn, $sql);
		if ($result) {
			return true;
		}
		return false;
	}

	public function deletePerson($id){
		$conn = FT_Database::instance()->getConnection();
		$sql = "DELETE FROM person WHERE id = $id";

		$result = mysqli_query($conn, $sql);

		if ($result) {
			return true;
		}
		return false;
	}

	public function getPersonStatus($status){
		$conn = FT_Database::instance()->getConnection();
		$sql = "SELECT * FROM person WHERE status = $status";

		$result = mysqli_query($conn, $sql);
		if (!$result) die ('Error: ');

		$list_person = array();
		while ($row = mysqli_fetch_assoc($result)) {
			$person = new Person_Model();
			$person->id = $row['id'];
			$person->name = $row['name'];
			$person->phone = $row['phone'];
			$person->zalo = $row['zalo'];
			$person->job = $row['job'];
			$person->birthday = $row['birthday'];
			$person->CMND = $row['CMND'];
			$person->SHK = $row['SHK'];
			$person->XNDS = $row['XNDS'];
			$person->GKS = $row['GKS'];
			$person->GKH = $row['GKH'];
			$person->khac1 = $row['khac1'];
			$person->khac2 = $row['khac2'];
			$person->khac3 = $row['khac3'];
			$person->khac4 = $row['khac4'];
			$person->khac5 = $row['khac5'];
			$person->address = $row['address'];
			$person->argee = $row['Argee'];
			$person->blood = $row['blood'];
			$person->description = $row['description'];
			$person->date_register = $row['date_register'];
			$person->status = $row['status'];

			array_push($list_person, $person);
		}
		return $list_person;
	}

	public function searchPerson($find){
		$conn = FT_Database::instance()->getConnection();
		$sql = "SELECT * FROM person WHERE name LIKE \"%$find%\" OR id LIKE \"%$find%\"";
		$result = mysqli_query($conn, $sql);
		if (!$result) die ('Error: ');

		$list_person = array();
		while ($row = mysqli_fetch_assoc($result)) {
			$person = new Person_Model();
			$person->id = $row['id'];
			$person->name = $row['name'];
			$person->phone = $row['phone'];
			$person->zalo = $row['zalo'];
			$person->job = $row['job'];
			$person->birthday = $row['birthday'];
			$person->CMND = $row['CMND'];
			$person->SHK = $row['SHK'];
			$person->XNDS = $row['XNDS'];
			$person->GKS = $row['GKS'];
			$person->GKH = $row['GKH'];
			$person->khac1 = $row['khac1'];
			$person->khac2 = $row['khac2'];
			$person->khac3 = $row['khac3'];
			$person->khac4 = $row['khac4'];
			$person->khac5 = $row['khac5'];
			$person->address = $row['address'];
			$person->argee = $row['Argee'];
			$person->blood = $row['blood'];
			$person->description = $row['description'];
			$person->date_register = $row['date_register'];
			$person->status = $row['status'];

			array_push($list_person, $person);
		}
		return $list_person;
	}

	public function oderByPerson($status, $blood){
		$conn = FT_Database::instance()->getConnection();
		$sql = "SELECT * FROM person WHERE status = $status AND blood = $blood";
		$result = mysqli_query($conn, $sql);
		if (!$result) die ('Error: ');

		$list_person = array();
		while ($row = mysqli_fetch_assoc($result)) {
			$person = new Person_Model();
			$person->id = $row['id'];
			$person->name = $row['name'];
			$person->phone = $row['phone'];
			$person->zalo = $row['zalo'];
			$person->job = $row['job'];
			$person->birthday = $row['birthday'];
			$person->CMND = $row['CMND'];
			$person->SHK = $row['SHK'];
			$person->XNDS = $row['XNDS'];
			$person->GKS = $row['GKS'];
			$person->GKH = $row['GKH'];
			$person->khac1 = $row['khac1'];
			$person->khac2 = $row['khac2'];
			$person->khac3 = $row['khac3'];
			$person->khac4 = $row['khac4'];
			$person->khac5 = $row['khac5'];
			$person->address = $row['address'];
			$person->argee = $row['Argee'];
			$person->blood = $row['blood'];
			$person->description = $row['description'];
			$person->date_register = $row['date_register'];
			$person->status = $row['status'];

			array_push($list_person, $person);
		}
		return $list_person;
	}

	public function getPersonFromId($id){
		$conn = FT_Database::instance()->getConnection();
		$sql = "SELECT * FROM person WHERE id = $id";
		$result = mysqli_query($conn, $sql);
		if (!$result) die ('Error: ');

		$person = new Person_Model();
		if ($result->num_rows > 0){
			$person->id = $row['id'];
			$person->name = $row['name'];
			$person->phone = $row['phone'];
			$person->zalo = $row['zalo'];
			$person->job = $row['job'];
			$person->birthday = $row['birthday'];
			$person->CMND = $row['CMND'];
			$person->SHK = $row['SHK'];
			$person->XNDS = $row['XNDS'];
			$person->GKS = $row['GKS'];
			$person->GKH = $row['GKH'];
			$person->khac1 = $row['khac1'];
			$person->khac2 = $row['khac2'];
			$person->khac3 = $row['khac3'];
			$person->khac4 = $row['khac4'];
			$person->khac5 = $row['khac5'];
			$person->address = $row['address'];
			$person->argee = $row['Argee'];
			$person->blood = $row['blood'];
			$person->description = $row['description'];
			$person->date_register = $row['date_register'];
			$person->status = $row['status'];

			return $person;
		}
	}
}
?>