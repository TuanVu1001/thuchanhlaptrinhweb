<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V18</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<?php include("includes/connection.php") ?>
	<?php  error_reporting(0); 
	if(isset($_POST['btn_register']))
		{
			$username = $_POST["username"];
			$password = $_POST["password"];
			$email     = $_POST["email"];
	      	$date = $_POST["date"];
	      	$sdt     = $_POST["sdt"];
	      	$diachi  = $_POST["diachi"];
	      	$gt = $_POST["gt"];
			
	      
	      
	      	if($username=="" || $password=="" || $date=="" || $email=="" || $diachi==""||$sdt==""||$gt=="")
	      	{
	      		echo "Vui lòng điền đầy đủ thông tin";
	      	}
	      	else
	      	{
	      		$sql = "INSERT INTO khachhang(makh,tenkh,gioitinh,ngaysinh,email,matkhau,diachi, sodienthoai) values (null, '$username','$gt', '$date', '$email','$password','$diachi','$sdt')";
	      		$query = mysqli_query($con, $sql);
	      		echo 'Thêm thành công';
      	
      		}
		}

	 ?>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST" action="register.php">
					<span class="login100-form-title p-b-43">
					 Tạo tài khoản
					</span>
					
				
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="username">
						<span class="focus-input100"></span>
						<span class="label-input100">tên tài khoản</span>
					</div>
						<br/>
					<div >Giới tính:
						<input  type="radio" name="gt" value="Nam">Nam&emsp;
						<input  type="radio" name="gt" value="Nữ">Nữ
						<span class="focus-input100"></span>
					</div>
					<br/>
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password">
						<span class="focus-input100"></span>
						<span class="label-input100">Mật khẩu</span>
					</div>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="email" name="email">
						<span class="focus-input100"></span>
						<span class="label-input100">email</span>
					</div>
					<div class="wrap-input100 validate-input" >
						<input type="date" name="date">
						<span class="focus-input100"></span>
						<span class="label-input100">Ngày sinh</span>
					</div>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="number" name="sdt">
						<span class="focus-input100"></span>
						<span class="label-input100">Số điện thoai</span>
					</div>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="diachi">
						<span class="focus-input100"></span>
						<span class="label-input100">Địa chỉ</span>
					</div>

					
			

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="btn_register">
							Tạo tài khoản
						</button>
					</div>
					<p>Quay lại trang <a href="./loginkh.php">Login</a></p>
					
					
				</form>

				<div class="login100-more" style="background-image: url('images/bg-01.jpg');">
				</div>
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>