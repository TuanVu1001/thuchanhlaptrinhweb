 <a href="index.php?them=add_nhanvien"><button class="btn">THÊM NHÂN VIÊN</button></a><br/><br/>
<div class="row">
	<div class="col-12">
		<?php
			$sql = "select * from admin";// Chọn tất cả thuộc tính trong admin/ nhân viên
			$query = mysqli_query($con, $sql);//Kết nối database với lệnh sql

			
			if(isset($_GET['id_delete']))//Kiểm tra id nhân viên cần xóa
			{
				if($_GET['id_delete']==$_SESSION["nhanvien"]["maad"])
				{
					echo "Không được xóa tài khoản đang online";
				}
				else
				{
				$sql = "delete from admin where maad =".$_GET['id_delete'];//Xóa nhân viên có mã nhân viên bằng vs id cần xóa
				$query = mysqli_query($con, $sql);//Kết nối database với lệnh sql
				?>
				<script>
					window.location="index.php?quanly=ql_nhanvien";
				</script>
				<?php
			}
		}
		 ?>
		 <table border="1" style="text-align: center;width: 90%; margin-left:5%">
		 	<tr>
		 		<td>maNhanVien</td>
		 		<td>tenNhanVien</td>
		 		<td>mat khau</td>
		 		<td>Quyen</td>
		 		
		 		<td></td>
		 	</tr>
		 	<?php
		 		while($data = mysqli_fetch_array($query))//Vòng lặp hiện dữ liệu có trong db
		 		{
		 			echo '<tr>
		 				<td>'.$data["maad"].'</td>
		 				<td>'.$data["accad"].'</td>
		 				<td>'.$data["passad"].'</td>
		 				<td>'.$data["permission"].'</td>
		 				
		 			
		 				<td><a href="index.php?sua=edit_nhanvien&id='.$data["maad"].'">Edit</a> | <a href="index.php?quanly=ql_nhanvien&id_delete='.$data["maad"].'">Delete</a> </td>
		 			
		 			</tr>';
		 		} 
		 	 ?>
		 	
		 </table>
		 <br/><br/>
		
	</div>
</div>