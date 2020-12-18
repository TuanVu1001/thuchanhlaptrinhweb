<?php
	$sql = "select * from sanpham where maloai='Móc khóa'";
	$query = mysqli_query($con,$sql); 
	while ($data = mysqli_fetch_array($query)) 
	{
		echo '<div class="col-lg-3 col-sm-12" style="margin-top:1rem;text-align:center;">
			<img src="img/'.$data["hinh"].'" width="200" height="200"/>
			<p>'.$data["tensp"].'</p>
			<p>'.$data["gia"].'</p>
			<button style="border:1px solid red;background:#5DBC78;color:white">Đặt mua</button>
			 <a href="detail_product.php?page=detail_pro&id='.$data["masp"].'" style="color:black;font-weight:bold;"><span>Xem chi tiết </span></a>
		</div>';
	}
?>