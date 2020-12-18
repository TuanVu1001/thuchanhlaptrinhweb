<?php require_once("includes/connection.php");
if(!isset($_GET["id"]))
{
      $_GET["id"] = "undefine";
}
      $sql = "select * from sanpham where masp ='$_GET[id]'";
      $query = mysqli_query($con, $sql);
      $data = mysqli_fetch_array($query);
      if(isset($_POST["btnSua"]))
      {
            $masp = $_POST["masp"];
      	$tensp = $_POST["tensp"];
      	$gia = $_POST["gia"];
      	$loai = $_POST["maloai"];
            $mau = $_POST["mamau"];
            $img = $_FILES["hinh"]["name"];
            $path = '../img/'.basename($_FILES["hinh"]["name"]);
            if($gia < 0)
            {
                  echo "Giá không được nhỏ hơn 0";
            }
            else
            {
             if($img != null)
                  {
                        $tmp_img = $_FILES["hinh"]["tmp_name"];
                        $img = $_FILES['hinh']['name'];
                        move_uploaded_file($tmp_img, $path);
                        $sql = "UPDATE sanpham SET hinh ='$img' where masp='$masp' ";
                        $query = mysqli_query($con, $sql);
                        echo "Thêm thành công";
                  }
      		$sql = "UPDATE sanpham set masp='$masp',tensp='$tensp',gia='$gia',mamau= '$mau',maloai='$loai' where masp='$masp'";
      		$query = mysqli_query($con, $sql);
                 ?>
                        <script>
                              window.location="index.php?quanly=ql_sanpham";
                        </script>
                        <?php
      }}
 ?>

	<form method="POST" action="index.php?sua=edit_sanpham" enctype="multipart/form-data">
            Ma san pham:
             <input type="text" readonly name="masp" value="<?php echo $data["masp"] ?>"/>
            <br/> <br/>
		Tên san phamn:
		 <input type="text" name="tensp"  value="<?php echo $data["tensp"] ?>"/>
		<br/> <br/>
           Hinh:
             <input type="file" name="hinh"  value="<?php echo $data["hinh"] ?>"/>
            <br/> <br/>
	    Giá
	     <input type="inumber" name="gia" value="<?php echo $data["gia"] ?>"/><br/><br/>
             Màu:
		<select name="mamau">
                  <option value="<?php echo $data["mamau"] ?>"><?php echo $data["mamau"]; ?></option>
            <?php
                  $sql = "select * from mau";
                  $query = mysqli_query($con, $sql);
                  while($data = mysqli_fetch_array($query)) { ?>
                  <option value="<?php echo $data["tenmau"] ?>"><?php echo $data["tenmau"]; ?></option>
                  
            <?php } ?>   
            </select>
            <br/><br/>
            Loại:
            <select name="maloai">
            <?php
                  $sql = "select * from loai";
                  $query = mysqli_query($con, $sql);
                  while($data = mysqli_fetch_array($query))
                  { ?>
                  <option value="<?php echo $data["maloai"] ?>"><?php echo $data["tenloai"]; ?></option>
                 
            <?php } ?> 
            </select>  
            <br/><br/>
		 <button  type="submit" name="btnSua">Sửa</button>
	    
	</form>
