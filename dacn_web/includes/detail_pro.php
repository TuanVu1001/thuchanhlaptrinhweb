<?php
	if(!isset($_GET["id"]))
	{
		$_GET["id"] = "undefined";
	}
	$sql = "select * from sanpham where masp = '$_GET[id]'";
	$query = mysqli_query($con,$sql);
	$data = mysqli_fetch_array($query);
 ?>
 <br/>
<div class="row">
	<div class="col-lg-6>">
		<img src="img/<?php echo $data["hinh"]?>" width="500" height="500" />
	</div>
	<div class="col-lg-6" style="font-size: 18px;">
		<p style="border-bottom: 3px solid black">Tên sản phẩm:&nbsp;<?php echo $data["tensp"]; ?></p>
		<p style="border-bottom: 3px solid black">Giá:&nbsp;<?php echo $data["gia"]; ?></p>

	</div>
</div>