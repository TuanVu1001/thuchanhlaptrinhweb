<?php
if (isset($_SESSION["nhanvien"]['maad']) == false) {
	// Nếu người dùng chưa đăng nhập thì chuyển hướng website sang trang đăng nhập
	header('Location: loginad.php');
}else {
	if (isset($_SESSION["nhanvien"]['permission']) == true) {
		// Ngược lại nếu đã đăng nhập
		$permission = $_SESSION["nhanvien"]['permission'];
		// Kiểm tra quyền của người đó có phải là admin hay không
		if ($permission == '0') {
			// Nếu không phải admin thì xuất thông báo
			echo "Bạn không đủ quyền truy cập vào trang này<br>";
			echo "<a href='loginad.php'> Click để về lại trang chủ</a>";
			exit();
		}
	}
}
?>