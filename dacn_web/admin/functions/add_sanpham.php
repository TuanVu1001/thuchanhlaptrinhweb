<?php include("includes/connection.php");
      if(isset($_POST["btnThem"]))
      {
            $masp = $_POST["masp"];
      	$tensp = $_POST["tensp"];
      	$gia = $_POST["gia"];
      	$loai = $_POST["maloai"];
            $mau = $_POST["mamau"];
            $img = $_FILES["hinh"]["name"];
            $path = '../img/'.basename($_FILES["hinh"]["name"]);

            if($masp==""|| $tensp==""||$gia==""||$img=="")
            {
                  echo "không được để trống";
            }
            else
            {
              if($gia < 0)
                {
                  echo "Giá của sản phẩm không dc nhỏ hơn 0";
                }
                else{
            	$sql = "INSERT INTO sanpham(masp,tensp,gia,hinh,mamau,maloai) values ('$masp','$tensp', '$gia', '$img','$mau','$loai')";
            	$query = mysqli_query($con, $sql);

                  if(move_uploaded_file($_FILES['hinh']["tmp_name"],$path ))
                   {
                         echo "Thêm thành công";
                   }
                   else{ echo "Thêm thất bại"; }
            }
          }
 
      }
 ?>
<br/>
	<form method="POST" action="index.php?them=add_sanpham" enctype="multipart/form-data">
            Ma san pham:
             <input type="text" name="masp"/>
            <br/> <br/>
		Tên san phamn:
		 <input type="text" name="tensp"/>
		<br/> <br/>
           Hinh:
             <input type="file" name="hinh"/>
            <br/> <br/>
	    Giá
	     <input type="inumber" name="gia" /><br/><br/>
             Màu:
		<select name="mamau">
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
		 <button  type="submit" name="btnThem">Them</button>
	    
	</form>
