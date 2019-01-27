<?php 
if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');
	class Person_Controller extends Base_Controller{
		public function __construct()
		{
			parent::__construct();
		}

		public function index()
		{
			
		}


		public function savePerson(){
			$name = $_POST['name'];
			$phone = $_POST['phone'];
			$zalo = $_POST['zalo'];
			$job = $_POST['job'];
			$birthday = $_POST['birthday'];
			$CMND = $_POST['CMND'];
			//address
			$address = $_POST['address'];
			$blood = $_POST['blood'];
			$agress = $_POST['agress'];
			$sex = $_POST['sex'];
			$height = $_POST['height'];
			$weight = $_POST['weight'];

			$this->model->load('Person');
			$result = $this->model->Person->savePerson($name, $sex, $height, $weight, $phone, $zalo, $job, $birthday, $CMND, $address, $agress, $blood, date("Y/m/d"));

			if ($result){
				echo "<script type='text/javascript'>
					var r = confirm('Bạn đã đăng kí thành công,chúng tôi sẽ liên hệ bạn sớm nhất có thể');
					if (r == true) {
					    window.location.assign('https://hienthan.com/lien-he/')
					} 
					else{
						window.history.back();
					}
				</script>";
				// echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>";
				$this->model->load('Admin');
				$this->model->Admin->sendNotification($name);
			}
			else{
				echo "<script type='text/javascript'>
					var r = confirm('Thất bại, Bạn cần nhập đủ thông tin');
					if (r == true) {
					   window.history.back();
					}
				</script>";
			}
		}

		public function getArgee(){
			if ($_POST['Argee_1']) return 1;
			if ($_POST['Argee_2']) return 2;
			if ($_POST['Argee_0']) return 0;
		}

		public function getAddress($id){
			$address = "";
			switch ($_POST['address']) {
				case  1 : $address = "An Giang";
				case  2 : $address = "Bà Rịa - Vũng Tàu";
				case  3 : $address = "Bắc Giang";
				case  4 : $address = "Bắc Kạn";
				case  5 : $address = "Bạc Liêu";
				case  6 : $address = "Bắc Ninh";
				case  7 : $address = "Bến Tre";
				case  8 : $address = "Bình Định";
				case  9 : $address = "Bình Dương";
				case  10 : $address = "Bình Phước";
				case  11 : $address = "Bình Thuận";
				case  12 : $address = "Cà Mau";
				case  13 : $address = "Cao Bằng";
				case  14 : $address = "Đắk Lắk";
				case  15 : $address = "Đắk Nông";
				case  16 : $address = "Điện Biên";
				case  17 : $address = "Đồng Nai";
				case  18 : $address = "Đồng Tháp";
				case  19 : $address = "Gia Lai";
				case  20 : $address = "Hà Giang";
				case  21 : $address = "Hà Nam";
				case  22 : $address = "Hà Tĩnh";
				case  23 : $address = "Hải Dương";
				case  24 : $address = "Hậu Giang";
				case  25 : $address = "Hòa Bình";
				case  26 : $address = "Hưng Yên";
				case  27 : $address = "Khánh Hòa";
				case  28 : $address = "Kiên Giang";
				case  29 : $address = "Kon Tum";
				case  30 : $address = "Lai Châu";
				case  31 : $address = "Lâm Đồng";
				case  32 : $address = "Lạng Sơn";
				case  33 : $address = "Lào Cai";
				case  34 : $address = "Long An";
				case  35 : $address = "Nam Định";
				case  36 : $address = "Nghệ An";
				case  37 : $address = "Ninh Bình";
				case  38 : $address = "Ninh Thuận";
				case  39 : $address = "Phú Thọ";
				case  40 : $address = "Quảng Bình";
				case  41 : $address = "Quảng Nam";
				case  42 : $address = "Quảng Ngãi";
				case  43 : $address = "Quảng Ninh";
				case  44 : $address = "Quảng Trị";
				case  45 : $address = "Sóc Trăng";
				case  46 : $address = "Sơn La";
				case  47 : $address = "Tây Ninh";
				case  48 : $address = "Thái Bình";
				case  49 : $address = "Thái Nguyên";
				case  50 : $address = "Thanh Hóa";
				case  51 : $address = "Thừa Thiên Huế";
				case  52 : $address = "Tiền Giang";
				case  53 : $address = "Trà Vinh";
				case  54 : $address = "Tuyên Quang";
				case  55 : $address = "Vĩnh Long";
				case  56 : $address = "Vĩnh Phúc";
				case  57 : $address = "Yên Bái";
				case  58 : $address = "Phú Yên";
				case  59 : $address = "Cần Thơ";
				case  60 : $address = "Đà Nẵng";
				case  61 : $address = "Hải Phòng";
				case  62 : $address = "Hà Nội";
				case  63 : $address = "TP HCM";
			}
			return $address;
		}
	}
?>