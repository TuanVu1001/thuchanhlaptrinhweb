<?php require_once("includes/connection.php");
      if(isset($_POST["btnThem"]))
      {
      	$tenmau = $_POST["tenmau"];
      	$mamau = $_POST["mamau"];
      
      	
      	if( $mamau=="" || $tenmau=="" )
      	{
      		echo "Vui lòng điền đầy đủ thông tin";
      	}
      	else
      	{
      		$sql = "INSERT INTO mau(mamau, tenmau) values ('$mamau','$tenmau')";
      		$query = mysqli_query($con, $sql);
      		echo "Thêm thành công";
      	}
      }
 ?>
<br/>
	<form method="POSt" action="index.php?them=add_mau">
             Ma mau:
             <input type="text" name="mamau"/>
            <br/> <br/>
		Tên mau:
		 <input type="text" name="tenmau"/>
		<br/> <br/>
           
		
		 <button  type="submit" name="btnThem">Them</button>
	    
	</form>
