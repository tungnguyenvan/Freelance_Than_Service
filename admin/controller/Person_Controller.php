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

			switch ($address) {
				case  1 : $address = "An Giang"; break;
				case  2 : $address = "Bà Rịa - Vũng Tàu"; break;
				case  3 : $address = "Bắc Giang"; break;
				case  4 : $address = "Bắc Kạn"; break;
				case  5 : $address = "Bạc Liêu"; break;
				case  6 : $address = "Bắc Ninh"; break;
				case  7 : $address = "Bến Tre"; break;
				case  8 : $address = "Bình Định"; break;
				case  9 : $address = "Bình Dương"; break;
				case  10 : $address = "Bình Phước"; break;
				case  11 : $address = "Bình Thuận"; break;
				case  12 : $address = "Cà Mau"; break;
				case  13 : $address = "Cao Bằng"; break;
				case  14 : $address = "Đắk Lắk"; break;
				case  15 : $address = "Đắk Nông"; break;
				case  16 : $address = "Điện Biên"; break;
				case  17 : $address = "Đồng Nai"; break;
				case  18 : $address = "Đồng Tháp"; break;
				case  19 : $address = "Gia Lai"; break;
				case  20 : $address = "Hà Giang"; break;
				case  21 : $address = "Hà Nam"; break;
				case  22 : $address = "Hà Tĩnh"; break;
				case  23 : $address = "Hải Dương"; break;
				case  24 : $address = "Hậu Giang"; break;
				case  25 : $address = "Hòa Bình"; break;
				case  26 : $address = "Hưng Yên"; break;
				case  27 : $address = "Khánh Hòa"; break;
				case  28 : $address = "Kiên Giang"; break;
				case  29 : $address = "Kon Tum"; break;
				case  30 : $address = "Lai Châu"; break;
				case  31 : $address = "Lâm Đồng"; break;
				case  32 : $address = "Lạng Sơn"; break;
				case  33 : $address = "Lào Cai"; break;
				case  34 : $address = "Long An"; break;
				case  35 : $address = "Nam Định"; break;
				case  36 : $address = "Nghệ An"; break;
				case  37 : $address = "Ninh Bình"; break;
				case  38 : $address = "Ninh Thuận"; break;
				case  39 : $address = "Phú Thọ"; break;
				case  40 : $address = "Quảng Bình"; break;
				case  41 : $address = "Quảng Nam"; break;
				case  42 : $address = "Quảng Ngãi"; break;
				case  43 : $address = "Quảng Ninh"; break;
				case  44 : $address = "Quảng Trị"; break;
				case  45 : $address = "Sóc Trăng"; break;
				case  46 : $address = "Sơn La"; break;
				case  47 : $address = "Tây Ninh"; break;
				case  48 : $address = "Thái Bình"; break;
				case  49 : $address = "Thái Nguyên"; break;
				case  50 : $address = "Thanh Hóa"; break;
				case  51 : $address = "Thừa Thiên Huế"; break;
				case  52 : $address = "Tiền Giang"; break;
				case  53 : $address = "Trà Vinh"; break;
				case  54 : $address = "Tuyên Quang"; break;
				case  55 : $address = "Vĩnh Long"; break;
				case  56 : $address = "Vĩnh Phúc"; break;
				case  57 : $address = "Yên Bái"; break;
				case  58 : $address = "Phú Yên"; break;
				case  59 : $address = "Cần Thơ"; break;
				case  60 : $address = "Đà Nẵng"; break;
				case  61 : $address = "Hải Phòng"; break;
				case  62 : $address = "Hà Nội"; break;
				case  63 : $address = "TP HCM"; break;
			}


			$this->model->load('Person');
			$result = $this->model->Person->savePerson($name, $phone, $zalo, $job, $birthday, $CMND, $address, $agress, $blood, date("Y/m/d"));
			if ($result){

				$url = 'https://fcm.googleapis.com/fcm/send';
				$headers = array(
					'Content-Type : application/json',
					'Authorization : key=AAAAgLlu6eA:APA91bGBVtLtYfUw2SrkjBqqgjybBu9FQgD9UB8X5A9M1Sid4JtItB7IZeUWp5t9dWZG3qazdpSVMvQv31n3pp2RznGUoCkIkaxuwwDSuMR3toau-UWZ1zc7KAlUoJ3h6pGBpVP4ecRd'
				);

				$fields = array(
					'notification' => array(
						'body' => "$name, vừa mới đăng ký",
						'title' => 'New Person Register'
					),
					'to' => 'c-vTlPunna8:APA91bGlrlAXlS60Ng08J9o4xoaIqWkgozP3xFI-ygJLBRwYqbfcHSGF352MsiVCgFLKMQU2aZCqVMlt4dYhMyBaCXvG3reDyFKKuJRRI3M5GRE8buQYtL80kYrzps3CweOr1OWYH8QX'
				);

				 $ch = curl_init ();
				 curl_setopt ( $ch, CURLOPT_URL, $url );
				 curl_setopt ( $ch, CURLOPT_POST, true );
				 curl_setopt ( $ch, CURLOPT_HTTPHEADER, $headers );
				 curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, true );
				 curl_setopt ( $ch, CURLOPT_POSTFIELDS, json_encode($fields) );
				 $result = curl_exec ( $ch );
				 curl_close ( $ch );

				echo "<script type='text/javascript'>
					var r = confirm('Thành công');
					if (r == true) {
					    window.location.assign('http://localhost/mvc-develop/')
					} 
				</script>";
				// echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>";
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