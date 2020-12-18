<?php
	if(isset($_GET['page']))
	{
		$row = $_GET['page'];
	} 
	else { $row = ""; }
	if($row == "show_info")
	{
		include ('show_info.php');
	}
	else if( $row == "edit_info" )
	{
		include ('edit_info.php');
	} 
	else if( $row == "all_product" )
	{
		include ('all_product.php');
	} 
	else if( $row == "vong_product" )
	{
		include ('vong_product.php');
	} 
	else if( $row == "op_product" )
	{
		include ('op_product.php');
	} 
	else if( $row == "nhan_product" )
	{
		include ('nhan_product.php');
	} 
	else if( $row == "mockhoa_product" )
	{
		include ('mockhoa_product.php');
	} 
	else if( $row == "detail_pro" )
	{
		include ('detail_pro.php');
	} 

?>