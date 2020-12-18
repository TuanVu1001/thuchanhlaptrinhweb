<?php require_once("includes/connection.php");
      if(isset($_POST["btnThem"]))
      {
      	$tenloai = $_POST["tenloai"];
      	$maloai = $_POST["maloai"];
      
      	
      	if( $maloai=="" || $tenloai=="" )
      	{
      		echo "Vui lòng điền đầy đủ thông tin";
      	}
      	else
      	{
      		$sql = "INSERT INTO loai(maloai, tenloai) values ('$maloai','$tenloai')";
      		$query = mysqli_query($con, $sql);
      		echo "Thêm thành công";
      	}
      }
 ?>
<br/>
	<form method="POSt" action="index.php?them=add_loai">
             ma loai:
             <input type="text" name="maloai"/>
            <br/> <br/>
		Tên loai:
		 <input type="text" name="tenloai"/>
		<br/> <br/>
           
		
		 <button  type="submit" name="btnThem">Them</button>
	    
	</form>
