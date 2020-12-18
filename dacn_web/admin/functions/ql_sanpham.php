  <a href="index.php?them=add_sanpham"><button class="btn">THÊM SẢN PHẨM</button></a><br/><br/>
 <form action="index.php?quanly=ql_sanpham" method="POST">
       <select name="maloai" >
       	<option value="tatca">---Tất cả ---</option>
       		<?php 
       		$sql = "select * from loai";
       		$query = mysqli_query($con,$sql);
       		while ($data = mysqli_fetch_array($query))
       		{  ?>
       			<option value="<?php echo $data['maloai'] ?>"><?php echo $data["tenloai"]; ?></option>
       		<?php } ?>
       </select>
       <br/>
       <button name="btnTim">Tìm theo loại</button>

 </form>
<br/>
<?php
	$sql = "select * from sanpham ";
	$query = mysqli_query($con,$sql);
 	if(isset($_POST["btnTim"]))
 	{

 		$maloai = $_POST["maloai"];
 		if($maloai=="tatca")
 		{
 			$sql = "select * from sanpham ";
	 	$query = mysqli_query($con,$sql);
 		}
 	else
 	{
	 	$sql = "select * from sanpham where maloai = '$maloai'";
	 	$query = mysqli_query($con,$sql);
	 }
 	}
  ?>
  <?php
			if(isset($_GET['id_delete']))
			{
				$sql = "delete from sanpham where masp ='$_GET[id_delete]'";
				$query = mysqli_query($con, $sql);
				?>
				<script>
					window.location="index.php?quanly=ql_sanpham";
				</script>
				<?php
			}
		 ?>
<br/><br/>

<div class="row">
	<div class="col-12">
		
		 <table border="1" style="text-align: center;width: 90%; margin-left:5%">
		 	<tr>
		 		<td>ma Sp</td>
		 		<td>ten sp</td>
		 		<td>Hinh</td>
		 		<td>Gia</td>
		 		<td>ma mau</td>
		 		<td>ma loai</td>
		 		
		 		
		 		<td></td>
		 	</tr>
		 	<?php
		 		while($data = mysqli_fetch_array($query) )
		 		{
		 			echo '<tr>
		 				<td>'.$data["masp"].'</td>
		 				<td>'.$data["tensp"].'</td>
		 				<td><img src="../img/'.$data["hinh"].'" width="150" height="120" alt="Chưa thêm ảnh"/></td>
		 				<td>'.$data["gia"].'&nbsp;VND</td>
		 				<td>'.$data["mamau"].'</td>
		 				<td>'.$data["maloai"].'</td>
		 				<td><a href="index.php?sua=edit_sanpham&id='.$data["masp"].'">Edit</a> | <a href="index.php?quanly=ql_sanpham&id_delete='.$data["masp"].'">Delete</a> </td>
		 			
		 			</tr>';
		 		} 
		 	 ?>
		 	
		 </table>
		  <br/><br/>
		
	</div>
</div>
