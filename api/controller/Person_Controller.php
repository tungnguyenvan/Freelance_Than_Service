<?php 
if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');
class Person_Controller extends Base_Controller {
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		
	}

	public function getNewPerson(){
		// $limit = $_POST['limit'];

		$this->model->load('Person');
		$result = $this->model->Person->getNewPerson($limit);

		if ($result) {
			echo json_encode($result);
		}
	}

	public function getPersonFromDate(){
		$date_register = $_POST['date_register'];

		$this->model->load('Person');
		$result = $this->model->Person->getPersonFromDate($date_register);

		// if ($result) {
			echo json_encode($result);
		// }
	}

	public function updatePerson(){
		 $id = $_POST['id'];
		 $name = $_POST['name'];
		 $sex = $_POST['sex'];
		 $height = $_POST['height'];
		 $weight = $_POST['weight'];
		 $phone = $_POST['phone'];
		 $zalo = $_POST['zalo'];
		 $job = $_POST['job'];
		 $birthday = $_POST['birthday'];
		 $CMND = $_POST['CMND'];
		 $SHK = $_POST['SHK'];
		 $XNDS = $_POST['XNDS'];
		 $GKS = $_POST['GKS'];
		 $GKH = $_POST['GKH'];
		 $khac1 = $_POST['khac1'];
		 $khac2 = $_POST['khac2'];
		 $khac3 = $_POST['khac3'];
		 $khac4 = $_POST['khac3'];
		 $khac5 = $_POST['khac5'];
		 $address = $_POST['address'];
		 $argee = $_POST['argee'];
		 $blood = $_POST['blood'];
		 $description = $_POST['description'];
		 $date_register = $_POST['date_register'];
		 $status = $_POST['status'];

		 $this->model->load('Person');
		 $result = $this->model->Person->updatePerson($id, $name, $sex, $height, $weight, $phone, $zalo, $job, $birthday, $CMND, $SHK, $XNDS, $GKS,$GKH, $khac1, $khac2, $khac3, $khac4, $khac5, $address, $address, $blood, $description, $date_register, $status);

		 if ($result) {
		 	echo "{\"message\": true}";
		 }else{
		 	echo "{\"message\": false}";
		 }
	}

	public function activePerson(){
		$this->model->load('Person');
		$result = $this->model->Person->activePerson($_POST['id'], $_POST['status']);

		if ($result) {
		 	echo "{\"message\": true}";
		 }else{
		 	echo "{\"message\": false}";
		 }
	}

	public function savePerson(){
		 $name = $_POST['name'];
		 $phone = $_POST['phone'];
		 $zalo = $_POST['zalo'];
		 $job = $_POST['job'];
		 $birthday = $_POST['birthday'];
		 $CMND = $_POST['CMND'];
		 $address = $_POST['address'];
		 $argee = $_POST['argee'];
		 $blood = $_POST['blood'];
		 $description = $_POST['description'];
		 $date_register = $_POST['date_register'];

		 $this->model->load('Person');
		 $result = $this->model->Person->savePerson($name, $phone, $zalo, $job, $birthday, $CMND, $address, $argee, $blood, $description, $date_register);

		 if ($result) {
		 	echo "{\"message\": true}";
		 }else{
		 	echo "{\"message\": false}";
		 }
	}

	public function deletePerson(){
		$id = $_POST['id'];

		$this->model->load('Person');
		$result = $this->model->Person->deletePerson($id);

		if ($result) {
		 	echo "{\"message\": true}";
		 }else{
		 	echo "{\"message\": false}";
		 }
	}

	public function getPersonStatus(){
		$status = $_POST['status'];

		$this->model->load('Person');
		$result = $this->model->Person->getPersonStatus($status);

		if ($result) {
			echo json_encode($result);
		}else{
			echo "{\"message\": false}";
		}
	}

	public function searchPerson(){
		$this->model->load('Person');
		$result = $this->model->Person->searchPerson($_POST['find']);

		echo json_encode($result);
	}

	public function oderByPerson(){
		$this->model->load('Person');
		if (empty($_POST['date_register'])) 
			$result = $this->model->Person->oderByPerson($_POST['status'], $_POST['blood']);
		else $result = $this->model->Person->getPersonFromBloodAndDate($_POST['date_register'], $_POST['blood']);

		echo json_encode($result);
	}

	public function updateImage(){
		$SHk = $_POST['SHK'];
		$XNDS = $_POST['XNDS'];
		$GKS = $_POST['GKS'];
		$GKH = $_POST['GKH'];

		$this->model->load('Person');
		$result = $this->model->Person->updateImage($SHK, $XNDS, $GKS, $GKH);

		if ($result) {
		 	echo "{\"message\": true}";
		 }else{
		 	echo "{\"message\": false}";
		 }
	}

	public function getPersonFromSexAndBlood(){
		$this->model->load('Person');
		$result = "";
		if (empty($_POST['date_register']))
			$result = $this->model->Person->getPersonFromSexAndBlood($_POST['sex'], $_POST['blood'], $_POST['status']);
		else $result = $this->model->Person->getPersonFromSexBloodDateRegister($_POST['sex'], $_POST['blood'], $_POST['date_register']);

		echo json_encode($result);
	}

	public function getPersonFromSex(){
		$this->model->load('Person');
		$result = "";
		if (empty($_POST['date_register'])) 
			$result = $this->model->Person->getPersonFromSex($_POST['sex'], $_POST['status']);
		else $result = $this->model->Person->getPersonFromSexAndDate($_POST['sex'], $_POST['date_register']);
		echo json_encode($result);
	}

	public function updateImagePerson(){
		$this->model->load('Person');
		$result = $this->model->Person->updateImagePerson($_POST['key'], $_POST['data_image'], $_POST['id']);

		if ($result) {
		 	echo "{\"message\": true}";
		 }else{
		 	echo "{\"message\": false}";
		 }
	}
}

?>