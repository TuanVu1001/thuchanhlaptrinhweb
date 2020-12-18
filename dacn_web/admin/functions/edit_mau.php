<?php require_once("includes/connection.php");
if(!isset($_GET["id"]))
{
      $_GET["id"] = "undefine";
}
      $sql = "select * from mau where mamau = '$_GET[id]'";
      $query = mysqli_query($con, $sql);
      $data = mysqli_fetch_array($query);
      if(isset($_POST["btnSua"]))
      {
            $mamau = $_POST["mamau"];
      	$tenmau = $_POST["tenmau"];
      	
      	
      	
      		$sql = "UPDATE mau set tenmau='$tenmau'  where mamau = '$mamau'";
      		$query = mysqli_query($con, $sql);
      		 ?>
                        <script>
                              window.location="index.php?quanly=ql_mau";
                        </script>
                        <?php
      	
      }
 ?>
<br/>
	<form method="POSt" action="index.php?sua=edit_mau">
            Ma mau:
             <input type="text" readonly name="mamau" value="<?php echo $data["mamau"] ?>" />
            <br/> <br/>
		Tên mau:
		 <input type="text" name="tenmau" value="<?php echo $data["tenmau"] ?>" />
		<br/> <br/>
           
	
		
		 <button  type="submit" name="btnSua">Sửa</button>
	    
	</form>
