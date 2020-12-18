 <a href="index.php?them=add_mau"><button class="btn">THÊM MÀU</button></a><br/><br/>
<div class="row">
	<div class="col-12">
		<?php
			$sql1 = "select * from mau";
			$query1 = mysqli_query($con, $sql1);
			if(isset($_GET['id_delete']))
			{
				$sql = "delete from mau where mamau ='$_GET[id_delete]'";
				$query = mysqli_query($con, $sql);
				?>
				<script>
					window.location="index.php?quanly=ql_mau";
				</script>
				<?php
			}
		 ?>
		 <table border="1" style="text-align: center;width: 90%; margin-left:5%">
		 	<tr>
		 		<td>ma mau</td>
		 		<td>ten mau</td>
		 		<td></td>
		 	</tr>
		 	<?php
		 		while($data = mysqli_fetch_array($query1))
		 		{
		 			echo '<tr>
		 				<td>'.$data["mamau"].'</td>
		 				<td>'.$data["tenmau"].'</td>
		 				<td><a href="index.php?sua=edit_mau&id='.$data["mamau"].'">Edit</a> | <a href="index.php?quanly=ql_mau&id_delete='.$data["mamau"].'">Delete</a> </td>
		 			
		 			</tr>';
		 		} 
		 	 ?>
		 	
		 </table>
		 <br/><br/>
		
	</div>
</div>