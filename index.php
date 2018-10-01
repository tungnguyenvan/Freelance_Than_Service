
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="public/css/Stylesheets/stylesheet.css">
    <meta charset="UTF-8">
	<meta name="description" content="FreeLancer">
	<title>FreeLancer</title>
  </head>
  <body>
    <div class="container">
    	<div class="container-fluid">
    		<div class="d-flex justify-content-center align-items-center">

    			<form action="admin.php" class="col-md-12" method="POST">
    				<input type="hidden" name="c" value="person">
    				<input type="hidden" name="a" value="savePerson">
    				<h1>Đăng ký</h1>
    				<!-- Row 1 -->
    				<div class="row">
    					<!-- input Ten khach hang -->
					  <div class="form-group col-md-6">
					    <label for="exampleInputPassword1">Họ và tên:</label>
					    <input type="text" class="form-control" name="name" id="name" placeholder="Nguyễn Văn A" required>
					  </div>
					  <!-- END Ten khach hang -->

					  <!-- input So dien thoai -->
					  <div class="form-group col-md-6">
					    <label>Liên hệ: Phone mumber / Zalo</label>
					    <div class="row">
					    	<div class="form-group col-md-5">
					    		<input type="text" class="form-control" name="phone" id="phone" placeholder="Phone number" data-country="US" required>
					    	</div>
					    	<div class="form-group col-md-5">
					    		<input type="tel" class="form-control" name="zalo" id="zalo" placeholder="Zalo" required>
					    	</div>
					    </div>
					  </div>
					  <!-- END input So dien thoai -->
					</div>
					<!-- END Row 1 -->

					<div class="row">
    					<!-- input Nghe nghiep -->
					  <div class="form-group col-md-6">
					    <label for="exampleInputPassword1">Nghề nghiệp:</label>
					    <input type="text" class="form-control" name="job" id="job" placeholder="Công nhân" required>
					  </div>
					  <!-- END Nghe nghiep -->

					  <!-- input ngay thang nam sinh -->
					  <div class="form-group col-md-6">
					  	<label>Ngày tháng năm sinh:</label>
					  	<input type="date" name="birthday" class="form-control" id="birthday" required>
					  </div>
					  <!-- END ngay thang nam sinh -->
					</div>

					<div class="row">
						<!-- input So CMND -->
					  <div class="form-group col-md-6">
					    <label for="exampleInputPassword1">Số CMND:</label>
					    <input type="text" class="form-control" name="CMND" name="CMND" placeholder="02341212" required>
					  </div>
					  <!-- END  input So CMND-->

					  <!-- input Dia chi -->
					  <div class="form-group col-md-6">
					    <label for="exampleInputPassword1">Địa chỉ hiện tại:</label>
					    <select class="form-control" name="address" required>
						  	<option value="">Chọn địa chỉ nơi cư trú</option>
						  	<option value="1">	An Giang	</option>
							<option value="2">	Bà Rịa - Vũng Tàu	</option>
							<option value="3">	Bắc Giang	</option>
							<option value="4">	Bắc Kạn	</option>
							<option value="5">	Bạc Liêu	</option>
							<option value="6">	Bắc Ninh	</option>
							<option value="7">	Bến Tre	</option>
							<option value="8">	Bình Định	</option>
							<option value="9">	Bình Dương	</option>
							<option value="10">	Bình Phước	</option>
							<option value="11">	Bình Thuận	</option>
							<option value="12">	Cà Mau	</option>
							<option value="13">	Cao Bằng	</option>
							<option value="14">	Đắk Lắk	</option>
							<option value="15">	Đắk Nông	</option>
							<option value="16">	Điện Biên	</option>
							<option value="17">	Đồng Nai	</option>
							<option value="18">	Đồng Tháp	</option>
							<option value="19">	Gia Lai	</option>
							<option value="20">	Hà Giang	</option>
							<option value="21">	Hà Nam	</option>
							<option value="22">	Hà Tĩnh	</option>
							<option value="23">	Hải Dương	</option>
							<option value="24">	Hậu Giang	</option>
							<option value="25">	Hòa Bình	</option>
							<option value="26">	Hưng Yên	</option>
							<option value="27">	Khánh Hòa	</option>
							<option value="28">	Kiên Giang	</option>
							<option value="29">	Kon Tum	</option>
							<option value="30">	Lai Châu	</option>
							<option value="31">	Lâm Đồng	</option>
							<option value="32">	Lạng Sơn	</option>
							<option value="33">	Lào Cai	</option>
							<option value="34">	Long An	</option>
							<option value="35">	Nam Định	</option>
							<option value="36">	Nghệ An	</option>
							<option value="37">	Ninh Bình	</option>
							<option value="38">	Ninh Thuận	</option>
							<option value="39">	Phú Thọ	</option>
							<option value="40">	Quảng Bình	</option>
							<option value="41">	Quảng Nam	</option>
							<option value="42">	Quảng Ngãi	</option>
							<option value="43">	Quảng Ninh	</option>
							<option value="44">	Quảng Trị	</option>
							<option value="45">	Sóc Trăng	</option>
							<option value="46">	Sơn La	</option>
							<option value="47">	Tây Ninh	</option>
							<option value="48">	Thái Bình	</option>
							<option value="49">	Thái Nguyên	</option>
							<option value="50">	Thanh Hóa	</option>
							<option value="51">	Thừa Thiên Huế	</option>
							<option value="52">	Tiền Giang	</option>
							<option value="53">	Trà Vinh	</option>
							<option value="54">	Tuyên Quang	</option>
							<option value="55">	Vĩnh Long	</option>
							<option value="56">	Vĩnh Phúc	</option>
							<option value="57">	Yên Bái	</option>
							<option value="58">	Phú Yên	</option>
							<option value="59">	Cần Thơ	</option>
							<option value="60">	Đà Nẵng	</option>
							<option value="61">	Hải Phòng	</option>
							<option value="62">	Hà Nội	</option>
							<option value="63">	TP HCM	</option>
						</select>
					  </div>
					  <!-- END input Dia chi -->
					</div>

					<div class="row">

						<!-- input Gia dinh dong y -->
					  <div class="form-check col-md-6">
					    <label for="exampleInputPassword1">Gia đình bạn có ai đồng ý không:</label>

						<!-- <div class="custom-control custom-radio">
						  <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input" name="agress" value="1" checked="checked">
						  <label class="custom-control-label" for="customRadio1" id="Argee_1">Bố hoặc mẹ</label>
						</div>
						<div class="custom-control custom-radio">
						  <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input" name="agress" value="2">
						  <label class="custom-control-label" for="customRadio2" id="Argee_2" >Vợ</label>
						</div>
						<div class="custom-control custom-radio">
						  <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input" name="agress" value="0">
						  <label class="custom-control-label" for="customRadio3" id="Argee_3">Không có ai</label>
						</div> -->
						<select class="form-control" name="agress" required>
							<option value="">Đồng ý</option>
							<option value="1">Bố hoặc mẹ</option>
							<option value="2">Vợ</option>
							<option value="0">không có ai</option>
						</select>
					  </div>
					  <!-- END input Gia dinh dong y -->

						<!-- Nhóm máu -->
						<div class="form-group col-md-6" required>
						    <label for="exampleInputPassword1">Nhóm máu:</label>
						    <select class="form-control" name="blood" required>
						    	<option value="">Chọn nhóm máu</option>
						    	<option value="1">Máu O</option>
						    	<option value="2">Máu A</option>
						    	<option value="3">Máu B</option>
						    	<option value="4">Máu AB</option>
						    	<option value="0">Chưa biết</option>
						    </select>
					  	</div>
					  	<!-- END Nhóm máu -->
					</div>

					<!-- Button submit -->
				  <button type="submit" class="btn btn-primary btn-lg btn-block col-md-12">Đăng ký</button>
				  <!-- END  Button submit-->
				</form>
			</div>
    	</div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>