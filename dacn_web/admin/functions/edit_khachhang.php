<?php require_once("includes/connection.php");
if(!isset($_GET["id"]))
{
      $_GET["id"] = "undefine";
}
      $sql = "select * from khachhang where makh = '$_GET[id]'";
      $query = mysqli_query($con, $sql);
      $data = mysqli_fetch_array($query);
      $nam = "unchecked";
      $nu = "unchecked";
      if($data["gioitinh"]=="Nam")
      {
            $nam = "checked";
      }
      else{ $nu = "checked"; }
      if(isset($_POST["btnSua"]))
      {
            $maKH=$_POST["maKH"];
            $tenKH = $_POST["tenKH"];
            $date = $_POST["date"];
            $sdt     = $_POST["sdt"];
            $email     = $_POST["email"];
            $pass = $_POST["pass"];
            $diachi  = $_POST["diachi"];
            $gt = $_POST["gt"];
         
      	
      	$sql = "UPDATE khachhang set tenkh='$tenKH',gioitinh='$gt',ngaysinh='$date',email='$email',matkhau='$pass',diachi='$diachi',sodienthoai='$sdt' where makh='$maKH'";
      		$query = mysqli_query($con, $sql);
      		?>
                        <script>
                              window.location="index.php?quanly=ql_khachhang";
                        </script>
                   <?php
                 
      	
      }
 ?>
<br/>
	<form method="POST" action="index.php?sua=edit_khachhang">
             Ma khach hang:
      <input type="text" readonly name="maKH" value="<?php echo $data["makh"] ?>" /><br/><br/>
            Ten khach hang:
      <input type="text" name="tenKH" value="<?php echo $data["tenkh"] ?>"/><br/><br/>
      Gioi tinh:
      <input type="radio" name="gt" value="Nam" <?php echo $nam ?>/>Nam &emsp;
      <input type="radio" name="gt" value="Nu" <?php echo $nu ?>/>Nu
      <br/><br/>
      Ngay sinh:
      <input type="date" name="date" value="<?php echo $data["ngaysinh"] ?>"/><br/><br/>
      email khach hang:
      <input type="email" name="email" value="<?php echo $data["email"] ?>"/><br/><br/>
      Mat khau:
      <input type="text" name="pass" value="<?php echo $data["matkhau"] ?>"/><br/><br/>
      Dia chi:
      <input type="text" name="diachi" value="<?php echo $data["diachi"] ?>"/><br/><br/>
      So dien thoai:
      <input type="number" name="sdt" value="<?php echo $data["sodienthoai"] ?>"/><br/><br/>
		 <button  type="submit" name="btnSua">Sửa</button>
	    
	</form>
