<?php
  if(!isset($_GET["id"]))
  {
    $_GET["id"] = "undefine";
  }
  $sql = "select * from khachhang where makh='$_GET[id]'";
  $query = mysqli_query($con, $sql);
  $data = mysqli_fetch_array($query);
  $male_status = "";
  $female_status = "";
  if($data["gioitinh"]=="Nam")
  {
    $male_status = "checked";
  }
  else{ $female_status = "checked";}
   if(isset($_POST["btnSua"]))
      {
            $maKH = $_POST["maKH"];
            $tenKH = $_POST["tenKH"];
            $date = $_POST["date"];
            $sdt     = $_POST["sdt"];
            $email     = $_POST["email"];
            $diachi  = $_POST["diachi"];
            $gt = $_POST["gt"];
         
        
        $sql1 = "UPDATE khachhang set tenkh='$tenKH',gioitinh='$gt',ngaysinh='$date',email='$email',diachi='$diachi',sodienthoai='$sdt' where makh='$maKH'";
          $query = mysqli_query($con, $sql1);
           //Xóa dữ liệu cũ
            unset($_SESSION["khachhang"]['sodienthoai']);
            unset($_SESSION["khachhang"]['gioitinh']);
            unset($_SESSION["khachhang"]['ngaysinh']);
            unset($_SESSION["khachhang"]['diachi']);
            unset($_SESSION["khachhang"]['email']);
      
      
      //Truy cập dữ liệu mới
         $_SESSION["khachhang"]['sodienthoai']=$sdt;
         $_SESSION["khachhang"]['ngaysinh'] = $date;
         $_SESSION["khachhang"]['gioitinh'] = $gt;
         $_SESSION["khachhang"]['email'] = $email;
         $_SESSION["khachhang"]['diachi']=$diachi

          
          ?>
          <script>
            window.location='info.php?page=show_info';
          </script>
          <?php
          exit;
       
           
  }
  
?>
<h4>Chỉnh sửa thông tin</h4>
<form class="form_edit" method="POST" action="info.php?page=edit_info">
  <table style="width:100%;">
            
                <input type="text" name="maKH" hidden value="<?php echo $data["makh"] ?>" />
              
            </tr> 
  					<tr>
  					   <td class="title">Tài khoản khách hàng:</td>
               <td class="content">
                <input type="text" readonly name="tenKH" value="<?php echo $data["tenkh"] ?>" />
              </td>
  					</tr>

            <tr>
               <td class="title">Email:</td>
                <td class="content">
                  <input type="email" name="email" value="<?php echo $data["email"] ?>" />
                </td>
            </tr>

            <tr>
               <td class="title">Giới tính:</td>
                <td class="content">
                <input type="radio" name="gt" value="Nam" <?php echo $male_status ?>/>Nam
                &emsp;
                <input type="radio" name="gt" value="Nu" <?php echo $female_status ?>/>Nữ
                </td>
            </tr>

            <tr>
               <td class="title">Ngày sinh:</td>
                <td class="content">
                  <input type="date" name="date" value="<?php echo $data["ngaysinh"] ?>" />
                </td>
            </tr>

            <tr>
               <td class="title">Số điện thoại:</td>
              <td class="content">
                <input type="number" name="sdt" value="<?php echo $data["sodienthoai"] ?>" />
              </td>
            </tr>

            <tr>
               <td class="title">Địa chỉ:</td>
              <td class="content">
              <input type="text" name="diachi" value="<?php echo $data["diachi"] ?>" />
              </td>
            </tr>

             <tr>
                <td class="td_link" colspan="2"><button type="submit" name="btnSua">Hoàn thành</button></td>
            </tr>
  </table>
</form>