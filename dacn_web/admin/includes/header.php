<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Trang quản lý cửa hàng</title>
	<link rel="stylesheet" href="./css/style.css">
</head>
<body>
	<!----------menu------>
	<section class="box__menu">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<ul class="list__menu">
						<li><h2><?php echo $_SESSION["nhanvien"]["accad"]; ?></h2></li>
						<li class="bd"></li>
						<li><a href="index.php?quanly=ql_khachhang">Quản lí khách hàng</a></li>
						<li class="bd"></li>
						<li><a href="index.php?quanly=ql_sanpham">Quản lí sản phẩm</a></li>
						<li class="bd"></li>
						<li><a href="index.php?quanly=ql_nhanvien">Quản lí nhân viên</a></li>
						<li class="bd"></li>
						<li><a href="index.php?quanly=ql_mau">Quản lí màu</a></li>
						<li class="bd"></li>
						<li><a href="index.php?quanly=ql_loai">Quản lí loại</a></li>
						<li class="bd"></li>
						<li><a href="logout.php">Đăng xuất</a></li>
					</ul>
				</div>
			</div>
			
		</div>
	</section>
<br/>