<table style="width:100%;">
					<tr>
					   <td class="title">Tài khoản khách hàng:</td>
             <td class="content"><?php echo $_SESSION["khachhang"]["tenkh"] ?></td>
					</tr>

          <tr>
             <td class="title">Email:</td>
              <td class="content"><?php echo $_SESSION["khachhang"]["email"] ?></td>
          </tr>

          <tr>
             <td class="title">Giới tính:</td>
              <td class="content"><?php echo $_SESSION["khachhang"]["gioitinh"] ?></td>
          </tr>

          <tr>
             <td class="title">Ngày sinh:</td>
              <td class="content"><?php echo $_SESSION["khachhang"]["ngaysinh"] ?></td>
          </tr>

          <tr>
             <td class="title">Số điện thoại:</td>
              <td class="content"><?php echo $_SESSION["khachhang"]["sodienthoai"] ?></td>
          </tr>

          <tr>
             <td class="title">Địa chỉ:</td>
              <td class="content"><?php echo $_SESSION["khachhang"]["diachi"] ?></td>
          </tr>

           <tr>
              <td class="td_link" colspan="2"><a href="info.php?page=edit_info&id=<?php echo $_SESSION["khachhang"]["makh"] ?>">Chỉnh sửa lại thông tin</a></td>
          </tr>
</table>