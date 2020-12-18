<?php require_once("includes/connection.php");
if(!isset($_GET["id"]))
{
      $_GET["id"] = "undefine";
}
      $sql = "select * from loai where maloai = '$_GET[id]'";
      $query = mysqli_query($con, $sql);
      $data = mysqli_fetch_array($query);
      if(isset($_POST["btnSua"]))
      {
            $maloai = $_POST["maloai"];
      	$tenloai = $_POST["tenloai"];
      	
      	
      	
      		$sql = "UPDATE loai set tenloai='$tenloai'  where maloai = '$maloai'";
      		$query = mysqli_query($con, $sql);
      		 ?>
                        <script>
                              window.location="index.php?quanly=ql_loai";
                        </script>
                        <?php
      	
      }
 ?>
<br/>
	<form method="POSt" action="index.php?sua=edit_loai">
            Ma loai:
             <input type="text" readonly name="maloai" value="<?php echo $data["maloai"] ?>" />
            <br/> <br/>
		Tên loai:
		 <input type="text" name="tenloai" value="<?php echo $data["tenloai"] ?>" />
		<br/> <br/>
           
	
		
		 <button  type="submit" name="btnSua">Sửa</button>
	    
	</form>
