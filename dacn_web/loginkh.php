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
	<?php  session_start();
	if(isset($_POST['btn_login']))
		{
			$username = $_POST['username'];
			$password = $_POST['password']; 
			
			if($username =="" && $password =="")
			{
				echo "Thiếu thống tin";
			}
			else
			{
				$sql = "select * from khachhang where tenkh ='$username' and matkhau ='$password' ";
				$query = mysqli_query($con, $sql);
				$num=mysqli_num_rows($query);
				
				if($num == 0)
				{
					echo "Tài khoản hoặc mật khẩu không chính xác";
				}
				else
				{
					while($data["khachhang"] = mysqli_fetch_array($query))
					{
						$_SESSION["khachhang"]['makh'] = $data["khachhang"]['makh'];
						$_SESSION["khachhang"]['tenkh'] = $data["khachhang"]['tenkh'];
						$_SESSION["khachhang"]['gioitinh']	= $data["khachhang"]['gioitinh'];	
						$_SESSION["khachhang"]['ngaysinh']	= $data["khachhang"]['ngaysinh'];	
						$_SESSION["khachhang"]['email']	= $data["khachhang"]['email'];	
						$_SESSION["khachhang"]['diachi']	= $data["khachhang"]['diachi'];
						$_SESSION["khachhang"]['sodienthoai']	= $data["khachhang"]['sodienthoai'];			
					} 
					header("location:index.php");
				}
			}
		}

	 ?>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST" action="loginkh">
					<span class="login100-form-title p-b-43">
						Login to continue
					</span>
					
					
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="username">
						<span class="focus-input100"></span>
						<span class="label-input100">account</span>
					</div>

					
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>
					

					
			

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="btn_login">
							Login
						</button>
					</div>
					
					<p>Chưa có tài khoản <a href="./register.php">Đăng ký</a></p>
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