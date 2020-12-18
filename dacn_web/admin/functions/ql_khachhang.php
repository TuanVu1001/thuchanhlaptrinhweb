 <a href="index.php?them=add_khachhang"><button class="btn">THÊM KHÁCH HÀNG</button></a>
		 <br/><br/>
<div class="row">
	<div class="col-12">

		<?php
			$sql = "select * from khachhang";
			$query = mysqli_query($con, $sql);
			if(isset($_GET['id_delete']))
			{
				$sql = "delete from khachhang where makh =".$_GET['id_delete'];
				$query = mysqli_query($con, $sql);
				
				?>
				<script>
					window.location="index.php?quanly=ql_khachhang";
				</script>
				<?php
			}
		 ?>
		 <table border="1" style="text-align: center;width: 90%; margin-left:5%">
		 	<tr>
		 		<td>ID</td>
		 		<td>Ten kh</td>
		 		<td>Gioi tinh</td>
		 		<td>Ngay sinh</td>
		 		<td>Email</td>
		 		<td>Mat khau</td>
		 		<td>Dia chi</td>
		 		<td>sdt</td>
		 		<td></td>
		 	</tr>
		 	<?php
		 		while($data = mysqli_fetch_array($query))
		 		{
		 			echo '<tr>
		 				<td>'.$data["makh"].'</td>
		 				<td>'.$data["tenkh"].'</td>
		 				<td>'.$data["gioitinh"].'</td>
		 				<td>'.$data["ngaysinh"].'</td>
		 				<td>'.$data["email"].'</td>
		 				<td>'.$data["matkhau"].'</td>
		 				<td>'.$data["diachi"].'</td>
		 				<td>'.$data["sodienthoai"].'</td>
		 				<td><a href="index.php?sua=edit_khachhang&id='.$data["makh"].'">Edit</a> | <a href="index.php?quanly=ql_khachhang&id_delete='.$data["makh"].'">Delete</a> </td>
		 			</tr>';
		 		} 
		 	 ?>
		 	
		 </table>
		 <br/><br/>
		
	</div>
</div>