<?php require_once("includes/connection.php");
if(!isset($_GET["id"]))//Gỡ lỗi
{
      $_GET["id"] = "undefine";
}
      $sql = "select * from admin where maad = '$_GET[id]'";//Chọn tất cả thuộc tính của admin có mã id khi bấm ở ql_nhanvien
      $query = mysqli_query($con, $sql);
      $data = mysqli_fetch_array($query);
      if(isset($_POST["btnSua"]))//Thực thi lệnh khi bấm nút có name="btnSua"
      {
            $maad = $_POST["maad"];
      	$tenNV = $_POST["tenNV"];
      	$pass = $_POST["pass"];
      	$per = $_POST["per"];
      	
      	
      		$sql = "UPDATE admin set accad='$tenNV',passad='$pass', permission='$per' where maad = '$maad'";//Lệnh cập nhật/ sửa trong sql
      		$query = mysqli_query($con, $sql);//Kết nối db với lệnh $sql
      		?>
                        <script>
                              window.location="index.php?quanly=ql_nhanvien";
                        </script>
                        <?php
                        //Quay về trang ql_nhanvien xem kq
      	
      }
 ?>
<br/>
	<form method="POSt" action="index.php?sua=edit_nhanvien">
            Ma nhan vien:
             <input type="text" readonly name="maad" value="<?php echo $data["maad"] ?>" />
            <br/> <br/>
		Tên nhan vien:
		 <input type="text" name="tenNV" value="<?php echo $data["accad"] ?>" />
		<br/> <br/>
            mat khau:
             <input type="text" name="pass" value="<?php echo $data["passad"] ?>"/>
            <br/> <br/>
	Quyen:
	<input type="number" name="per" value="<?php echo $data["permission"] ?>"/><br/><br/>
		<br/><br/>
		
		 <button  type="submit" name="btnSua">Sửa</button>
	    
	</form>
