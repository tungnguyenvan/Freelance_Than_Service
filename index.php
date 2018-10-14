
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
    				<h1>ĐĂNG KÝ HIẾN THẬN</h1>
    				<!-- Row 1 -->
    				<div class="row">
    					<!-- input Ten khach hang -->
					  <div class="form-group col-md-6">
					    <h6 class="title" for="exampleInputPassword1">Họ và tên:</h6>
					    <input type="text" class="form-control" name="name" id="name" placeholder="Nguyễn Văn A" required>
					  </div>
					  <!-- END Ten khach hang -->

					  <!-- input So dien thoai -->
					  <div class="form-group col-md-6">
					    <h6>Liên hệ: Phone mumber / Zalo</h6>
					    <div class="row">
					    	<div class="form-group col-md-5">
					    		<input type="text" class="form-control" name="phone" id="phone" placeholder="Phone number" data-country="US" required>
					    	</div>
					    	<div class="form-group col-md-5">
					    		<input type="tel" class="form-control" name="zalo" id="zalo" placeholder="Zalo">
					    	</div>
					    </div>
					  </div>
					  <!-- END input So dien thoai -->
					</div>
					<!-- END Row 1 -->

					<div class="row">
						<div class="form-group col-md-6">
							<h6>Giới tính:</h6>
							<select class="form-control" name="sex" required>
								<option value="">Giới tính</option>
								<option value="Nam">Nam</option>
								<option value="Nữ">Nữ</option>
							</select>
						</div>

						<div class="form-group col-md-6">
							<div class="row">
								<div class="form-group col-md-5">
									<h6>Chiều cao: Cm</h6>
									<input type="tel" name="height" class="form-control" placeholder="170" required>
								</div>
								<div class="form-group col-md-5">
									<h6>Cân nặng: kg</h6>
									<input type="tel" name="weight" class="form-control" placeholder="70" required>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
    					<!-- input Nghe nghiep -->
					  <div class="form-group col-md-6">
					    <h6 for="exampleInputPassword1">Nghề nghiệp:</h6>
					    <input type="text" class="form-control" name="job" id="job" placeholder="Công nhân" required>
					  </div>
					  <!-- END Nghe nghiep -->

					  <!-- input ngay thang nam sinh -->
					  <div class="form-group col-md-6">
					  	<h6>Ngày tháng năm sinh:</h6>
					  	<input type="text" placeholder="20/02/1990" name="birthday" class="form-control" id="birthday" required>
					  </div>
					  <!-- END ngay thang nam sinh -->
					</div>

					<div class="row">
						<!-- input So CMND -->
					  <div class="form-group col-md-6">
					    <h6 for="exampleInputPassword1">Số CMND:</h6>
					    <input type="tel" class="form-control"  name="CMND" placeholder="02341212" required>
					  </div>
					  <!-- END  input So CMND-->

					  <!-- input Dia chi -->
					  <div class="form-group col-md-6">
					    <h6 for="exampleInputPassword1">Địa chỉ hiện tại:</h6>
					    <select class="form-control" name="address" required>
						  	<option value="">Chọn địa chỉ nơi cư trú</option>
						  	<option value="An Giang">	An Giang	</option>
							<option value="Bà Rịa - Vũng Tàu">	Bà Rịa - Vũng Tàu	</option>
							<option value="Bắc Giang">	Bắc Giang	</option>
							<option value="Bắc Kạn">	Bắc Kạn	</option>
							<option value="Bạc Liêu">	Bạc Liêu	</option>
							<option value="Bắc Ninh">	Bắc Ninh	</option>
							<option value="Bến Tre">	Bến Tre	</option>
							<option value="Bình Định">	Bình Định	</option>
							<option value="Bình Dương">	Bình Dương	</option>
							<option value="Bình Phước">	Bình Phước	</option>
							<option value="Bình Thuận">	Bình Thuận	</option>
							<option value="Cà Mau">	Cà Mau	</option>
							<option value="Cao Bằng">	Cao Bằng	</option>
							<option value="Đắk Lắk">	Đắk Lắk	</option>
							<option value="Đắk Nông">	Đắk Nông	</option>
							<option value="Điện Biên">	Điện Biên	</option>
							<option value="Đồng Nai">	Đồng Nai	</option>
							<option value="Đồng Tháp">	Đồng Tháp	</option>
							<option value="Gia Lai">	Gia Lai	</option>
							<option value="Hà Giang">	Hà Giang	</option>
							<option value="Hà Nam">	Hà Nam	</option>
							<option value="Hà Tĩnh">	Hà Tĩnh	</option>
							<option value="Hải Dương">	Hải Dương	</option>
							<option value="Hậu Giang">	Hậu Giang	</option>
							<option value="Hòa Bình">	Hòa Bình	</option>
							<option value="Hưng Yên">	Hưng Yên	</option>
							<option value="Khánh Hòa">	Khánh Hòa	</option>
							<option value="Kiên Giang">	Kiên Giang	</option>
							<option value="Kon Tum">	Kon Tum	</option>
							<option value="Lai Châu">	Lai Châu	</option>
							<option value="Lâm Đồng">	Lâm Đồng	</option>
							<option value="Lạng Sơn">	Lạng Sơn	</option>
							<option value="Lào Cai">	Lào Cai	</option>
							<option value="Long An">	Long An	</option>
							<option value="Nam Định">	Nam Định	</option>
							<option value="Nghệ An">	Nghệ An	</option>
							<option value="Ninh Bình">	Ninh Bình	</option>
							<option value="Ninh Thuận">	Ninh Thuận	</option>
							<option value="Phú Thọ">	Phú Thọ	</option>
							<option value="Quảng Bình">	Quảng Bình	</option>
							<option value="Quảng Nam">	Quảng Nam	</option>
							<option value="Quảng Ngãi">	Quảng Ngãi	</option>
							<option value="Quảng Ninh">	Quảng Ninh	</option>
							<option value="Quảng Trị">	Quảng Trị	</option>
							<option value="Sóc Trăng">	Sóc Trăng	</option>
							<option value="Sơn La">	Sơn La	</option>
							<option value="Tây Ninh">	Tây Ninh	</option>
							<option value="Thái Bình">	Thái Bình	</option>
							<option value="Thái Nguyên">	Thái Nguyên	</option>
							<option value="Thanh Hóa">	Thanh Hóa	</option>
							<option value="Thừa Thiên Huế">	Thừa Thiên Huế	</option>
							<option value="Tiền Giang">	Tiền Giang	</option>
							<option value="Trà Vinh">	Trà Vinh	</option>
							<option value="Tuyên Quang">	Tuyên Quang	</option>
							<option value="Vĩnh Long">	Vĩnh Long	</option>
							<option value="Vĩnh Phúc">	Vĩnh Phúc	</option>
							<option value="Yên Bái">	Yên Bái	</option>
							<option value="Phú Yên">	Phú Yên	</option>
							<option value="Cần Thơ">	Cần Thơ	</option>
							<option value="Đà Nẵng">	Đà Nẵng	</option>
							<option value="Hải Phòng">	Hải Phòng	</option>
							<option value="Hà Nội">	Hà Nội	</option>
							<option value="TP HCM">	TP HCM	</option>
						</select>
					  </div>
					  <!-- END input Dia chi -->
					</div>

					<div class="row">

						<!-- input Gia dinh dong y -->
					  <div class="form-check col-md-6">
					    <h6 for="exampleInputPassword1">Gia đình bạn có ai đồng ý không:</h6>

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
						    <h6 for="exampleInputPassword1">Nhóm máu:</h6>
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